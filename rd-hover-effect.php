<?php
/**
 * @package RdHoverEffects
 */
/*
/*
Plugin Name: RD Hover Effects
Plugin URI: https://codecans.com/
Description: RD Hover Effects WordPress Plugin is an impressive hover effects powered by pure CSS3. Easy to use the beautiful amazing Image Hover Effects for your website.
Author: codecans
Author URI: https://codecans.com/
License: GPL2
Version: 4.8.8
Requires at least: 3.8
Tested up to:      4.9.8
*/

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Vendor Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

//The code that runs during plugin activation
function activate_rdhe_plugin() {
	Rdhe\Base\Activate::activate();
}

register_activation_hook( __FILE__, 'activate_rdhe_plugin' );


//The code that runs during plugin deactivation
function deactivate_rdhe_plugin() {
	Rdhe\Base\Deactivate::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_rdhe_plugin' );

// Register ALL Services
if ( class_exists( 'Rdhe\\Init' ) ) {
	Rdhe\Init::register_services();
}
?>