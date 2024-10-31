<?php
$options = get_post_meta( $id, 'hover_options', true );
$layout  = $options["layout"];

if ( $layout == "square" || "square2" || "caption") {
	$groups = $options['hover_group_option'];
}

if ( $layout == "circle" ) {
	$groups = $options['circle_group_option'];
}

$style         = $options["style"];
$square2_style = $options["square2_style"];
$caption_style = $options["caption_style"];

$img_height_width    = $options["img_height_width"];
$img768_height_width = $options["img768_height_width"];
$space_between_items = $options["space_between_items"];

////Title Typography
//$title_font        = $options["title_font"];
//$title_font_family = $title_font['family'];
//$title_font_weight = $title_font['weight'];
//$title_font_size   = $options["title_font_size"];
//$title_font_style  = $options["title_font_style"];
//$title_color       = $options["title_color"];
//
//// Description Typography
//$desc_font        = $options["desc_font"];
//$desc_font_family = $desc_font['family'];
//$desc_font_weight = $desc_font['weight'];
//$desc_font_size   = $options['desc_font_size'];
//$desc_font_style  = $options['desc_font_style'];
//$desc_color       = $options["desc_color"];
//
//// Button Typograpjy
//$button_font        = $options["button_font"];
//$button_font_family = $button_font ['family'];
//$button_font_weight = $button_font ['weight'];
//$button_font_size   = $options["button_font_size"];
//$button_font_style  = $options['button_font_style'];
//$button_color       = $options["button_color"];
//
//// Other Settings
///
$bg_color  = "";
$is_border = "";

//if ( $is_border ) {
//	//Border Option
//
//	$border_pixel = $options["border_pixel"];
//
//	$border_style = $options["border_style"];
//	$border_color = $options["border_color"];
//} else {

	$border_pixel = "";
	$border_style = "";
	$border_color = "";

//}

$custom_css = $options["custom_css"];

// Circle animation
$circle_animation = $options["circle_animation"];


//$img_height_width    = $options["img_height_width"];

// Title Font
if ( $title_font_family ) {
	$title_font_family = str_replace( " ", "+", $title_font_family );

	echo '<style type="text/css">
						@import url(http://fonts.googleapis.com/css?family=' . $title_font_family . ');
				</style>';

	$title_font_family = str_replace( "+", " ", $title_font_family );
}

// Title Font
if ( $desc_font_family ) {
	$desc_font_family = str_replace( " ", "+", $desc_font_family );

	echo '<style type="text/css">
						@import url(http://fonts.googleapis.com/css?family=' . $desc_font_family . ');
				</style>';

	$desc_font_family = str_replace( "+", " ", $desc_font_family );
}

// Button Font
if ( $button_font_family ) {
	$button_font_family = str_replace( " ", "+", $button_font_family );

	echo '<style type="text/css">
						@import url(http://fonts.googleapis.com/css?family=' . $button_font_family . ');
				</style>';

	$button_font_family = str_replace( "+", " ", $button_font_family );
}