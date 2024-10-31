<?php
/**
 * @package RdHoverEffects
 */
namespace Rdhe\Base;

class CustomPostType extends BaseController {

	public function register() {

		// create Custom Post with This Hook
		add_action( 'init', array( $this, 'customPostType' ) );
	}


	//Custom Post Functions
	public function customPostType() {
			register_post_type( 'rd-hover', array(
				'labels'        => array(
					'name'          => __( 'RD Hov Effect', 'rdhov' ),
					'singular_name' => __( 'Hover Effect', 'rdhov' ),
					'add_new_item'  => __( 'Add new hover item', 'rdhov'),
				),
				'public'        => true,
				'supports'      => array( 'title' ),
				'has_archive'   => true,
				'rewrite'       => array( 'slug' => 'hover-effects' ),
				'menu_icon'     => 'dashicons-format-image',
				'menu_position' => 20,
			) );

	}
}