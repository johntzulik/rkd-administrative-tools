<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/johntzulik
 * @since      1.0.0
 *
 * @package    Rkd_Administrative_Tools
 * @subpackage Rkd_Administrative_Tools/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rkd_Administrative_Tools
 * @subpackage Rkd_Administrative_Tools/includes
 * @author     Juan Felipe <john.tzulik@gmail.com>
 */
class Rkd_Administrative_Tools_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rkd-administrative-tools',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
