<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.

// Metabox Settings
//
$options = array();


$options[] = array(
	'id'           => 'hover_options',
	'title'        => 'RD Hover Settings Options',
	'post_type'    => 'rd-hover',
	'context'      => 'normal',
	'priority'     => 'default',
	'show_restore' => true,
	'sections'     => array(

		array(
			'name'   => 'section_1',
			'title'  => 'RD Hover Settings Options',
			'icon'   => 'fa fa-cog',
			'fields' => array(

				array(
					'id'      => 'layout',
					'type'    => 'image_select',
					'title'   => 'Select Hover Layout',
					'options' => array(
						'square'  => plugins_url( 'img/square.png', __FILE__ ),
						'circle'  => plugins_url( 'img/circle.png', __FILE__ ),
						'caption' => plugins_url( 'img/caption.png', __FILE__ ),
						'square2' => plugins_url( 'img/square2.png', __FILE__ ),
					),
					'default' => 'square',
					'attributes' => array(
						'data-depend-id' => 'layout',
					),
				),

				//Square , Square 2 items Option
				array(
					'id'              => 'hover_group_option',
					'type'            => 'group',
					'title'           => '',
					'button_title'    => 'Add Hover Item',
					'accordion_title' => 'Hover Item',
					'dependency'      => array( 'layout', 'any', 'square,square2,caption', ),

					'fields' => array(
						array(
							'id'    => 'image',
							'type'  => 'image',
							'title' => 'Hover Item',
							'desc'  => 'Upload Image Here.',
							'help'  => 'Upload Your Hover Image Here',
						),
						array(
							'id'      => 'title', // this is must be unique
							'type'    => 'text',
							'title'   => 'Enter Title',
							'default' => 'Title here',
						),
						array(
							'id'      => 'desc',
							'type'    => 'textarea',
							'title'   => 'Enter description',
							'default' => 'Description Goes Here',
						),
						// Items Border?
						array(
							'id'      => 'is_button',
							'type'    => 'switcher',
							'title'   => 'Active Button?',
							'desc'    => 'Do You want to Active Button For This Items? Default is ON',
							'help'    => 'If You want to Active Button For This Items please switch it ON',
							'default' => false,
						),
						array(
							'id'         => 'link_title', // this is must be unique
							'type'       => 'text',
							'title'      => 'Button Name',
							'default'    => 'Read More',
							'dependency' => array( 'is_button', '==', 'true' ),
						),
						array(
							'id'         => 'link', // this is must be unique
							'type'       => 'text',
							'title'      => 'Button URL',
							'default'    => '#',
							'dependency' => array( 'is_button', '==', 'true' ),
						),

						array(
							'id'         => 'link_open',
							'type'       => 'checkbox',
							'title'      => 'Open Button With New Tab?',
							'label'      => 'Yes, Please.',
							'dependency' => array( 'is_button', '==', 'true' ),
						),


					),

				),

				//Circle Items Option
				array(
					'id'              => 'circle_group_option',
					'type'            => 'group',
					'title'           => '',
					'button_title'    => 'Add Hover Item',
					'accordion_title' => 'Hover Item',
					'dependency'      => array( 'layout', 'any', 'circle', ),

					'fields' => array(
						array(
							'id'    => 'image',
							'type'  => 'image',
							'title' => 'Hover Item',
							'desc'  => 'Upload Image Here.',
							'help'  => 'Upload Your Hover Image Here',
						),
						array(
							'id'      => 'title', // this is must be unique
							'type'    => 'text',
							'title'   => 'Enter Title',
							'default' => 'Title here',
						),
						array(
							'id'      => 'desc',
							'type'    => 'textarea',
							'title'   => 'Enter description',
							'default' => 'Description Goes Here',
						),
						// Items Border?
						array(
							'id'      => 'is_button',
							'type'    => 'switcher',
							'title'   => 'Extennal Link?',
							'desc'    => 'Do You want to External Link For This Items? Default is ON',
							'help'    => 'If You want to External Link For This Items please switch it ON',
							'default' => false,
						),
						array(
							'id'         => 'link', // this is must be unique
							'type'       => 'text',
							'title'      => 'URL',
							'default'    => '#',
							'dependency' => array( 'is_button', '==', 'true' ),
						),
						array(
							'id'         => 'link_open',
							'type'       => 'checkbox',
							'title'      => 'Open Link New Tab?',
							'label'      => 'Yes, Please.',
							'dependency' => array( 'is_button', '==', 'true' ),
						),


					),

				),

				//Square Layout Settings are below
				array(
					'type'       => 'notice',
					'class'      => 'info',
					'content'    => '<h4 align="center"> Square Settings are below</h4>',
					'dependency' => array( 'layout', '==', 'square' ),
				),

				//Square 2 Layout Settings are below
				array(
					'type'       => 'notice',
					'class'      => 'success',
					'content'    => '<h4 align="center"> Square 2 Settings are below</h4>',
					'dependency' => array( 'layout', '==', 'square2' ),
				),
				//Circle Layout Settings are below
				array(
					'type'       => 'notice',
					'class'      => 'warning',
					'content'    => '<h4 align="center"> Circle Settings are below</h4>',
					'dependency' => array( 'layout', '==', 'circle' ),
				),
				//Circle Layout Settings are below
				array(
					'type'       => 'notice',
					'class'      => 'danger',
					'content'    => '<h4 align="center"> Caption Settings are below</h4>',
					'dependency' => array( 'layout', '==', 'caption' ),
				),

				// Square Field
				array(
					'id'         => 'style',
					'type'       => 'select',
					'title'      => 'Select Hover Style',
					'dependency' => array( 'layout', 'any', 'square,circle' ),
					'options'    => array(
						'style1'  => 'Style 1',
						'style2'  => 'Style 2',
						'style3'  => 'Style 3',
						'style4'  => 'Style 4',
						'style5'  => 'Style 5',
						'style6'  => 'Style 6',
						'style7'  => 'Style 7',
						'style8'  => 'Style 8',
						'style9'  => 'Style 9',
						'style10' => 'Style 10',
						'style11' => 'Style 11',
						'style12' => 'Style 12',
						'style13' => 'Style 13',
						'style14' => 'Style 14',
						'style15' => 'Style 15',
						'style16' => 'Style 16',
						'style17' => 'Style 17',
						'style18' => 'Style 18',
						'style19' => 'Style 19',
						'style20' => 'Style 20',
						'style21' => 'Style 21',
						'style22' => 'Style 22',
						'style23' => 'Style 23',
						'style24' => 'Style 24',
						'style25' => 'Style 25',
					),
					'default'    => 'style1',
				),

				//Square 2 Select Field
				array(
					'id'         => 'square2_style',
					'type'       => 'select',
					'title'      => 'Select Hover Style',
					'dependency' => array( 'layout', '==', 'square2' ),
					'options'    => array(
						'style1'  => 'Style 1',
						'style2'  => 'Style 2',
						'style3'  => 'Style 3',
						'style4'  => 'Style 4',
						'style5'  => 'Style 5 (Pro Version Only)',
						'style6'  => 'Style 6 (Pro Version Only)',
						'style7'  => 'Style 7 (Pro Version Only)',
						'style8'  => 'Style 8 (Pro Version Only)',
						'style9'  => 'Style 9 (Pro Version Only)',
						'style10' => 'Style 10 (Pro Version Only)',
					),
					'default'    => 'style1',
				),

				// Square Field
				array(
					'id'         => 'caption_style',
					'type'       => 'select',
					'title'      => 'Select Hover Style',
					'dependency' => array( 'layout', 'any', 'caption' ),
					'options'    => array(
						'style1'  => 'Style 1',
						'style2'  => 'Style 2',
						'style3'  => 'Style 3',
						'style4'  => 'Style 4',
						'style5'  => 'Style 5',
						'style6'  => 'Style 6',
						'style7'  => 'Style 7',
						'style8'  => 'Style 8',
						'style9'  => 'Style 9',
						'style10' => 'Style 10',
						'style11' => 'Style 11 (Pro Version Only)',
						'style12' => 'Style 12 (Pro Version Only)',
						'style13' => 'Style 13 (Pro Version Only)',
						'style14' => 'Style 14 (Pro Version Only)',
						'style15' => 'Style 15 (Pro Version Only)',
						'style16' => 'Style 16 (Pro Version Only)',
						'style17' => 'Style 17 (Pro Version Only)',
						'style18' => 'Style 18 (Pro Version Only)',
						'style19' => 'Style 19 (Pro Version Only)',
						'style20' => 'Style 20 (Pro Version Only)',
						'style21' => 'Style 21 (Pro Version Only)',
						'style22' => 'Style 22 (Pro Version Only)',
						'style23' => 'Style 23 (Pro Version Only)',
						'style24' => 'Style 24 (Pro Version Only)',
						'style25' => 'Style 25 (Pro Version Only)',
						'style26' => 'Style 26 (Pro Version Only)',
						'style27' => 'Style 27 (Pro Version Only)',
						'style28' => 'Style 28 (Pro Version Only)',
						'style29' => 'Style 29 (Pro Version Only)',
						'style30' => 'Style 30 (Pro Version Only)',
						'style31' => 'Style 31 (Pro Version Only)',
						'style32' => 'Style 32 (Pro Version Only)',
					),
					'default'    => 'style1',
				),

				//Image Height & Width
				array(
					'id'      => 'img_height_width',
					'type'    => 'number',
					'title'   => 'Image Height & Width',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'Set Your Image Height & Width, Default is 280px',
					'default' => '280',
				),
				//Image Responsive Height & Width 768
				array(
					'id'      => 'img768_height_width',
					'type'    => 'number',
					'title'   => 'Image Responsive Height & Width 768',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'Chose for TAB 768 screen Size, Default 220px',
					'default' => '220',
				),
				//Space Between Hover Items
				array(
					'id'      => 'space_between_items',
					'type'    => 'number',
					'title'   => 'Space Between Hover Items',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'Make Space between Hover Items, Default is 5px',
					'default' => '5',
				),

				//Animation
				array(
					'id'         => 'circle_animation',
					'type'       => 'select',
					'title'      => 'Hover Animation',
					'dependency' => array( 'layout', '==', 'circle' ),
					'options'    => array(
						'left_to_right'  => 'Left to right',
						'right_to_left'  => 'Right to left',
						'top_to_bottom'  => 'Top to bottom',
						'bottom_to_top'  => 'Bottom to top',
					),
					'default'    => 'left_to_right',
				),

				array(
					'type'       => 'notice',
					'class'      => 'info',
					'content'    => '<h4 align="center"> <span class="rd_buy"> --Below Pro Versin Option-- </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
 Get Pro Version To Unlock All Feature</a></h4>',
				),


				//Items Background Color
				array(
					'id'    => 'bg_color',
					'type'  => 'color_picker',
					'title' => 'Item Background Color - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
				),


				// Items Border?
				array(
					'id'      => 'is_border',
					'type'    => 'switcher',
					'title'   => 'Items Border? - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'default' => false,
				),

				//Description Font Size
				array(
					'id'         => 'border_pixel',
					'type'       => 'number',
					'title'      => 'Border Pixel',
					'after'      => '<i class="cs-text-muted">(px)</i>',
					'desc'       => 'Set Border Pixel, Default is 2px',
					'default'    => '2',
					'dependency' => array( 'is_border', '==', 'true' ),
				),

				array(
					'id'      => 'border_style',
					'type'    => 'select',
					'title'   => 'Select Border Style',
					'options' => array(
						'solid'  => 'Solid',
						'dashed' => 'Dashed',
						'dotted' => 'Dotted',
						'double' => 'Double',
						'groove' => 'Groove',
						'ridge'  => 'Ridge',
						'inset'  => 'Inset',
						'outset' => 'Outset',
						'hidden' => 'Hidden',
					),

					'default'        => 'solid',
					'class'          => 'chosen',
					'default_option' => 'Select Border Style',
					'dependency'     => array( 'is_border', '==', 'true' ),
				),

				//Title Font Family
				array(
					'id'      => 'title_font',
					'type'    => 'typography',
					'title'   => 'Title Font Family - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'default' => array(
						'family' => 'Roboto',
					),
				),
				//Title Font Size
				array(
					'id'      => 'title_font_size',
					'type'    => 'number',
					'title'   => 'Title Font Size - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'Set Title Font Size, Default is 18px',
					'default' => '18',
				),
				//Title Font Style
				array(
					'id'      => 'title_font_style',
					'type'    => 'radio',
					'title'   => 'Title Font Style - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'class'   => 'horizontal',
					'options' => array(
						'normal' => 'Normal',
						'italic' => 'Italic',
					),
					'default' => 'normal',
					'help'    => 'There Are Two Different Font Style, You can also Choose Italic Font Style',
				),
				//Title Font Color
				array(
					'id'      => 'title_color',
					'type'    => 'color_picker',
					'title'   => 'Title Font Color - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'default' => '#FFFFFF',
				),

				//Description Font Family
				array(
					'id'      => 'desc_font',
					'type'    => 'typography',
					'title'   => 'Description Font Family - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'default' => array(
						'family' => 'Roboto',
					),
				),

				//Description Font Size
				array(
					'id'      => 'desc_font_size',
					'type'    => 'number',
					'title'   => 'Description Font Size - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'Set Description Font Size, Default is 13px',
					'default' => '13',
				),

				//Description Font Style
				array(
					'id'      => 'desc_font_style',
					'type'    => 'radio',
					'title'   => 'Description Font Style - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'class'   => 'horizontal',
					'options' => array(
						'normal' => 'Normal',
						'italic' => 'Italic',
					),
					'default' => 'normal',
					'help'    => 'There Are Two Different Font Style, You can also Choose Italic Font Style',
				),

				//Description Font Color
				array(
					'id'      => 'desc_color',
					'type'    => 'color_picker',
					'title'   => 'Description Font Color - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'default' => '#FFFFFF',
				),

				//Button Font Family
				array(
					'id'      => 'button_font',
					'type'    => 'typography',
					'title'   => 'Button Font Family - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'default' => array(
						'family' => 'Roboto',
					),
				),
				//button Font Size
				array(
					'id'      => 'button_font_size',
					'type'    => 'number',
					'title'   => 'Button Font Size - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'after'   => '<i class="cs-text-muted">(px)</i>',
					'desc'    => 'Set Description Font Size, Default is 14px',
					'default' => '14',
				),

				//Button Font Style
				array(
					'id'      => 'button_font_style',
					'type'    => 'radio',
					'title'   => 'Button Font Style - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'class'   => 'horizontal',
					'options' => array(
						'normal' => 'Normal',
						'italic' => 'Italic',
					),
					'default' => 'normal',
					'help'    => 'There Are Two Different Font Style, You can also Choose Italic Font Style',
				),

				//Button Font Color
				array(
					'id'      => 'button_color',
					'type'    => 'color_picker',
					'title'   => 'Button Font Color - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'default' => '#FFFFFF',
				),

				//Button Font Color
				array(
					'id'         => 'border_color',
					'type'       => 'color_picker',
					'title'      => 'Border Color',
					'default'    => '#DDD',
					'dependency' => array( 'is_border', '==', 'true' ),
				),
				// Custom CSS
				array(
					'id'      => 'custom_css',
					'type'    => 'ace_editor',
					'title'   => 'Custom CSS Option - <span class="pro_title">(Pro Versin Only ) </span><br/><a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Get Pro Version To Unlock All Feature</a>',
					'options' => array(
						'theme'      => 'ace/theme/chrome',
						'mode'       => 'ace/mode/css',
						'showGutter' => true,
					),
					'default' => '/* Enter Your Custom CSS Below */',
					'desc'    => 'Put your Custom CSS Here. Default leave It Blank',
				),

			),
		),

	),
);

CSF_Metabox::instance( $options );
