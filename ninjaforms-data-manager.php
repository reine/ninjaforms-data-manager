<?php
/**
 * Ninja Forms Data Manager
 *
 * A plugin extension for Ninja Forms to allow custom management of submitted data.
 *
 * @package   Ninja_Forms_Data_Manager
 * @author    Reine Sison <reine@mydevstudio.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins
 * @copyright 2014 Reine Sison
 *
 * @wordpress-plugin
 * Plugin Name:       Ninja Forms Data Manager
 * Plugin URI:        http://wordpress.org/plugins
 * Description:       A plugin extension for Ninja Forms to allow custom management of submitted data. Requires <a href="http://ninjaforms.com">Ninja Forms</a> (current version tested on 2.5.1).
 * Version:           1.0.0
 * Author:            Reine Sison
 * Author URI:        http://mydevstudioapps.com
 * Text Domain:       ninjaforms-data-manager
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/reine
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

global $wpdb;

define("NINJAFORMS_DATAMANAGER_DIR", WP_PLUGIN_DIR."/".basename( dirname( __FILE__ ) ) );
define("NINJAFORMS_DATAMANAGER_URL", plugins_url()."/".basename( dirname( __FILE__ ) ) );

define("NINJA_FORMS_TABLE_NAME", $wpdb->prefix . "ninja_forms");
define("NINJA_FORMS_FIELDS_TABLE_NAME", $wpdb->prefix . "ninja_forms_fields");
define("NINJA_FORMS_FAV_FIELDS_TABLE_NAME", $wpdb->prefix . "ninja_forms_fav_fields");
define("NINJA_FORMS_SUBS_TABLE_NAME", $wpdb->prefix . "ninja_forms_subs");

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-ninjaforms-data-manager.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'Ninja_Forms_Data_Manager', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Ninja_Forms_Data_Manager', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Ninja_Forms_Data_Manager', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-ninjaforms-data-manager-admin.php' );
	add_action( 'plugins_loaded', array( 'Ninja_Forms_Data_Manager_Admin', 'get_instance' ) );

}
