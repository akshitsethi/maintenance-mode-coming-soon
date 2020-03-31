<?php
/**
 * Frontend class for the plugin.
 *
 * @package AkshitSethi\Plugins\MaintenanceMode
 */

namespace AkshitSethi\Plugins\MaintenanceMode;

use AkshitSethi\Plugins\MaintenanceMode\Config;

/**
 * Frontend for the plugin.
 *
 * @package    AkshitSethi\Plugins\MaintenanceMode
 * @since      2.0.0
 */
class Front {

	/**
	 * Class constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}


	/**
	 * Initialize the frontend for the plugin.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		// Plugin options from the database
		$options 		= get_option( Config::DB_OPTION );

		// Login URL for the admin
		$login_url 	= wp_login_url();

		// Checking for the server protocol status
		$protocol 	= isset( $_SERVER['HTTPS'] ) ? 'https' : 'http' ;

		// Server address of the current page
		$server_url = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		// Not for the backend
		if ( ! is_admin() ) {
			if ( $options['status'] ) {
				/**
				 * A lot of checks are going on over here.
				 * We are checking for admin role, crawler status, and important wordpress pages to bypass.
				 * If the admin decides to exclude search engine from viewing the plugin, the website will be shown.
				 */
				if ( false === strpos( $server_url, '/wp-login.php' )
					&& false === strpos( $server_url, '/wp-admin/' )
					&& false === strpos( $server_url, '/async-upload.php' )
					&& false === strpos( $server_url, '/upgrade.php' )
					&& false === strpos( $server_url, '/plugins/' )
					&& false === strpos( $server_url, '/xmlrpc.php' )
					&& false === strpos( $server_url, $login_url )
					&& false === strpos( $server_url, $options['custom_login_url'] ) ) {

					// Checking for the search engine option
					if ( $options['exclude_se'] ) {
						if ( $this->check_referrer() ) {
							return;
						}
					}

					// For logged-in users
					if ( $options['show_logged_in'] ) {
						// Checking if the user is logged in or not
						if ( is_user_logged_in() ) {
							return;
						}
					}

					// Render the maintenance mode template
					$this->render_template( $options );
				}
			}
		}
	}


	/**
	 * Checks for the list of crawlers.
	 *
	 * @since 1.0.0
	 * @return boolean
	 */
	private function check_referrer() {
		// List of crawlers
		$crawlers = array(
			'Abacho'          => 	'AbachoBOT',
			'Accoona'         => 	'Acoon',
			'AcoiRobot'       => 	'AcoiRobot',
			'Adidxbot'        => 	'adidxbot',
			'AltaVista robot' => 	'Altavista',
			'Altavista robot' => 	'Scooter',
			'ASPSeek'         => 	'ASPSeek',
			'Atomz'           => 	'Atomz',
			'Bing'            => 	'bingbot',
			'BingPreview'     => 	'BingPreview',
			'CrocCrawler'     => 	'CrocCrawler',
			'Dumbot' 					=> 	'Dumbot',
			'eStyle Bot'     	=> 	'eStyle',
			'FAST-WebCrawler'	=> 	'FAST-WebCrawler',
			'GeonaBot'       	=> 	'GeonaBot',
			'Gigabot'        	=> 	'Gigabot',
			'Google'         	=> 	'Googlebot',
			'ID-Search Bot'  	=> 	'IDBot',
			'Lycos spider'   	=> 	'Lycos',
			'MSN'            	=> 	'msnbot',
			'MSRBOT'         	=> 	'MSRBOT',
			'Rambler'        	=> 	'Rambler',
			'Scrubby robot'  	=> 	'Scrubby',
			'Yahoo'           => 	'Yahoo'
		);

		// Checking for the crawler over here
		if ( $this->string_to_array( $_SERVER['HTTP_USER_AGENT'], $crawlers ) ) {
			return true;
		}

		return false;
	}


	/**
	 * Match the user agent with the crawlers array.
	 *
	 * @since 1.0.0
	 * @param string $str User agent
	 * @param array $crawlers List of crawlers to match against
	 *
	 * @return boolean
	 */
	private function string_to_array( $str, $crawlers ) {
		$regexp = '~(' . implode( '|', array_values( $crawlers ) ) . ')~i';
		return ( bool ) preg_match( $regexp, $str );
	}


	/**
	 * Renders the frontend template for the plugin.
	 */
	private function render_template( $options ) {
		// Fix for W3 Total Cache plugin
		if ( function_exists( 'wp_cache_clear_cache' ) ) {
			ob_end_clean();
			wp_cache_clear_cache();
		}

		// Fix for WP Super Cache plugin
		if ( function_exists( 'w3tc_pgcache_flush' ) ) {
			ob_end_clean();
			w3tc_pgcache_flush();
		}

		/**
		 * Using the nocache_headers() to ensure that different nocache headers are sent to
		 * different browsers. We don't want any browser to cache the maintainance page.
		 */
		nocache_headers();
		ob_start();

		// Template file
		if ( $options['disable_settings'] ) {
			require_once Config::$plugin_path . 'inc/views/blank.php';
		} else {
			require_once Config::$plugin_path . 'inc/views/html.php';
		}

		ob_flush();
		exit;
	}


	/**
	 * For replacing the blank option with the default one.
	 *
	 * @since 1.0.0
	 * @param string $option The option value to check
	 * @param string $default Default value for the option
	 *
	 * @return string $output
	 */
	private function get_option( $option, $default ) {
		if ( empty( $option ) ) {
			return $default;
		}

		return $option;
	}

}
