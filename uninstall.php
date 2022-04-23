<?php
/**
 * File which gets called on plugin uninstall.
 *
 * @package AkshitSethi/Plugins/MaintenanceMode
 */

namespace AkshitSethi\Plugins\MaintenanceMode;

// Prevent unauthorized access.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

// Remove stored data.
delete_option( Config::DB_OPTION );
delete_transient( Config::PREFIX . 'email_lists' );
