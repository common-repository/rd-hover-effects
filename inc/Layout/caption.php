<?php
/* START CAPTION EFFECTS */
if ( $layout == "caption" && $caption_style == "style1" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<figure class="caption-fonl">
						<img src="' . $image [0] . '" alt="hover_image">
						<figcaption class="caption_body" style="background:' . $bg_color . ';">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></div>';
} else if ( $layout == "caption" && $caption_style == "style2" ) {

	$output .= '<div class="item rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                        <div class="rdcaptoin14" id="prim">
                           <img src="' . $image [0] . '" alt="hover_image">
                            <div class="rdcaptoin" style="background:' . $bg_color . ';">
                            <div class="caption_body" class="block">
                              <h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p></div>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';

} else if ( $layout == "caption" && $caption_style == "style3" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<figure class="caption-fonl">
						<img src="' . $image [0] . '" alt="hover_image">
						<figcaption class="caption_body" style="background:' . $bg_color . ';">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></div>';
} else if ( $layout == "caption" && $caption_style == "style4" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<figure class="caption-fonl">
						<img src="' . $image [0] . '" alt="hover_image">
						<figcaption class="caption_body" style="background:' . $bg_color . ';">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></div>';
} else if ( $layout == "caption" && $caption_style == "style5" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<figure class="caption-fonl">
						<img src="' . $image [0] . '" alt="hover_image">
						<figcaption class="caption_body" style="background:' . $bg_color . ';">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></div>';
} else if ( $layout == "caption" && $caption_style == "style6" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<figure class="caption-fonl">
						<img src="' . $image [0] . '" alt="hover_image">
						<figcaption class="caption_body" style="background:' . $bg_color . ';">
						<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></div>';
} else if ( $layout == "caption" && $caption_style == "style7" ) {

	$output .= '<div class="item rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                        <div class="rdcaptoin01" id="prim">
                           <img src="' . $image [0] . '" alt="hover_image">
                            <div class="rdcaptoin" style="background:' . $bg_color . ';">
                            <div class="caption_body" class="block">
                              <h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p></div>';
	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info"  id="butt_new">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
} else if ( $layout == "caption" && $caption_style == "style8" ) {

	$output .= '<div class="item rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                        <div class="rdcaptoin02" id="prim">
                           <img src="' . $image [0] . '" alt="hover_image">
                            <div class="rdcaptoin" style="background:' . $bg_color . ';">
                            <div class="caption_body" class="block">
                             <h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p></div>';
	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info"  id="butt_new">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
} else if ( $layout == "caption" && $caption_style == "style9" ) {

	$output .= '<div class="item rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                        <div class="rdcaptoin03" id="prim">
                           <img src="' . $image [0] . '" alt="hover_image">
                            <div class="rdcaptoin" style="background:' . $bg_color . ';">
                            <div class="caption_body" class="block">
                             <h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p></div>';
	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info"  id="butt_new">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
} else if ( $layout == "caption" && $caption_style == "style10" ) {

	$output .= '<div class="item rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
                        <div class="rdcaptoin04" id="prim">
                           <img src="' . $image [0] . '" alt="hover_image">
                            <div class="rdcaptoin" style="background:' . $bg_color . ';">
                            <div class="caption_body" class="block">
                            <h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p></div>';
	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info"  id="butt_new">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
}

else if ( $layout == "caption" && $caption_style == "style11" || $caption_style == "style12" || $caption_style == "style13" || $caption_style == "style14" || $caption_style == "style15" || $caption_style == "style16" || $caption_style == "style17" || $caption_style == "style18" || $caption_style == "style19" || $caption_style == "style20" || $caption_style == "style21" || $caption_style == "style22" || $caption_style == "style23" || $caption_style == "style24" || $caption_style == "style25" || $caption_style == "style26" || $caption_style == "style27" || $caption_style == "style28" || $caption_style == "style29" || $caption_style == "style30" || $caption_style == "style31" || $caption_style == "style32" ) {
	$output .= '<span class="pro_Only"></span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 This Style Only For Pro Version Only, Get Pro Version To Unlock All Feature </a>';
}