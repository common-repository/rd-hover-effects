<?php
/**
 * @package RdHoverEffects
 */

namespace Rdhe\Base;

class Deactivate {
	public static function deactivate() {
		flush_rewrite_rules();
	}
}