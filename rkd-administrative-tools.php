<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/johntzulik
 * @since             1.0.0
 * @package           Rkd_Administrative_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       RKD Administrative Tools
 * Plugin URI:        https://rkdgroup.com
 * Description:       This tools helps to track some movements inside of a WP site
 * Version:           1.0.0
 * Author:            Juan Felipe
 * Author URI:        https://github.com/johntzulik/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rkd-administrative-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RKD_ADMINISTRATIVE_TOOLS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rkd-administrative-tools-activator.php
 */
function activate_rkd_administrative_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rkd-administrative-tools-activator.php';
	Rkd_Administrative_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rkd-administrative-tools-deactivator.php
 */
function deactivate_rkd_administrative_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rkd-administrative-tools-deactivator.php';
	Rkd_Administrative_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rkd_administrative_tools' );
register_deactivation_hook( __FILE__, 'deactivate_rkd_administrative_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rkd-administrative-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rkd_administrative_tools() {

	$plugin = new Rkd_Administrative_Tools();
	$plugin->run();

}
run_rkd_administrative_tools();
