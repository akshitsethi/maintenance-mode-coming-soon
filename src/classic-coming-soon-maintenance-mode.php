<?php
/**
 * Plugin Name: 	Classic Coming Soon & Maintenance Mode
 * Description: 	Simply awesome coming soon & maintenance mode plugin for your WordPress blog. Try it to know why there is no other plugin like this one.
 * Version: 			1.0.0
 * Runtime: 			5.6+
 * Author: 				akshitsethi
 * Text Domain: 	classic-coming-soon-maintenance-mode
 * Domain Path: 	i18n
 * Author URI: 		https://akshitsethi.com
 * License: 			GPLv3
 * License URI: 	http://www.gnu.org/licenses/gpl-3.0.txt
 */

 if ( ! defined( 'WPINC' ) ) {
	die;
}

/* Constants we will be using throughout the plugin. */
define( 'SIGNALS_CSMM_URL', plugins_url( '', __FILE__ ) );
define( 'SIGNALS_CSMM_PATH', plugin_dir_path( __FILE__ ) );

/**
 * For the plugin activation & de-activation.
 * We are doing nothing over here.
 */
function csmm_plugin_activation() {

	// Checking if the options exist in the database
	$signals_csmm_options = get_option( 'signals_csmm_options' );

	// Default options for the plugin on activation
	$default_options = array(
		'status'				=> '2',
		'title' 				=> 'Maintenance Mode',
		'header_text' 			=> 'Maintenance Mode',
		'secondary_text' 		=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra eu felis quis lobortis. Proin vitae rutrum nisl, ut ullamcorper quam. Praesent faucibus ligula ac nisl varius dictum. Maecenas iaculis posuere orci, sed consectetur augue.',
		'antispam_text' 		=> 'And yes, we hate spam too!',
		'custom_login_url' 		=> '',
		'show_logged_in' 		=> '2',
		'exclude_se'			=> '1',
		'mailchimp_api'			=> '',
		'mailchimp_list' 		=> '',
		'logo'					=> '',
		'favicon'				=> '',

		'bg_cover' 				=> '',
		'content_overlay' 		=> '2',
		'content_width'			=> '440',
		'bg_color' 				=> 'ffffff',
		'content_position'		=> 'center',
		'content_alignment'		=> 'left',

		'header_font' 			=> 'Karla',
		'secondary_font' 		=> 'Karla',
		'header_font_size' 		=> '28',
		'secondary_font_size' 	=> '14',
		'header_font_color' 	=> '090909',
		'secondary_font_color' 	=> '090909',

		'antispam_font_size' 	=> '13',
		'antispam_font_color' 	=> 'bbbbbb',

		'input_text' 			=> 'Enter your email address..',
		'button_text' 			=> 'Subscribe',

		'ignore_form_styles' 	=> '2',

		'input_font_size'		=> '13',
		'button_font_size'		=> '12',
		'input_font_color'		=> '090909',
		'button_font_color'		=> 'ffffff',

		'input_bg'				=> '',
		'button_bg'				=> '0f0f0f',
		'input_bg_hover'		=> '',
		'button_bg_hover'		=> '0a0a0a',

		'input_border'			=> 'eeeeee',
		'button_border'			=> '0f0f0f',
		'input_border_hover'	=> 'bbbbbb',
		'button_border_hover'	=> '0a0a0a',

		'disable_settings' 		=> '2',
		'custom_html'			=> '',
		'custom_css'			=> ''
	);

	// If the options are not there in the database, then create the default options for the plugin
	if ( ! $signals_csmm_options ) {
		update_option( 'signals_csmm_options', $default_options );
	} else {
		// If present in the database, merge with the default ones
		// This is to provide compatibility with earlier versions. Although this doesn't solves the purpose completely
		$default_options = array_merge( $default_options, $signals_csmm_options );
		update_option( 'signals_csmm_options', $default_options );
	}

}
register_activation_hook( __FILE__, 'csmm_plugin_activation' );



/* Hook for the plugin deactivation. */
function csmm_plugin_deactivation() {

	// Silence is golden
	// We might use this in future versions

}
register_deactivation_hook( __FILE__, 'csmm_plugin_deactivation' );



/**
 * Including files necessary for the management panel of the plugin.
 * Basically, support panel and option to insert custom .css is provided.
 */
if ( is_admin() ) {
	require SIGNALS_CSMM_PATH . 'framework/admin/init.php';
}



/**
 * Let's start the plugin now.
 * All the widgets are included and registered using the right hook.
 */
require SIGNALS_CSMM_PATH . 'framework/public/init.php';