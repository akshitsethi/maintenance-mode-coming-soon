<?php
/**
 * Admin class for the plugin.
 *
 * @package AkshitSethi\Plugins\MaintenanceMode
 */

namespace AkshitSethi\Plugins\MaintenanceMode;

use Exception;
use AkshitSethi\Plugins\MaintenanceMode\Config;
use DrewM\MailChimp\MailChimp;

/**
 * Admin options for the plugin.
 *
 * @package    AkshitSethi\Plugins\MaintenanceMode
 * @since      2.0.0
 */
class Admin {

	/**
	 * Class constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_menu' ) );
		add_action( 'wp_ajax_' . Config::PREFIX . 'support', array( $this, 'support_ticket' ) );
		add_action( 'wp_ajax_' . Config::PREFIX . 'options', array( $this, 'save_options' ) );
		add_action( 'wp_ajax_' . Config::PREFIX . 'refresh', array( $this, 'refresh_list' ) );

		add_filter( 'plugin_row_meta', array( $this, 'meta_links' ), 10, 2 );
	}


	/**
	 * Adds menu for the plugin.
	 */
	public function add_menu() {
		if ( is_admin() && current_user_can( 'manage_options' ) ) {
			$menu = add_options_page(
				esc_html__( 'Classic Coming Soon & Maintenance Mode', 'classic-coming-soon-maintenance-mode' ),
				esc_html__( 'Classic Coming Soon & Maintenance Mode', 'classic-coming-soon-maintenance-mode' ),
				'manage_options',
				Config::PREFIX . 'options',
				array( $this, 'settings' )
			);

			// Loading JS conditionally.
			add_action( 'load-' . $menu, array( $this, 'load_scripts' ) );
		}
	}


	/**
	 * Scripts for the plugin options page.
	 */
	public function admin_scripts() {
		wp_enqueue_style( Config::SHORT_SLUG . '-admin', Config::$plugin_url . 'assets/admin/css/admin.css', false, Config::VERSION );

		// Localize and enqueue script
		wp_enqueue_media();
		wp_enqueue_script( Config::SHORT_SLUG . '-webfont', Config::$plugin_url . 'assets/admin/js/webfont.js', false, Config::VERSION, true );
		wp_enqueue_script( Config::SHORT_SLUG . '-colorpicker', Config::$plugin_url . 'assets/admin/js/jscolor.js', false, Config::VERSION, true );
		wp_enqueue_script( Config::SHORT_SLUG . '-editor', Config::$plugin_url . 'assets/admin/js/ace-editor/ace.js', false, Config::VERSION, true );
		wp_enqueue_script( Config::SHORT_SLUG . '-admin', Config::$plugin_url . 'assets/admin/js/admin.js', array( 'jquery' ), Config::VERSION, true );

		$localize = array(
			'prefix'        => Config::PREFIX,
			'save_text'     => esc_html__( 'Save Changes', 'classic-coming-soon-maintenance-mode' ),
			'support_text'  => esc_html__( 'Ask for Support', 'classic-coming-soon-maintenance-mode' ),
			'select_text'   => esc_html__( 'Select Image', 'classic-coming-soon-maintenance-mode' ),
			'upload_text'   => esc_html__( 'Select or upload via WP native uploader', 'classic-coming-soon-maintenance-mode' ),
			'remove_text'   => esc_html__( 'Remove', 'classic-coming-soon-maintenance-mode' ),
			'no_api_text'   => esc_html__( 'Provide your MailChimp API key in the above box and click on `Save Changes` option. Your lists will appear over here.', 'classic-coming-soon-maintenance-mode' ),
			'list_text'     => esc_html__( 'Select your MailChimp list in which you would like to store the subscribers data.', 'classic-coming-soon-maintenance-mode' ),
			'refresh_text'  => esc_html__( 'Refresh List', 'classic-coming-soon-maintenance-mode' ),
			'default_fonts' => Config::DEFAULT_FONTS,
			'nonce'         => wp_create_nonce( Config::PREFIX . 'nonce' ),
		);
		wp_localize_script( Config::SHORT_SLUG . '-admin', Config::PREFIX . 'admin_l10n', $localize );
	}


	/**
	 * Adds action to load scripts via the scripts hook for admin.
	 */
	public function load_scripts() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
	}


	/**
	 * Adds custom links to the meta on the plugins page.
	 *
	 * @param array  $links Array of links for the plugins
	 * @param string $file  Name of the main plugin file
	 *
	 * @return array
	 */
	public function meta_links( $links, $file ) {
		if ( strpos( $file, 'widgets-bundle.php' ) !== false ) {
			$new_links = array(
				'<a href="https://www.facebook.com/akshitsethi" target="_blank">' . esc_html__( 'Facebook', 'classic-coming-soon-maintenance-mode' ) . '</a>',
				'<a href="https://twitter.com/akshitsethi" target="_blank">' . esc_html__( 'Twitter', 'classic-coming-soon-maintenance-mode' ) . '</a>',
			);

			$links = array_merge( $links, $new_links );
		}

		return $links;
	}


	/**
	 * Processes plugin options via an AJAX call.
	 */
	public function save_options() {
		// Default response
		$response = array(
			'code'     => 'success',
			'response' => esc_html__( 'Options have been updated successfully.', 'classic-coming-soon-maintenance-mode' ),
		);

		// Check for _nonce
		if ( empty( $_POST['_nonce'] ) || ! wp_verify_nonce( $_POST['_nonce'], Config::PREFIX . 'nonce' ) ) {
			$response['code']     = 'error';
			$response['response'] = esc_html__( 'Request does not seem to be a valid one. Try again by refreshing the page.', 'classic-coming-soon-maintenance-mode' );
		}

		// Filter and sanitize options
		$options = array(
			// Basic
			'status'                => isset( $_POST[ Config::PREFIX . 'status' ] ) ? true : false,
			'title'                 => sanitize_text_field( $_POST[ Config::PREFIX . 'title' ] ),
			'header_text'           => sanitize_textarea_field( $_POST[ Config::PREFIX . 'header' ] ),
			'secondary_text'        => sanitize_textarea_field( $_POST[ Config::PREFIX . 'secondary' ] ),
			'antispam_text'         => sanitize_text_field( $_POST[ Config::PREFIX . 'antispam' ] ),
			'custom_login_url'      => sanitize_text_field( $_POST[ Config::PREFIX . 'custom_login' ] ),
			'show_logged_in'        => isset( $_POST[ Config::PREFIX . 'showlogged' ] ) ? true : false,
			'exclude_se'            => isset( $_POST[ Config::PREFIX . 'excludese' ] ) ? true : false,
			'arrange'               => sanitize_text_field( $_POST[ Config::PREFIX . 'arrange' ] ),
			'analytics'             => strip_tags( $_POST[ Config::PREFIX . 'analytics' ] ),

			// Email
			'mailchimp_api'         => sanitize_text_field( $_POST[ Config::PREFIX . 'api' ] ),
			'mailchimp_list'        => isset( $_POST[ Config::PREFIX . 'list' ] ) ? sanitize_text_field( $_POST[ Config::PREFIX . 'list' ] ) : false,
			'message_noemail'       => sanitize_text_field( $_POST[ Config::PREFIX . 'message_noemail' ] ),
			'message_error'         => sanitize_text_field( $_POST[ Config::PREFIX . 'message_error' ] ),
			'message_wrong'         => sanitize_text_field( $_POST[ Config::PREFIX . 'message_wrong' ] ),
			'message_done'          => sanitize_text_field( $_POST[ Config::PREFIX . 'message_done' ] ),

			// Design
			'logo'                  => sanitize_text_field( $_POST[ Config::PREFIX . 'logo' ] ),
			'favicon'               => sanitize_text_field( $_POST[ Config::PREFIX . 'favicon' ] ),
			'bg_cover'              => sanitize_text_field( $_POST[ Config::PREFIX . 'bg' ] ),
			'content_overlay'       => isset( $_POST[ Config::PREFIX . 'overlay' ] ) ? true : false,
			'content_bg_opacity'    => sanitize_text_field( $_POST[ Config::PREFIX . 'overlay_opacity' ] ),
			'content_bg'            => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'overlay_color' ] ),
			'content_border'        => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'overlay_border_color' ] ),
			'content_border_width'  => absint( $_POST[ Config::PREFIX . 'overlay_border_width' ] ),
			'content_border_radius' => absint( $_POST[ Config::PREFIX . 'overlay_border_radius' ] ),
			'content_width'         => absint( $_POST[ Config::PREFIX . 'width' ] ),
			'bg_color'              => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'color' ] ),
			'content_position'      => sanitize_text_field( $_POST[ Config::PREFIX . 'position' ] ),
			'content_alignment'     => sanitize_text_field( $_POST[ Config::PREFIX . 'alignment' ] ),
			'header_font'           => sanitize_text_field( $_POST[ Config::PREFIX . 'header_font' ] ),
			'secondary_font'        => sanitize_text_field( $_POST[ Config::PREFIX . 'secondary_font' ] ),
			'header_font_size'      => sanitize_text_field( $_POST[ Config::PREFIX . 'header_size' ] ),
			'secondary_font_size'   => sanitize_text_field( $_POST[ Config::PREFIX . 'secondary_size' ] ),
			'header_font_color'     => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'header_color' ] ),
			'secondary_font_color'  => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'secondary_color' ] ),
			'antispam_font_size'    => sanitize_text_field( $_POST[ Config::PREFIX . 'antispam_size' ] ),
			'antispam_font_color'   => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'antispam_color' ] ),

			// Form
			'input_text'            => sanitize_text_field( $_POST[ Config::PREFIX . 'input_text' ] ),
			'button_text'           => sanitize_text_field( $_POST[ Config::PREFIX . 'button_text' ] ),
			'ignore_form_styles'    => isset( $_POST[ Config::PREFIX . 'ignore_styles' ] ) ? true : false,
			'input_font_size'       => sanitize_text_field( $_POST[ Config::PREFIX . 'input_size' ] ),
			'button_font_size'      => sanitize_text_field( $_POST[ Config::PREFIX . 'button_size' ] ),
			'input_font_color'      => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'input_color' ] ),
			'button_font_color'     => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'button_color' ] ),
			'input_bg'              => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'input_bg' ] ),
			'button_bg'             => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'button_bg' ] ),
			'input_bg_hover'        => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'input_bg_hover' ] ),
			'button_bg_hover'       => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'button_bg_hover' ] ),
			'input_border_width'    => absint( $_POST[ Config::PREFIX . 'input_border_width' ] ),
			'button_border_width'   => absint( $_POST[ Config::PREFIX . 'button_border_width' ] ),
			'input_border'          => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'input_border' ] ),
			'button_border'         => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'button_border' ] ),
			'input_border_hover'    => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'input_border_hover' ] ),
			'button_border_hover'   => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'button_border_hover' ] ),
			'success_background'    => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'success_background' ] ),
			'success_color'         => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'success_color' ] ),
			'error_background'      => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'error_background' ] ),
			'error_color'           => sanitize_hex_color_no_hash( $_POST[ Config::PREFIX . 'error_color' ] ),

			// Advanced
			'disable_settings'      => isset( $_POST[ Config::PREFIX . 'disable' ] ) ? true : false,
			'custom_html'           => wp_kses_post( $_POST[ Config::PREFIX . 'html' ] ),
			'custom_css'            => wp_strip_all_tags( $_POST[ Config::PREFIX . 'css' ] ),
		);

		// Query the MailChimp API and pass the fetched lists to JS if the request returns 200
		if ( ! empty( $options['mailchimp_api'] ) ) {
			// Try to fetch from the transient
			$cached_data = get_transient( Config::PREFIX . 'email_lists' );

			// Transient present?
			if ( $cached_data ) {
				$response['data'] = $cached_data;
			} else {
				try {
					$mailchimp = new MailChimp( $options['mailchimp_api'] );

					// Fetch lists
					$lists = $mailchimp->get( 'lists' );

					// API call went fine?
					if ( $mailchimp->success() ) {
						if ( count( $lists['lists'] ) > 0 ) {
							foreach ( $lists['lists'] as $list ) {
								$response['data'][ sanitize_text_field( $list['id'] ) ] = sanitize_text_field( $list['name'] );
							}

							// Set transient for future calls
							// Expiry after one month
							set_transient( Config::PREFIX . 'email_lists', $response['data'], 60 * 60 * 24 * 30 );
						} else {
							$response['code']     = 'warning';
							$response['response'] = esc_html__( 'It seems that there is no list created for this account. Why not create one on the MailChimp website and then try here.', 'classic-coming-soon-maintenance-mode' );
						}
					} else {
						$response['code']     = 'error';
						$response['response'] = $mailchimp->getLastError();
					}
				} catch ( Exception $e ) {
					$response['code']     = 'error';
					$response['response'] = $e->getMessage();
				}
			}
		} else {
			// Delete transient (just to be sure)
			delete_transient( Config::PREFIX . 'email_lists' );
		}

		// Update options
		update_option( Config::DB_OPTION, $options );

		// Headers for JSON format
		header( 'Content-Type: application/json' );
		echo json_encode( $response );

		// Exit for AJAX functions
		exit;
	}


	/**
	 * Creates support ticket via the options panel.
	 */
	public function support_ticket() {
		// Storing response in an array
		$response = array(
			'code'     => 'error',
			'response' => esc_html__( 'Please fill in both the fields to create your support ticket.', 'classic-coming-soon-maintenance-mode' ),
		);

		// Filter and sanitize
		if ( ! empty( $_POST[ Config::PREFIX . 'support_email' ] ) && ! empty( $_POST[ Config::PREFIX . 'support_issue' ] ) ) {
			$admin_email = sanitize_text_field( $_POST[ Config::PREFIX . 'support_email' ] );
			$issue       = htmlentities( $_POST[ Config::PREFIX . 'support_issue' ] );
			$subject     = '[Maintenance Mode v' . Config::VERSION . '] by ' . $admin_email;
			$body        = "Email: $admin_email \r\nIssue: $issue";
			$headers     = 'From: ' . $admin_email . "\r\n" . 'Reply-To: ' . $admin_email;

			// Send email
			if ( wp_mail( '19bbdec26d2d11ea94e7033192a1a3c3@tickets.tawk.to', $subject, $body, $headers ) ) {
				// Success
				$response = array(
					'code'     => 'success',
					'response' => esc_html__( 'I have received your support ticket and will get back to you shortly!', 'classic-coming-soon-maintenance-mode' ),
				);
			} else {
				// Failure
				$response = array(
					'code'     => 'error',
					'response' => esc_html__( 'There was an error creating the support ticket. You can try again later or send me an email directly at akshitsethi@gmail.com', 'classic-coming-soon-maintenance-mode' ),
				);
			}
		}

		// Headers for JSON format
		header( 'Content-Type: application/json' );
		echo json_encode( $response );

		// Exit
		// For AJAX functions
		exit();
	}


	/**
	 * Displays settings page for the plugin.
	 */
	public function settings() {
		// Plugin options
		$options = get_option( Config::DB_OPTION );

		// Admin email
		$admin_email = sanitize_email( get_option( 'admin_email', '' ) );

		// Settings page
		require_once Config::$plugin_path . 'inc/admin/views/settings.php';
	}


	/**
	 * Button for refreshing the email lists.
	 *
	 * @since 1.0.0
	 */
	private function refresh_button() {
		echo '&nbsp; <button type="button" id="' . Config::PREFIX . 'refresh' . '" class="as-btn as-small">' . esc_html__( 'Refresh List', 'classic-coming-soon-maintenance-mode' ) . '</button>';
	}


	/**
	 * Refresh email list for the admin.
	 *
	 * @since 1.0.0
	 */
	public function refresh_list() {
		// Default response
		$response = array(
			'code'     => 'success',
			'response' => esc_html__( 'Email list has been refreshed.', 'classic-coming-soon-maintenance-mode' ),
		);

		// Check for _nonce
		if ( empty( $_POST['_nonce'] ) || ! wp_verify_nonce( $_POST['_nonce'], Config::PREFIX . 'nonce' ) ) {
			$response['code']     = 'error';
			$response['response'] = esc_html__( 'Request does not seem to be a valid one. Try again by refreshing the page.', 'classic-coming-soon-maintenance-mode' );
		}

		// Get options
		$options = get_option( Config::DB_OPTION );

		// Options exist?
		if ( $options ) {
			// Query the MailChimp API and pass the fetched lists to JS if the request returns 200
			if ( ! empty( $options['mailchimp_api'] ) ) {
				try {
					$mailchimp = new MailChimp( $options['mailchimp_api'] );

					// Fetch lists
					$lists = $mailchimp->get( 'lists' );

					// API call went fine?
					if ( $mailchimp->success() ) {
						if ( count( $lists['lists'] ) > 0 ) {
							foreach ( $lists['lists'] as $list ) {
								$response['data'][ sanitize_text_field( $list['id'] ) ] = sanitize_text_field( $list['name'] );
							}

							// Set transient for future calls
							// Expiry after one month
							set_transient( Config::PREFIX . 'email_lists', $response['data'], 60 * 60 * 24 * 30 );
						} else {
							$response['code']     = 'warning';
							$response['response'] = esc_html__( 'It seems that there is no list created for this account. Why not create one on the MailChimp website and then try here.', 'classic-coming-soon-maintenance-mode' );
						}
					} else {
						$response['code']     = 'error';
						$response['response'] = $mailchimp->getLastError();
					}
				} catch ( Exception $e ) {
					$response['code']     = 'error';
					$response['response'] = $e->getMessage();
				}
			} else {
				// Delete transient (just to be sure)
				delete_transient( Config::PREFIX . 'email_lists' );
			}
		} else {
			$response['code']     = 'error';
			$response['response'] = esc_html__( 'Unable to grab options from the database. Try reactivating the plugin.', 'classic-coming-soon-maintenance-mode' );
		}

		// Headers for JSON format
		header( 'Content-Type: application/json' );
		echo json_encode( $response );

		// Exit for AJAX functions
		exit;
	}

}
