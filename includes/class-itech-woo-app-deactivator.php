<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://itech-softsolutions.com/
 * @since      1.0.0
 *
 * @package    Itech_Woo_App
 * @subpackage Itech_Woo_App/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Itech_Woo_App
 * @subpackage Itech_Woo_App/includes
 * @author     Mstoreapp <support@mstoreapp.com>
 */
class Itech_Woo_App_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

	  // Remove the rewrite rule on deactivation
	  global $wp_rewrite;
	  $wp_rewrite->flush_rules();

	}

}
