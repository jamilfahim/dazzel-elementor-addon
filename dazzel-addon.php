<?php
/**
 * Plugin Name: Dazzel Addon
 * Description: Custom Elementor addon.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Jh Fahim
 * Author URI:  https://jhfahim.com/
 * Text Domain: jhfahim
 * 
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function jhfahim_addon() {
	

	// Load plugin file
	require_once( __DIR__ . '/elementor/plugin.php' );


	// Run the plugin
	\Jhfahim_Addon\Plugin::instance();



}
add_action( 'plugins_loaded', 'jhfahim_addon' );