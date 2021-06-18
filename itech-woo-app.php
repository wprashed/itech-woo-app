<?php

/**
 *
 * @link              https://itech-softsolutions.com/
 * @since             1.0.0
 * @package           Itech_Woo_App
 *
 * @wordpress-plugin
 * Plugin Name:       Itech Woo App
 * Plugin URI:        https://itech-softsolutions.com/
 * Description:       Connects Mstore Mobile app with api.
 * Version:           1.0.1
 * Author:            Itech Soft Solutions
 * Author URI:        https://itech-softsolutions.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       itech-woo-app
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-itech-woo-app-activator.php
 */
function activate_Itech_Woo_App() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-itech-woo-app-activator.php';
	Itech_Woo_App_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-itech-woo-app-deactivator.php
 */
function deactivate_Itech_Woo_App() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-itech-woo-app-deactivator.php';
	Itech_Woo_App_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Itech_Woo_App' );
register_deactivation_hook( __FILE__, 'deactivate_Itech_Woo_App' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-itech-woo-app.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Itech_Woo_App() {

	$plugin = new Itech_Woo_App();
	$plugin->run();

}
run_Itech_Woo_App();

// Require Plugin

require_once plugin_dir_path( __FILE__ ) . 'lib/class-tgm-plugin-activation.php';

function Itech_Woo_App_register_required_plugins() {
	
	$plugins = array(

		array(
			'name'      => 'Redux Framework',
			'slug'      => 'redux-framework',
			'required'  => true,
		),

	);

	$config = array(
		'id'           => 'Itech_Woo_App',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'plugins.php',
		'capability'   => 'manage_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',

	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'Itech_Woo_App_register_required_plugins' );