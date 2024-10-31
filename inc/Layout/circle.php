<?php
if ( $layout == "circle" && $style == "style1" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<li class="circle_single">
		        <div class="item-hover circle effect1"><a ' . $link . '><div class="spinner"></div>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                          <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
		</div></div></a></div>
		</li></div>';

} else if ( $layout == "circle" && $style == "style2" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
						<li class="circle_single">
						  <div class="item-hover circle effect2 ' . $circle_animation . '"><a ' . $link . '>
							  <div class="img"><img src="' . $image [0] . '" alt="img"></div>
							  <div style="background:' . $bg_color . ';" class="info">
								<h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
							  </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style3" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                     <div class="item-hover circle effect3 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style4" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
						<li class="circle_single">
                  <div class="item-hover circle effect4 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style5" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect5"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div class="info">
                        <div style="background:' . $bg_color . ';" class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style6" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect6 scale_up"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style7" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect6 scale_down_up"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style8" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect7 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style9" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect8 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img-container">
                        <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      </div>
                      <div class="info-container">
                        <div style="background:' . $bg_color . ';" class="info">
                          <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style10" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li style="height: 270px; width: 270px;" class="circle_single">
                  <div class="item-hover circle effect9 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
}  else if ( $layout == "circle" && $style == "style11" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li style="height: 270px; width: 270px;" class="circle_single">
                  <div class="item-hover circle effect10 top_to_bottom"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style12" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li style="height: 270px; width: 270px;" class="circle_single" class="circle_single">
                  <div class="item-hover circle effect11 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style13" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li style="height: 270px; width: 270px;" class="circle_single" class="circle_single">
                  <div class="item-hover circle effect12 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style14" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li style="height: 270px; width: 270px;" class="circle_single" class="circle_single">
                  <div class="item-hover circle effect13 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style15" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li style="height: 270px; width: 270px;" class="circle_single" class="circle_single">
                  <div class="item-hover circle effect14 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style16" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li style="height: 270px; width: 270px;" class="circle_single" class="circle_single">
                  <div class="item-hover circle effect15 left_to_right"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style17" ) {
	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect16 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style18" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect17"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style19" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect18 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
					   <div class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
						  </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style20" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect19"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style21" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect20  bottom_to_top"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div class="info">
					   <div style="background:' . $bg_color . ';" class="info-back">
                           <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
						  </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style22" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle effect20 top_to_bottom"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div class="info">
					   <div style="background:' . $bg_color . ';" class="info-back">
                          <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
						  </div>
                      </div></a></div>
					   </li>
					   </div>
						';
} else if ( $layout == "circle" && $style == "style23" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<li class="circle_single">
		        <div class="item-hover circle effect10 bottom_to_top"><a ' . $link . '>
                      <div class="spinner"></div>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                        <div class="info-back">
                          <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                        </div>
               </div></a></div>
			   </li>
			   </div>
				';
} else if ( $layout == "circle" && $style == "style24" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
					<li class="circle_single">
                  <div class="item-hover circle colored effect14 ' . $circle_animation . '"><a ' . $link . '>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                          <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
                      </div></a></div>
					   </li>
					 </div>
				';
}
if ( $layout == "circle" && $style == "style25" ) {

	$output .= '<div class="rd-col-lg-4 rd-col-md-4 rd-col-sm-6 rd-col-xs-12">
				<li class="circle_single">
		        <div class="item-hover circle colored effect7 left_to_right"><a ' . $link . '>
                      <div class="spinner"></div>
                      <div class="img"><img src="' . $image [0] . '" alt="img"></div>
                      <div style="background:' . $bg_color . ';" class="info">
                          <h3 style="font-family:' . $title_font_family . '; font-weight:' . $title_font_weight . ' ; font-size:' . $title_font_size . 'px; color:' . $title_color . '; font-style:' . $title_font_style . ';">' . $info['title'] . '</h3>
		<p style="font-family:' . $desc_font_family . '; font-weight:' . $desc_font_weight . ' ; font-size:' . $desc_font_size . 'px; color:' . $desc_color . '; font-style:' . $desc_font_style . ';">' . $info['desc'] . '</p>
               </div></a></div>
			   </li>
			   </div>
				';
}