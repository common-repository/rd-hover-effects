<?php
if ( $layout == "caption" ) {
	$output .= '
			<div class="rd-container">';
	switch ( $caption_style ) {
		case "style1":
			$output = '<div class="rd-row grid cs-style-1" id="overflw">';
			break;
		case "style2":
			$output = '<div class="rd-row grid cs-style-2"  id="overflw">';
			break;
		case "style3":
			$output = '<div class="rd-row grid cs-style-3"  id="overflw">';
			break;
		case "style4":
			$output = '<div class="rd-row grid cs-style-4" id="overflw">';
			break;
		case "style5":
			$output = '<div class="rd-row grid cs-style-5" id="overflw">';
			break;
		case "style6":
			$output = '<div class="rd-row grid cs-style-7" id="overflw">';
			break;
		default:
			$output = '<div class="rd-row grid cs-style-1" id="overflw">';
	}

}