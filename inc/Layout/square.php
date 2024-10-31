<?php
$border_pixel = $border_pixel ? $border_pixel : $border_pixel = "0";

if ( $layout == "square" && $style == "style1" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
						<div class="mar-rig rakib-dev rakib-dev-first" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . '; margin-left: ' . - $border_pixel . 'px  ;">
						    <img src="' . $image [0] . '" alt="hover_image">
								<div style="background:' . $bg_color . ';" class="mask">
									<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';

} else if ( $layout == "square" && $style == "style2" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
		<div class="mar-rig rakib-dev rakib-dev-second" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                     <img src="' . $image [0] . '" alt="hover_image">
                    <div style="background:' . $bg_color . ';" class="mask"></div>
                    <div class="rd_content">
                        <h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
                        <p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';

} else if ( $layout == "square" && $style == "style3" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<div class="mar-rig rakib-dev rakib-dev-third" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                     <img src="' . $image [0] . '" alt="hover_image">
						<div style="background:' . $bg_color . ';" class="mask">
							<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
								<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style4" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<div class="mar-rig rakib-dev rakib-dev-fourth" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                     <img src="' . $image [0] . '" alt="hover_image">
						<div style="background:' . $bg_color . ';" class="mask">
							<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
								<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style5" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<div class="mar-rig rakib-dev rakib-dev-fifth" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                     <img src="' . $image [0] . '" alt="hover_image">
						<div style="background:' . $bg_color . ';" class="mask">
							<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
								<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style6" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<div class="mar-rig rakib-dev rakib-dev-sixth" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                     <img src="' . $image [0] . '" alt="hover_image">
						<div style="background:' . $bg_color . ';" class="mask">
							<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
								<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style7" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<div class="mar-rig rakib-dev rakib-dev-seventh" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" >
                     <img src="' . $image [0] . '" alt="hover_image">
						<div style="background:' . $bg_color . ';" class="mask">
							<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
								<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style8" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<div class="mar-rig rakib-dev rakib-dev-eighth" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                    <img src="' . $image [0] . '" alt="hover_image">
						<div style="background:' . $bg_color . ';" class="mask">
							<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
								<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style9" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
		          <div class="mar-rig rakib-dev rakib-dev-ninth" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                     <img src="' . $image [0] . '" alt="hover_image">
                    <div class="rd_content" style="background:' . $bg_color . ';">
                        <h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
						<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style10" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<div class="mar-rig rakib-dev rakib-dev-tenth" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
                     <img src="' . $image [0] . '" alt="hover_image">
						<div style="background:' . $bg_color . ';" class="mask">
							<h2 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h2>
								<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
}

else if ( $layout == "square" && $style == "style11" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
	<li>
		<figure class="mar-rig" style=" border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
			 <img src="' . $image [0] . '" alt="hover_image">
			<figcaption style="background:' . $bg_color . ';">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '" class="info">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></li></div>';
} else if ( $layout == "square" && $style == "style12" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
		<div style="background:' . $bg_color . '; border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class= "mar-rig rd-item square effect10 top_to_bottom" >
        <div class="img"><img src="' . $image [0] . '" alt="img"></div>
        <div class="info">';
	$output .= '<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}

	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style13" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<li>
		<figure class="mar-rig" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
			 <img src="' . $image [0] . '" alt="hover_image">
			<figcaption style="background:' . $bg_color . ';">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}

	$output .= '</figcaption></figure></li></div>';

} else if ( $layout == "square" && $style == "style14" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<li>
		<figure class="mar-rig" style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;">
			 <img src="' . $image [0] . '" alt="hover_image">
			<figcaption style="background:' . $bg_color . ';">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></li></div>';

} else if ( $layout == "square" && $style == "style15" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
	<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect5 left_to_right">
        <div class="img">
			 <img src="' . $image [0] . '" alt="hover_image">
		</div>
					<div style="background:' . $bg_color . ';" class="info">
							<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style16" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
	<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="rd-item square effect6 from_top_and_bottom">
        <div class="img">
			 <img src="' . $image [0] . '" alt="hover_image">
		</div>
					<div style="background:' . $bg_color . ';" class="info">
						<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style17" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
	<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="rd-item square colored effect6 from_top_and_bottom">
        <div class="img">
			 <img src="' . $image [0] . '" alt="hover_image">
		</div>
					<div style="background:' . $bg_color . ';" class="info">
						<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style18" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect2">
        <div class="img"> <img src="' . $image [0] . '" alt="hover_image"></div>
        <div style="background:' . $bg_color . ';" class="info">
			<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style19" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect7">
        <div class="img"> <img src="' . $image [0] . '" alt="hover_image"></div>
        <div style="background:' . $bg_color . ';" class="info">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style20" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect8 scale_up">
        <div class="img"> <img src="' . $image [0] . '" alt="hover_image"></div>
        <div style="background:' . $bg_color . ';" class="info">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style21" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect8 scale_down">
        <div class="img"> <img src="' . $image [0] . '" alt="hover_image"></div>
        <div style="background:' . $bg_color . ';" class="info">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style22" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect9 bottom_to_top">
        <div class="img"> <img src="' . $image [0] . '" alt="hover_image"></div>
        <div style="background:' . $bg_color . ';" class="info">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style23" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect9 left_to_right">
        <div class="img"> <img src="' . $image [0] . '" alt="hover_image"></div>
        <div style="background:' . $bg_color . ';" class="info">
			<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
} else if ( $layout == "square" && $style == "style24" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<li>
		<figure style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig">
			 <img src="' . $image [0] . '" alt="hover_image">
			<figcaption style="background:' . $bg_color . ';">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</figcaption></figure></li></div>';

} else if ( $layout == "square" && $style == "style25" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
			<div style="border: ' . $border_pixel . 'px ' . $border_style . ' ' . $border_color . ';  margin-left: ' . - $border_pixel . 'px  ;" class="mar-rig rd-item square effect9 top_to_bottom">
        <div class="img"><img src="' . $image [0] . '" alt="img"></div>
        <div style="background:' . $bg_color . ';" class="info">
				<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
					<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>';

	if ( $is_button == "true" ) {
		$output .= '<a style="font-family:' . $button_font_family . '; font-weight:' . $button_font_weight . ' ; font-size:' . $button_font_size . 'px; color:' . $button_color . '; font-style:' . $button_font_style . ';" target="' . $link_open . '" href="' . $info['link'] . '">' . $info['link_title'] . '</a>';
	}
	$output .= '</div></div></div>';
}