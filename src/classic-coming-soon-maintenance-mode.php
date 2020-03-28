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

namespace AkshitSethi\Plugins\MaintenanceMode;

// Stop execution if the file is called directly
defined( 'ABSPATH' ) || exit;

// Composer autoloder file.
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Plugin class where all the action happens.
 *
 * @category 	Plugins
 * @package 	AkshitSethi\Plugins\MaintenanceMode
 * @since 		1.0.0
 */
class MaintenanceMode {

	/**
	 * Loads textdomain for the plugin.
	 *
	 * @since 2.0.0
	 */
	public function load_textdomain() {
		load_plugin_textdomain( Config::PLUGIN_SLUG, false, Config::$plugin_path . 'i18n/' );
	}


	/**
	 * Attached to the activation hook.
	 */
	public function activate() {
		// Add to `wp_options` table.
		update_option( Config::DB_OPTION, Config::DEFAULT_OPTIONS );
	}


	/**
	 * Attached to the de-activation hook.
	 */
	public function deactivate() {
		// Remove from `wp_options` table.
		delete_option( Config::DB_OPTION );
	}

}

// Initialize plugin
$maintenance_mode = new MaintenanceMode();

/**
 * Hooks for plugin activation & deactivation.
 */
register_activation_hook( __FILE__, array( $maintenance_mode, 'activate' ) );
register_deactivation_hook( __FILE__, array( $maintenance_mode, 'deactivate' ) );
