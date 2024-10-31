<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

//
// Shortcode Settings
//
$settings        = array(
  'id'           => 'csf_shortcode',
  'button_title' => 'Add Shortcode',
  'select_title' => 'Select a shortcode',
  'insert_title' => 'Insert Shortcode',
);

//
// Shortcode Options
//
$options   = array();

$options[] = array(
  'title'      => 'Basic Shortcode Examples',
  'shortcodes' => array(

    array(
      'name'   => 'csf_shortcode_1',
      'title'  => 'Basic Shortcode 1',
      'fields' => array(

        array(
          'id'    => 'icon',
          'type'  => 'icon',
          'title' => 'Icon',
        ),

        array(
          'id'    => 'image',
          'type'  => 'image',
          'title' => 'Image',
        ),

        array(
          'id'    => 'gallery',
          'type'  => 'gallery',
          'title' => 'Gallery',
        ),

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
          'help'  => 'Lorem Ipsum Dollar.',
        )

      ),
    ),

    array(
      'name'      => 'csf_shortcode_2',
      'title'     => 'Basic Shortcode 2',
      'fields'    => array(

        array(
          'id'    => 'option_1',
          'type'  => 'text',
          'title' => 'Option 1',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'option_2',
          'type'  => 'text',
          'title' => 'Option 2',
        ),

        array(
          'id'    => 'option_3',
          'type'  => 'text',
          'title' => 'Option 3',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        )

      ),
    ),

    array(
      'name'   => 'csf_shortcode_3',
      'title'  => 'Basic Shortcode 3',
      'fields' => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        array(
          'id'    => 'active',
          'type'  => 'switcher',
          'title' => 'Active',
          'label' => 'You you want to it ?',
        ),

        array(
          'id'         => 'car',
          'type'       => 'select',
          'title'      => 'Your car',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'opel'     => 'Opel',
            'ferrari'  => 'Ferrari'
          ),
          'dependency' => array('active', '!=', '')
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        )

      ),
    ),

    array(
      'name'   => 'csf_shortcode_4',
      'title'  => 'Basic Shortcode 4',
      'fields' => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        array(
          'id'      => 'active',
          'type'    => 'radio',
          'title'   => 'Active',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          )
        ),

        array(
          'id'         => 'cars',
          'type'       => 'checkbox',
          'title'      => 'Select your cars',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'open'     => 'Opel',
            'ferrari'  => 'Ferrari'
          )
        ),

        array(
          'id'    => 'avatar',
          'type'  => 'upload',
          'title' => 'Avatar',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        )

      ),
    ),

    array(
      'name'   => 'csf_shortcode_5',
      'title'  => 'Basic Shortcode 5',
      'fields' => array(

        array(
          'id'         => 'layout',
          'title'      => 'Layout',
          'type'       => 'image_select',
          'options'    => array(
            'layout-1' => 'http://codestarframework.com/assets/images/placeholder/65x65-2ecc71.gif',
            'layout-2' => 'http://codestarframework.com/assets/images/placeholder/65x65-e74c3c.gif',
            'layout-3' => 'http://codestarframework.com/assets/images/placeholder/65x65-3498db.gif',
          ),
        ),

        array(
          'id'         => 'cars',
          'type'       => 'select',
          'title'      => 'Select your cars',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'open'     => 'Opel',
            'ferrari'  => 'Ferrari',
            'jaguar'   => 'Jaguar',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 125px; height: 100px;',
          )
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        )

      ),
    ),

  )
);

$options[]     = array(
  'title'      => 'Simple Shortcode Examples',
  'shortcodes' => array(

    array(
      'name'   => 'csf_simple_1',
      'title'  => 'Simple Shortcode 1',
      'fields' => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

      ),
    ),

    array(
      'name'   => 'csf_simple_2',
      'title'  => 'Simple Shortcode 2',
      'fields' => array(

        array(
          'id'    => 'option_1',
          'type'  => 'text',
          'title' => 'Option 1',
        ),

        array(
          'id'    => 'option_2',
          'type'  => 'text',
          'title' => 'Option 2',
        ),

        array(
          'id'    => 'option_3',
          'type'  => 'text',
          'title' => 'Option 3',
        ),

      ),
    ),

    array(
      'name'   => 'csf_simple_3',
      'title'  => 'Simple Shortcode 3',
      'fields' => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        array(
          'id'    => 'active',
          'type'  => 'switcher',
          'title' => 'Active',
          'label' => 'You you want to it ?',
        ),

        array(
          'id'         => 'car',
          'type'       => 'select',
          'title'      => 'Your car',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'opel'     => 'Opel',
            'ferrari'  => 'Ferrari'
          )
        ),

      ),
    ),

  )
);

$options[]     = array(
  'title'      => 'Single Shortcode Examples',
  'shortcodes' => array(

    array(
      'name'   => 'csf_single_1',
      'title'  => 'Single Shortcode 1',
      'fields' => array(

        array(
          'type'    => 'content',
          'content' => 'Just click to "Insert Shortcode, this is adding a single shortcode',
        ),

      ),
    ),

    array(
      'name'   => 'csf_single_2',
      'title'  => 'Single Shortcode 2',
      'fields' => array(

        array(
          'type'    => 'content',
          'content' => 'Just click to "Insert Shortcode, this is adding a single shortcode',
        ),

      ),
    ),

    array(
      'name'   => 'csf_single_3',
      'title'  => 'Single Shortcode 3',
      'fields' => array(

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
          'help'  => 'This is a single shortcode and there is only content.',
        )

      ),
    ),

  )
);

$options[]     = array(
  'title'      => 'Advanced Shortcode Examples',
  'shortcodes' => array(

    array(
      'name'         => 'csf_advanced_1',
      'title'        => 'Duplicate Shortcode',
      'view'         => 'clone_duplicate',
      'clone_title'  => 'Add New',
      'clone_fields' => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        ),

      )
    ),

    array(
      'name'        => 'csf_advanced_3',
      'title'       => 'Duplicate Group Shortcode',
      'view'        => 'clone',
      'clone_id'    => 'csf_advanced_3_sub',
      'clone_title' => 'Add New',
      'fields'      => array(

        array(
          'id'    => 'option_1',
          'type'  => 'text',
          'title' => 'Option 1',
        ),

        array(
          'id'        => 'option_2',
          'type'      => 'select',
          'title'     => 'Option 2',
          'options'   => array(
            'value-1' =>  'Value 1',
            'value-2' =>  'Value 2',
            'value-3' =>  'Value 3',
          ),
        ),

      ),
      'clone_fields'  => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Tab Title',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        ),
      )
    ),

    array(
      'name'   => 'csf_advanced_4',
      'title'  => 'Contents Shortcode',
      'view'   => 'contents',
      'fields' => array(

        array(
          'id'    => 'content_1',
          'type'  => 'textarea',
          'title' => 'Content 1',
        ),

        array(
          'id'    => 'content_2',
          'type'  => 'textarea',
          'title' => 'Content 2',
        )

      ),
    ),

  )
);

CSF_Shortcode::instance( $settings, $options );


$settingsa        = array(
  'id'           => 'shortcode_1',
  'button_title' => 'Add Shortcode-1',
  'select_title' => 'Select a shortcode-1',
  'insert_title' => 'Insert Shortcode-1',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$optionsa  = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$optionsa[]     = array(
  'title'      => 'Basic Shortcode Examples 1',
  'shortcodes' => array(

    array(
      'name'   => 'csf_shortcode_100',
      'title'  => 'Basic Shortcode 100',
      'fields' => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title 1',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content 1',
        )

      ),
    ),

  ),
);

CSF_Shortcode::instance( $settingsa, $optionsa );


// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR Settings
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings_alt    = array(
  'id'           => 'shortcode_2',
  'button_title' => 'Add Shortcode-2',
  'select_title' => 'Select a shortcode-2',
  'insert_title' => 'Insert Shortcode-2',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options_alt  = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options_alt[]     = array(
  'title'      => 'Basic Shortcode Examples 2',
  'shortcodes' => array(

    array(
      'name'   => 'csf_shortcode_2',
      'title'  => 'Basic Shortcode 2',
      'fields' => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title 2',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content 2',
        )

      ),
    ),

  ),
);

CSF_Shortcode::instance( $settings_alt, $options_alt );
