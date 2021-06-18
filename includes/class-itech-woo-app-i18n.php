<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://itech-softsolutions.com/
 * @since      1.0.0
 *
 * @package    Itech_Woo_App
 * @subpackage Itech_Woo_App/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Itech_Woo_App
 * @subpackage Itech_Woo_App/includes
 * @author     Mstoreapp <support@mstoreapp.com>
 */
class Itech_Woo_App_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'itech-woo-app',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
