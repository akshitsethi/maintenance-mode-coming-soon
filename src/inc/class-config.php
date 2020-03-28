<?php
/**
 * Configuration file for the plugin.
 */

namespace AkshitSethi\Plugins\MaintenanceMode;

/**
 * Set configuration options.
 *
 * @package AkshitSethi\Plugins\MaintenanceMode
 */
class Config {

	public static $plugin_url;
	public static $plugin_path;
	public static $default_options;

	const PLUGIN_SLUG = 'classic-coming-soon-maintenance-mode';
	const SHORT_SLUG  = 'ccsmm';
	const VERSION     = '1.0.0';
	const DB_OPTION   = 'as_' . self::SHORT_SLUG;
	const PREFIX      = self::SHORT_SLUG . '_';


	/**
	 * Class constructor.
	 */
	public function __construct() {
		self::$plugin_url  = plugin_dir_url( dirname( __FILE__ ) );
		self::$plugin_path = plugin_dir_path( dirname( __FILE__ ) );
	}


	/**
	 * Add default options.
	 *
	 * @since 1.0.0
	 */
	public function default_options() {
		self::$default_options = array(
			'status'								=> false,
			'title' 								=> esc_html__( 'Maintenance Mode', 'classic-coming-soon-maintenance-mode' ),
			'header_text' 					=> esc_html__( 'Maintenance Mode', 'classic-coming-soon-maintenance-mode' ),
			'secondary_text' 				=> esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra eu felis quis lobortis. Proin vitae rutrum nisl, ut ullamcorper quam. Praesent faucibus ligula ac nisl varius dictum. Maecenas iaculis posuere orci, sed consectetur augue.', 'classic-coming-soon-maintenance-mode' ),
			'antispam_text' 				=> esc_html__( 'And yes, we hate spam too!', 'classic-coming-soon-maintenance-mode' ),
			'custom_login_url' 			=> '',
			'show_logged_in' 				=> false,
			'exclude_se'						=> true,
			'mailchimp_api'					=> '',
			'mailchimp_list' 				=> '',
			'logo'									=> '',
			'favicon'								=> '',

			'bg_cover' 							=> '',
			'content_overlay' 			=> false,
			'content_width'					=> '440',
			'bg_color' 							=> 'ffffff',
			'content_position'			=> 'center',
			'content_alignment'			=> 'left',

			'header_font' 					=> 'Karla',
			'secondary_font' 				=> 'Karla',
			'header_font_size' 			=> '28',
			'secondary_font_size' 	=> '14',
			'header_font_color' 		=> '090909',
			'secondary_font_color' 	=> '090909',

			'antispam_font_size' 		=> '13',
			'antispam_font_color' 	=> 'bbbbbb',

			'input_text' 						=> esc_html__( 'Enter your email address..', 'classic-coming-soon-maintenance-mode' ),
			'button_text' 					=> esc_html__( 'Subscribe', 'classic-coming-soon-maintenance-mode' ),

			'ignore_form_styles' 		=> false,

			'input_font_size'				=> '13',
			'button_font_size'			=> '12',
			'input_font_color'			=> '090909',
			'button_font_color'			=> 'ffffff',

			'input_bg'							=> '',
			'button_bg'							=> '0f0f0f',
			'input_bg_hover'				=> '',
			'button_bg_hover'				=> '0a0a0a',

			'input_border'					=> 'eeeeee',
			'button_border'					=> '0f0f0f',
			'input_border_hover'		=> 'bbbbbb',
			'button_border_hover'		=> '0a0a0a',

			'disable_settings' 			=> false,
			'custom_html'						=> '',
			'custom_css'						=> ''
		);
	}

}

new Config();
