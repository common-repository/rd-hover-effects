<?php
/**
 * @package RdHoverEffects
 */
namespace Rdhe\Base;

class FrameWork extends BaseController {

	public function register() {

		$this->framework();
	}


	//Option Settings Functions
	public function framework() {

		$this->plugin_path = str_replace( '\\', '/', $this->plugin_path );

		include $this->plugin_path . "options/codestar-framework.php";

		if ( class_exists( 'CSF' ) ) {
			require_once( $this->plugin_path . 'options/samples/metabox.sample.php' );
		}
	}
}