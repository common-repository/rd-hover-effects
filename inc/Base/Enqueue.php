<?php
/**
 * @package RdHoverEffects
 */
namespace Rdhe\Base;

class Enqueue extends BaseController {
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'front_enqueue' ) );
	}

	public function admin_enqueue() {
		//admin enqueue scripts
		wp_enqueue_style( 'rdhe-master-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', __FILE__ );

		wp_enqueue_style( 'rdhe-copybutton-css', $this->plugin_url . 'assets/css/backend/backend.css' );

//		wp_enqueue_script( 'rdextkc-admin-js', $this->plugin_url . 'assets/js/adminscript.min.js', array( 'jquery' ), '', true );

	}

	//wp/front enqueue scripts
	public function front_enqueue() {

		wp_enqueue_style( 'rdhe-frontend-css', $this->plugin_url . 'assets/css/frontend/frontend.css' );

		wp_enqueue_script( 'rdhe-modanizer-js', $this->plugin_url . 'assets/js/frontend/frontend.js', array( 'jquery' ), '', false );
	}
}