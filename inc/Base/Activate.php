<?php
/**
 * @package RdHoverEffects
 */

namespace Rdhe\Base;

class Activate {
	public static function activate() {
		flush_rewrite_rules();
	}
}