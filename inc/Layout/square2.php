<?php
if ( $layout == "square2" && $square2_style == "style1" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                <div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="rakibview rakib-new-first">
                   <img src="' . $image [0] . '" alt="img">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
                    <div style="background:' . $bg_color . ';" class="container-mask">
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';

} else if ( $layout == "square2" && $square2_style == "style2" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                <div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="rakibview rakib-new-second">
                   <img src="' . $image [0] . '" alt="img">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						
                    <div style="background:' . $bg_color . ';" class="container-mask">
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
} else if ( $layout == "square2" && $square2_style == "style3" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                <div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="rakibview rakib-new-third">
                   <img src="' . $image [0] . '" alt="img">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
                    <div style="background:' . $bg_color . ';" class="container-mask">
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
} else if ( $layout == "square2" && $square2_style == "style4" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                <div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="rakibview rakib-new-fourth">
                   <img src="' . $image [0] . '" alt="img">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
                    <div style="background:' . $bg_color . ';" class="container-mask">
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
}
else if ( $layout == "square2" && $square2_style == "style5" || $square2_style == "style6" || $square2_style == "style7" || $square2_style == "style8" || $square2_style == "style9" || $square2_style == "style10" ) {
	$output .= '<span class="pro_Only"></span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 This Style Only For Pro Version Only, Get Pro Version To Unlock All Feature </a>';
}