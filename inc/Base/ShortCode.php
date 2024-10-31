<?php
/**
 * @package RdHoverEffects
 */
namespace Rdhe\Base;


class ShortCode extends BaseController {

	public function register() {

		add_shortcode( 'hover', array( $this, 'rd_hover_effects_shortcode' ) );

	}

	// Register Shortcode
	public function rd_hover_effects_shortcode( $atts ) {
		$title_font_family = $desc_font_family = $button_font_family = $title_font_weight = $title_font_size = $title_color = $title_font_style = $desc_font_weight = $desc_font_size = $desc_color = $desc_font_style = $is_button = $title_font_family = $button_font_weight = $button_font_size = $button_color = $button_font_style = $link ='';
		
		extract( shortcode_atts( array(
			'id' => '',
		), $atts ) );


		$q = new \WP_Query( array( 'posts_per_page' => - 1, 'post_type' => 'rd-hover', 'p' => $id ) );
		while ( $q->have_posts() ) : $q->the_post();
			$id = get_the_ID();

			// MetaBox Value
			include $this->plugin_path . "inc/File/metabox-value.php";
			$output = '';
			$output .= '<style type="text/css">
						' . $custom_css . '
						</style>';
			if ( $layout == "square" || $layout == "circle" ) {

				$output .= '<div class="main-wrapper rd-container"><div class="rd-row">  <div id="' . $style . '"><ul>';
			}

			//if Caption Effects Wrapper
			require $this->plugin_path . "inc/File/caption-wrapper.php";


			$effects = "";
			if ( is_array( $groups ) && count( $groups ) >= 1 ):
				foreach ( $groups as $info ) {

					if ( isset( $info['image'] ) ) {
						$image = $info['image'];
						$image = wp_get_attachment_image_src( $image, 'full' );
					}

					if ( empty( $image ) ) {

						$image[0] = plugins_url("/assets/image/dummy-image.jpg", __FILE__);
					}

					// Square Link Func
					$link_open = "";
					if ( isset( $info["link_open"] ) ) {
						$link_open = $info["link_open"];
					}

					// Button Set
					$is_button = "";
					if ( isset( $info["is_button"] ) ) {
						$is_button = $info["is_button"];
					}
					// Link Open
					$link_open == 1 ? $link_open = "_blank" : $link_open = "";
					$is_button == 1 ? $is_button = "true" : $is_button = "false";


					// Square Effects Shortcode
					require $this->plugin_path . "inc/Layout/square.php";


					// Square2 Effects Shortcode
					require $this->plugin_path . "inc/Layout/square2.php";
					
					// Circle Buttton
					if ( $is_button == "true" ) {
						$link = $info['link'];
						$link = ' target="' . $link_open . '" href="' . $link . '"';
					} else {
						$link = '';
					}

					//Circle Effects Shortcode
					require $this->plugin_path . "inc/Layout/circle.php";

					// Caption Effects Shortcode
					require $this->plugin_path . "inc/Layout/caption.php";


					// Custom CSS Responsive
					require $this->plugin_path . "inc/File/custom-responsive-css.php";
				}
			else:
				echo "You Didn't Add Hover Items in Settings Panel Please Add Hover Items First.";
			endif;
		endwhile;
		if ( $layout == "square" || $layout == "circle" ) {
			$output .= '</ul></div></div></div>';
		}
		if ( $layout == "caption" ) {
			$output .= '</div>';
		}
		wp_reset_query();

		return $output;
	}
}