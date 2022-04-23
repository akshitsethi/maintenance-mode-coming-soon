<?php
/**
 * Configuration file for the plugin.
 *
 * @package AkshitSethi\Plugins\MaintenanceMode
 */

namespace AkshitSethi\Plugins\MaintenanceMode;

/**
 * Set configuration options.
 */
class Config {

	/**
	 * @var string
	 */
	public static $plugin_url;

	/**
	 * @var string
	 */
	public static $plugin_path;

	/**
	 * @var string
	 */
	const SLUG = 'maintenance-mode-coming-soon';

	/**
	 * @var float
	 */
	const VERSION = '@##VERSION##@';

	/**
	 * @var string
	 */
	const SHORT_SLUG = 'mmcs';

	/**
	 * @var string
	 */
	const PREFIX = self::SHORT_SLUG . '_';

	/**
	 * @var string
	 */
	const DB_OPTION = self::PREFIX . 'settings';

	/**
	 * Class constructor.
	 */
	public function __construct() {
		self::$plugin_url  = plugin_dir_url( dirname( __FILE__ ) );
		self::$plugin_path = plugin_dir_path( dirname( __FILE__ ) );
	}

	/**
	 * Get plugin name.
	 *
	 * @since 1.0.0
	 */
	public static function get_plugin_name() {
		return esc_html__( 'Maintenance Mode & Coming Soon', 'maintenance-mode-coming-soon' );
	}

}
