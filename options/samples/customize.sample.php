<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

//
// Customize unique database option name
//
$options_name =  '_testing_theme-x';

//
// Customize Options
//
$options = array();

$options[] = array(
  'name'   => 'overwiew',
  'title'  => 'Overview',
  'icon'   => 'fa fa-star',
  'fields' => array(

    array(
      'id'    => 'text_1',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'    => 'textarea_1',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'This option field is useful. You will love it!',
    ),

    array(
      'id'    => 'upload_1',
      'type'  => 'upload',
      'title' => 'Upload',
      'help'  => 'Upload a site logo for your branding.',
    ),

    array(
      'id'    => 'switcher_1',
      'type'  => 'switcher',
      'title' => 'Switcher',
      'label' => 'You want to update for this framework ?',
    ),

    array(
      'id'      => 'color_picker_1',
      'type'    => 'color_picker',
      'title'   => 'Color Picker',
      'default' => '#3498db',
    ),

    array(
      'id'    => 'checkbox_1',
      'type'  => 'checkbox',
      'title' => 'Checkbox',
      'label' => 'Did you like this framework ?',
    ),

    array(
      'id'      => 'radio_1',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'yes'   => 'Yes, Please.',
        'no'    => 'No, Thank you.',
      ),
      'help'    => 'Are you sure for this choice?',
    ),

    array(
      'id'             => 'select_1',
      'type'           => 'select',
      'title'          => 'Select',
      'options'        => array(
        'bmw'          => 'BMW',
        'mercedes'     => 'Mercedes',
        'volkswagen'   => 'Volkswagen',
        'other'        => 'Other',
      ),
      'default_option' => 'Select your favorite car',
    ),

    array(
      'id'      => 'number_1',
      'type'    => 'number',
      'title'   => 'Number',
      'default' => '10',
      'after'   => ' <i class="csf-text-muted">$ (dollars)</i>',
    ),

    array(
      'id'        => 'image_select_1',
      'type'      => 'image_select',
      'title'     => 'Image Select',
      'options'   => array(
        'value-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'value-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'value-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'value-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'value-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This is info notice field for your highlight sentence.',
    ),

    array(
      'id'    => 'background_1',
      'type'  => 'background',
      'title' => 'Background',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'This is info warning field for your highlight sentence.',
    ),

    array(
      'id'    => 'icon_1',
      'type'  => 'icon',
      'title' => 'Icon',
      'desc'  => 'Some description here for this option field.',
    ),

    array(
      'id'    => 'text_2',
      'type'  => 'text',
      'title' => 'Text',
      'desc'  => 'Some description here for this option field.',
    ),

    array(
      'id'        => 'textarea_2',
      'type'      => 'textarea',
      'title'     => 'Textarea',
      'info'      => 'Some information here for this option field.',
      'shortcode' => array(
        'id'      => 'csf_shortcode',
        'title'   => 'Add Shortcode',
      ),
    ),

  )
);

// ------------------------------
// a option section with tabs   -
// ------------------------------
$options[]   = array(
  'name'     => 'options',
  'title'    => 'Options',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    //
    // Text
    //
    array(
      'name'   => 'text_options',
      'title'  => 'Text',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_text_1',
          'type'  => 'text',
          'title' => 'Text',
        ),

        array(
          'id'    => 'unique_text_2',
          'type'  => 'text',
          'title' => 'Text with Description',
          'desc'  => 'Lets write some description.',
        ),

        array(
          'id'    => 'unique_text_3',
          'type'  => 'text',
          'title' => 'Text with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_text_4',
          'type'    => 'text',
          'title'   => 'Text with Default',
          'default' => 'some default value bla bla bla',
        ),

        array(
          'id'            => 'unique_text_5',
          'type'          => 'text',
          'title'         => 'Text with Placeholder',
          'attributes'    => array(
            'placeholder' => 'do stuff...'
          )
        ),

        array(
          'id'    => 'unique_text_6',
          'type'  => 'text',
          'title' => 'Text with After Text',
          'after' => ' Something for after text.',
        ),

        array(
          'id'     => 'unique_text_7',
          'type'   => 'text',
          'title'  => 'Text with Before Text',
          'before' => 'Something for before text. ',
        ),

        array(
          'id'    => 'unique_text_8',
          'type'  => 'text',
          'title' => 'Text with After Text Alternative',
          'after' => '<p class="csf-text-info">Information: There is some description for option.</p> ',
        ),

        array(
          'id'         => 'unique_text_9',
          'type'       => 'text',
          'title'      => 'Text Ready-Only',
          'attributes' => array(
            'readonly' => 'only-key'
          ),
          'default'    => 'Only read me'
        ),

        array(
          'id'          => 'unique_text_10',
          'type'        => 'text',
          'title'       => 'Text Maxlength (5)',
          'attributes'  => array(
            'maxlength' => '5'
          ),
          'default'     => 'abcde',
        ),

        array(
          'id'         => 'unique_text_11',
          'type'       => 'text',
          'title'      => 'Text Using Custom Style',
          'attributes' => array(
            'style'    => 'width: 175px; height: 40px; border-color: #93C054;'
          ),
        ),

        array(
          'id'         => 'unique_text_12',
          'type'       => 'text',
          'title'      => 'Text Using Custom Style',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
        ),

        array(
          'id'    => 'unique_text_13',
          'type'  => 'text',
          'after' => '<p>This text not using title.</p>',
        ),

      ),
    ),

    //
    // Textarea
    //
    array(
      'name'   => 'textarea_options',
      'title'  => 'Textarea',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_textarea_1',
          'type'  => 'textarea',
          'title' => 'Textarea',
        ),

        array(
          'id'        => 'unique_textarea_1_1',
          'type'      => 'textarea',
          'title'     => 'Textarea with Quick Shortcode',
          'shortcode' => array(
            'id'      => 'csf_shortcode',
            'title'   => 'Add Shortcode',
          ),
        ),

        array(
          'id'    => 'unique_textarea_2',
          'type'  => 'textarea',
          'title' => 'Textarea with Description',
          'desc'  => 'Lets write some description.',
        ),

        array(
          'id'    => 'unique_textarea_3',
          'type'  => 'textarea',
          'title' => 'Textarea with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_textarea_4',
          'type'    => 'textarea',
          'title'   => 'Textarea with Default',
          'default' => 'some default value bla bla bla',
        ),

        array(
          'id'            => 'unique_textarea_5',
          'type'          => 'textarea',
          'title'         => 'Textarea with Placeholder',
          'attributes'    => array(
            'placeholder' => 'do stuff...'
          )
        ),

        array(
          'id'    => 'unique_textarea_6',
          'type'  => 'textarea',
          'title' => 'Textarea with After Text',
          'after' => ' Something for after text.',
        ),

        array(
          'id'     => 'unique_textarea_7',
          'type'   => 'textarea',
          'title'  => 'Textarea with Before Text',
          'before' => 'Something for before text. ',
        ),

        array(
          'id'         => 'unique_textarea_8',
          'type'       => 'textarea',
          'title'      => 'Textarea Custom Settings',
          'attributes' => array(
            'rows'     => 10,
          ),
        ),

        array(
          'id'    => 'unique_textarea_13',
          'type'  => 'textarea',
          'after' => '<p>This textarea not using title.</p>',
        ),

      ),

    ),

    //
    // Checkbox
    //
    array(
      'name'   => 'checkbox_options',
      'title'  => 'Checkbox',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_checkbox_1',
          'type'  => 'checkbox',
          'title' => 'Checkbox',
          'label' => 'Yes, Please.',
        ),

        array(
          'id'      => 'unique_checkbox_2',
          'type'    => 'checkbox',
          'title'   => 'Checkbox with Default',
          'label'   => 'Would you like something ?',
          'default' => true,
        ),

        array(
          'id'    => 'unique_checkbox_3',
          'type'  => 'checkbox',
          'title' => 'Checkbox with Help',
          'label' => 'I am an checkbox',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'       => 'unique_checkbox_4',
          'type'     => 'checkbox',
          'title'    => 'Checkbox with Options',
          'options'  => array(
            'blue'   => 'Blue',
            'green'  => 'Green',
            'yellow' => 'Yellow',
          ),
        ),

        array(
          'id'         => 'unique_checkbox_5',
          'type'       => 'checkbox',
          'title'      => 'Checkbox with Options and Default',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
          ),
          'default'    => 'bmw'
        ),

        array(
          'id'       => 'unique_checkbox_6',
          'type'     => 'checkbox',
          'title'    => 'Checkbox with Horizontal',
          'class'    => 'horizontal',
          'options'  => array(
            'blue'   => 'Blue',
            'green'  => 'Green',
            'yellow' => 'Yellow',
            'red'    => 'Red',
            'black'  => 'Black',
          ),
          'default'  => array( 'green', 'yellow', 'red' )
        ),

        array(
          'id'      => 'unique_checkbox_7',
          'type'    => 'checkbox',
          'title'   => 'Checkbox with Pages',
          'options' => 'pages',
        ),

        array(
          'id'      => 'unique_checkbox_8',
          'type'    => 'checkbox',
          'title'   => 'Checkbox with Posts',
          'options' => 'posts',
        ),

        array(
          'id'      => 'unique_checkbox_9',
          'type'    => 'checkbox',
          'title'   => 'Checkbox with Categories',
          'options' => 'categories',
        ),

        array(
          'id'            => 'unique_checkbox_10',
          'type'          => 'checkbox',
          'title'         => 'Checkbox with Pages Custom Query Args',
          'options'       => 'pages',
          'query_args'    => array(
            'sort_order'  => 'desc',
            'sort_column' => 'post_title',
          ),
        ),

        array(
          'id'      => 'unique_checkbox_11',
          'type'    => 'checkbox',
          'title'   => 'Checkbox with Options Callback',
          'options' => csf_get_custom_options(),
        ),

      ),
    ),

    //
    // Radio
    //
    array(
      'name'   => 'radio_options',
      'title'  => 'Radio',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'      => 'unique_radio_1',
          'type'    => 'radio',
          'title'   => 'Radio',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
        ),

        array(
          'id'        => 'unique_radio_2',
          'type'      => 'radio',
          'title'     => 'Radio with Default',
          'options'   => array(
            'yes'     => 'Yes, Please.',
            'no'      => 'No, Thank you.',
            'nothing' => 'I am not sure, yet!',
          ),
          'default'   => 'nothing',
        ),

        array(
          'id'      => 'unique_radio_3',
          'type'    => 'radio',
          'title'   => 'Radio with Horizontal',
          'class'   => 'horizontal',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
        ),

        array(
          'id'      => 'unique_radio_4',
          'type'    => 'radio',
          'title'   => 'Radio with Pages',
          'options' => 'pages',
        ),

        array(
          'id'      => 'unique_radio_5',
          'type'    => 'radio',
          'title'   => 'Radio with Posts',
          'options' => 'posts',
        ),

        array(
          'id'      => 'unique_radio_6',
          'type'    => 'radio',
          'title'   => 'Radio with Categories',
          'options' => 'categories',
        ),

        array(
          'id'            => 'unique_radio_7',
          'type'          => 'radio',
          'title'         => 'Radio with Pages',
          'options'       => 'pages',
          'query_args'    => array(
            'sort_order'  => 'desc',
            'sort_column' => 'post_title',
          ),
        ),

        array(
          'id'        => 'unique_radio_8',
          'type'      => 'radio',
          'title'     => 'Radio with Custom Callback',
          'options'   => csf_get_custom_options(),
        ),

      ),
    ),

    //
    // Select
    //
    array(
      'name'   => 'select_options',
      'title'  => 'Select',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'      => 'unique_select_1',
          'type'    => 'select',
          'title'   => 'Select',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.'
          )
        ),

        array(
          'id'      => 'unique_select_2',
          'type'    => 'select',
          'title'   => 'Select with Custom First Option',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.'
          ),
          'default_option' => 'Select an option',
        ),

        array(
          'id'             => 'unique_select_3',
          'type'           => 'select',
          'title'          => 'Select with Help',
          'options'        => array(
            'green'        => 'Green',
            'red'          => 'Red',
            'blue'         => 'Blue',
            'yellow'       => 'Yellow',
            'black'        => 'Black',
          ),
          'default_option' => 'Select a color',
        ),

        array(
          'id'             => 'unique_select_4',
          'type'           => 'select',
          'title'          => 'Select with Default',
          'options'        => array(
            'primary'      => 'Primary Option',
            'secondary'    => 'Secondry Option',
            'tertiary'     => 'Tertiary Option',
          ),
          'default'        => 'secondary',
          'default_option' => 'Select an option',
        ),

        array(
          'id'         => 'unique_select_6',
          'type'       => 'select',
          'title'      => 'Select with Multiple',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
            'opel'     => 'Opel',
            'golf'     => 'Golf',
            'ferrari'  => 'Ferrari',
            'subaru'   => 'Subaru',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          )
        ),

        array(
          'id'         => 'unique_select_7',
          'type'       => 'select',
          'title'      => 'Select with Multiple Defaults',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
            'opel'     => 'Opel',
            'golf'     => 'Golf',
            'ferrari'  => 'Ferrari',
            'subaru'   => 'Subaru',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          ),
          'default'    => array( 'bmw', 'mercedes', 'opel' ),
          'info'       => 'Choose your favorite cars.',
        ),

        array(
          'id'             => 'unique_select_8',
          'type'           => 'select',
          'title'          => 'Select with Pages',
          'options'        => 'pages',
          'default_option' => 'Select a page'
        ),

        array(
          'id'             => 'unique_select_9',
          'type'           => 'select',
          'title'          => 'Select with Posts',
          'options'        => 'posts',
          'default_option' => 'Select a post'
        ),

        array(
          'id'             => 'unique_select_10',
          'type'           => 'select',
          'title'          => 'Select with Categories',
          'options'        => 'categories',
          'default_option' => 'Select a tag'
        ),

        array(
          'id'             => 'unique_select_11',
          'type'           => 'select',
          'title'          => 'Select with Menus',
          'options'        => 'menus',
          'default_option' => 'Select a menu'
        ),

        array(
          'id'             => 'unique_select_12',
          'type'           => 'select',
          'title'          => 'Select with Chosen',
          'options'        => array(
            'bmw'          => 'BMW',
            'mercedes'     => 'Mercedes',
            'jaguar'       => 'Jaguar',
            'opel'         => 'Opel',
            'golf'         => 'Golf',
            'ferrari'      => 'Ferrari',
            'subaru'       => 'Subaru',
            'seat'         => 'Seat',
          ),
          'class'          => 'chosen',
          'default_option' => 'Select your car',
        ),

        array(
          'id'                 => 'unique_select_13',
          'type'               => 'select',
          'title'              => 'Select with Chosen Multiple',
          'options'            => array(
            'bmw'              => 'BMW',
            'mercedes'         => 'Mercedes',
            'jaguar'           => 'Jaguar',
            'opel'             => 'Opel',
            'golf'             => 'Golf',
            'ferrari'          => 'Ferrari',
            'subaru'           => 'Subaru',
            'seat'             => 'Seat',
          ),
          'class'              => 'chosen',
          'attributes'         => array(
            'data-placeholder' => 'Select your favrorite cars',
            'multiple'         => 'only-key',
            'style'            => 'width: 200px;'
          ),
        ),

      ),
    ),

    //
    // Switcher
    //
    array(
      'name'   => 'switcher_options',
      'title'  => 'Switcher',
      'icon'   => 'fa fa-toggle-on',
      'fields' => array(

        array(
          'id'    => 'unique_switcher_1',
          'type'  => 'switcher',
          'title' => 'Switcher',
        ),

        array(
          'id'    => 'unique_switcher_2',
          'type'  => 'switcher',
          'title' => 'Switcher with Label',
          'label' => 'Yes, Please do it.',
        ),

        array(
          'id'    => 'unique_switcher_3',
          'type'  => 'switcher',
          'title' => 'Switcher with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_switcher_4',
          'type'    => 'switcher',
          'title'   => 'Switcher with Default',
          'default' => true,
        ),

      ),
    ),

    //
    // Number Options
    //
    array(
      'name'   => 'number_options',
      'title'  => 'Number',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_number_1',
          'type'  => 'number',
          'title' => 'Number',
        ),

        array(
          'id'    => 'unique_number_2',
          'type'  => 'number',
          'title' => 'Number with Description',
          'desc'  => 'Lets write some description for this number field.',
        ),

        array(
          'id'    => 'unique_number_3',
          'type'  => 'number',
          'title' => 'Number with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_number_4',
          'type'    => 'number',
          'title'   => 'Number with Default',
          'default' => '10',
        ),

        array(
          'id'            => 'unique_number_5',
          'type'          => 'number',
          'title'         => 'Number with Placeholder',
          'attributes'    => array(
            'placeholder' => '25'
          )
        ),

        array(
          'id'    => 'unique_number_6',
          'type'  => 'number',
          'title' => 'Number with After Text',
          'after' => ' (px)',
        ),

      ),
    ),

    //
    // Date
    //
    array(
      'name'   => 'date_options',
      'title'  => 'Date',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'date_1',
          'type'  => 'date',
          'title' => 'Date',
        ),

        array(
          'id'     => 'date_2',
          'type'   => 'date',
          'title'  => 'Date with Custom Format',
          'format' => 'dd.M.y'
        ),

        array(
          'id'      => 'date_3',
          'type'    => 'date',
          'title'   => 'Date Advanced',
          'options' => array(
            'changeMonth'     => true,
            'changeYear'      => true,
            'showWeek'        => true,
            'showButtonPanel' => true,
            'weekHeader'      => 'Week',
            'monthNamesShort' => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ),
            'dayNamesMin'     => array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ),

          )
        ),

      ),
    ),

    //
    // Icons
    //
    array(
      'name'   => 'icon_options',
      'title'  => 'Icons',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_icon_1',
          'type'  => 'icon',
          'title' => 'Icon',
        ),

        array(
          'id'    => 'unique_icon_2',
          'type'  => 'icon',
          'title' => 'Icon with Description',
          'desc'  => 'Lets write some description for this icon field.',
        ),

        array(
          'id'    => 'unique_icon_3',
          'type'  => 'icon',
          'title' => 'Icon with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_icon_4',
          'type'    => 'icon',
          'title'   => 'Icon with Default',
          'default' => 'fa fa-check',
        ),

        array(
          'id'    => 'unique_icon_5',
          'type'  => 'icon',
          'title' => 'Icon with After Text',
          'after' => '<p>Lets write some description for this icon field.</p>',
        ),

      ),
    ),

    //
    // Group
    //
    array(
      'name'   => 'group_options',
      'title'  => 'Group',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'              => 'unique_group_1',
          'type'            => 'group',
          'title'           => 'Group',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

            array(
              'id'    => 'unique_group_1_text',
              'type'  => 'text',
              'title' => 'Text Field',
            ),

            array(
              'id'    => 'unique_group_1_switcher',
              'type'  => 'switcher',
              'title' => 'Switcher Field',
            ),

            array(
              'id'    => 'unique_group_1_textarea',
              'type'  => 'textarea',
              'title' => 'Upload Field',
            ),

          )
        ),

        array(
          'id'              => 'unique_group_2',
          'type'            => 'group',
          'title'           => 'Group Field with Default',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

            array(
              'id'    => 'unique_group_2_text',
              'type'  => 'text',
              'title' => 'Text Field',
            ),

            array(
              'id'    => 'unique_group_2_switcher',
              'type'  => 'switcher',
              'title' => 'Switcher Field',
            ),

            array(
              'id'    => 'unique_group_2_textarea',
              'type'  => 'textarea',
              'title' => 'Upload Field',
            ),

          ),
          'default'                     => array(
            array(
              'unique_group_2_text'     => 'Some text',
              'unique_group_2_switcher' => true,
              'unique_group_2_textarea' => 'Some content',
            ),
            array(
              'unique_group_2_text'     => 'Some text 2',
              'unique_group_2_switcher' => true,
              'unique_group_2_textarea' => 'Some content 2',
            ),
          )
        ),

        array(
          'id'              => 'unique_group_3',
          'type'            => 'group',
          'title'           => 'Group Field',
          'info'            => 'You can use any option field on group',
          'button_title'    => 'Add New Something',
          'accordion_title' => 'Adding New Thing',
          'fields'          => array(

            array(
              'id'    => 'unique_group_3_text',
              'type'  => 'upload',
              'title' => 'Text Field',
            ),

          )
        ),

        array(
          'id'              => 'unique_group_4',
          'type'            => 'group',
          'title'           => 'Group Field',
          'desc'            => 'Accordion title using the ID of the field, for eg. "Text Field 2" using as accordion title here.',
          'button_title'    => 'Add New',
          'accordion_title' => 'unique_group_4_text_2',
          'fields'          => array(

            array(
              'id'    => 'unique_group_4_text_1',
              'type'  => 'text',
              'title' => 'Text Field 1',
            ),

            array(
              'id'    => 'unique_group_4_text_2',
              'type'  => 'text',
              'title' => 'Text Field 2',
            ),

            array(
              'id'    => 'unique_group_4_text_3',
              'type'  => 'text',
              'title' => 'Text Field 3',
            ),

          )
        ),

      ),
    ),

    //
    // Repeater
    //
    array(
      'name'   => 'repeater_options',
      'title'  => 'Repeater',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'     => 'unique_repeater_1',
          'type'   => 'repeater',
          'title'  => 'Repeater',
          'fields' => array(

            array(
              'id'    => 'unique_repeater_1_text',
              'type'  => 'text',
              'title' => 'Text',
            ),

          ),
        ),

        array(
          'id'           => 'unique_repeater_2',
          'type'         => 'repeater',
          'title'        => 'Repeater with Default',
          'button_title' => 'Add More',
          'fields'       => array(

            array(
              'id'    => 'unique_repeater_2_text',
              'type'  => 'text',
              'title' => 'Text',
            ),

          ),
          'default' => array(
            array(
              'unique_repeater_2_text' => 'Text 1',
            ),
            array(
              'unique_repeater_2_text' => 'Text 2',
            ),
          ),
        ),

        array(
          'id'           => 'unique_repeater_3',
          'type'         => 'repeater',
          'title'        => 'Repeater with Limit 3',
          'limit'        => 3,
          'button_title' => 'Add Image',
          'fields'       => array(

            array(
              'id'    => 'unique_repeater_3_upload',
              'type'  => 'upload',
              'title' => 'Upload',
            ),

          ),
        ),

        array(
          'id'     => 'unique_repeater_4',
          'type'   => 'repeater',
          'title'  => 'Repeater with Multiple Options',
          'fields' => array(

            array(
              'id'    => 'unique_repeater_4_text',
              'type'  => 'text',
              'title' => 'Text 1',
            ),

            array(
              'id'    => 'unique_repeater_4_textarea',
              'type'  => 'textarea',
              'title' => 'Text 2',
            ),

            array(
              'id'    => 'unique_repeater_4_upload',
              'type'  => 'upload',
              'title' => 'Upload',
            ),

          ),
        ),

      ),
    ),

    //
    // Upload
    //
    array(
      'name'   => 'upload_options',
      'title'  => 'Upload',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_upload_1',
          'type'  => 'upload',
          'title' => 'Upload',
        ),

        array(
          'id'      => 'unique_upload_2',
          'type'    => 'upload',
          'title'   => 'Upload with Preview',
          'preview' => true,
        ),

        array(
          'id'    => 'unique_upload_3',
          'type'  => 'upload',
          'title' => 'Upload with Description',
          'desc'  => 'Lets write some description for this upload.',
        ),

        array(
          'id'    => 'unique_upload_4',
          'type'  => 'upload',
          'title' => 'Upload with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_upload_5',
          'type'    => 'upload',
          'title'   => 'Upload with Default',
          'default' => 'screenshot-1.png',
        ),

        array(
          'id'    => 'unique_upload_6',
          'type'  => 'upload',
          'title' => 'Upload with After Text',
          'after' => '<p>You can use default value <strong>get_template_directory_uri()</strong>."/images/screenshot-1.png"</p>',
        ),

        array(
          'id'            => 'unique_upload_7',
          'type'          => 'upload',
          'title'         => 'Upload with Placeholder',
          'attributes'    => array(
            'placeholder' => 'http://'
          ),
        ),

        array(
          'id'             => 'unique_upload_8',
          'type'           => 'upload',
          'title'          => 'Upload with Custom Title',
          'settings'       => array(
            'button_title' => 'Upload Logo',
            'frame_title'  => 'Choose a image',
            'insert_title' => 'Use this image',
          ),
        ),

        array(
          'id'             => 'unique_upload_9',
          'type'           => 'upload',
          'title'          => 'Upload with Video',
          'settings'       => array(
            'upload_type'  => 'video',
            'button_title' => 'Upload Video',
            'frame_title'  => 'Choose a Video',
            'insert_title' => 'Use This Video',
          ),
        ),

      ),
    ),

    //
    // Background
    //
    array(
      'name'   => 'background_options',
      'title'  => 'Background',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_background_1',
          'type'  => 'background',
          'title' => 'Background',
        ),

        array(
          'id'    => 'unique_background_2',
          'type'  => 'background',
          'title' => 'Background with Description',
          'desc'  => 'Lets write some description for this background field.',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'           => 'unique_background_3',
          'type'         => 'background',
          'title'        => 'Background with Default',
          'default'      => array(
            'image'      => 'something.png',
            'repeat'     => 'repeat-x',
            'position'   => 'center center',
            'attachment' => 'fixed',
            'color'      => '#ffbc00',
          ),
        ),

      ),
    ),

    //
    // Color Picker
    //
    array(
      'name'   => 'color_picker_options',
      'title'  => 'Color Picker',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'      => 'unique_color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker',
        ),

        array(
          'id'      => 'unique_color_picker_2',
          'type'    => 'color_picker',
          'title'   => 'Color Picker with HEX Default',
          'default' => '#dd3333',
        ),

        array(
          'id'      => 'unique_color_picker_3',
          'type'    => 'color_picker',
          'title'   => 'Color Picker with RGBA Default',
          'default' => 'rgba(0, 0, 255, 0.25)',
        ),

        array(
          'id'    => 'unique_color_picker_4',
          'type'  => 'color_picker',
          'title' => 'Color Picker without RGBA feature',
          'rgba'  => false,
        ),

      ),
    ),

    //
    // Image Select
    //
    array(
      'name'   => 'image_select_options',
      'title'  => 'Image Select',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'        => 'unique_image_select_1',
          'type'      => 'image_select',
          'title'     => 'Image Select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
            'value-4' => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
          ),
        ),

        array(
          'id'           => 'unique_image_select_2',
          'type'         => 'image_select',
          'title'        => 'Image Select with Default',
          'options'      => array(
            'value-1'    => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
            'value-2'    => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
            'value-3'    => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
            'value-4'    => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
            'value-5'    => 'http://codestarframework.com/assets/images/placeholder/150x125-555555.gif',
          ),
          'default'      => 'value-2'
        ),

        array(
          'id'        => 'unique_image_select_3',
          'type'      => 'image_select',
          'title'     => 'Image Select with Required Select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-4' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-5' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-6' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-7' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-8' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
          ),
          'radio'     => true,
          'default'   => 'value-2'
        ),

        array(
          'id'           => 'unique_image_select_4',
          'type'         => 'image_select',
          'title'        => 'Image Select with Multi Select',
          'options'      => array(
            'value-1'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-2'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-3'    => 'http://codestarframework.com/assets/images/placeholder/80x80-e74c3c.gif',
            'value-4'    => 'http://codestarframework.com/assets/images/placeholder/80x80-ffbc00.gif',
            'value-5'    => 'http://codestarframework.com/assets/images/placeholder/80x80-3498db.gif',
            'value-6'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2ecc71.gif',
            'value-7'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
            'value-8'    => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
          ),
          'multi_select' => true,
          'default'      => array( 'value-3', 'value-4', 'value-5', 'value-6' )
        ),

      ),
    ),

    //
    // Typography
    //
    array(
      'name'   => 'typography_options',
      'title'  => 'Typography',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'unique_typography_1',
          'type'  => 'typography',
          'title' => 'Typography',
        ),

        array(
          'id'       => 'unique_typography_2',
          'type'     => 'typography',
          'title'    => 'Typography with Default',
          'default'  => array(
            'family' => 'Open Sans',
            'weight' => '800',
          ),
        ),

        array(
          'id'       => 'unique_typography_3',
          'type'     => 'typography',
          'title'    => 'Typography without Chosen',
          'default'  => array(
            'family' => 'Ubuntu',
          ),
          'chosen'   => false,
        ),

        array(
          'id'       => 'unique_typography_4',
          'type'     => 'typography',
          'title'    => 'Typography without Chosen/weight',
          'default'  => array(
            'family' => 'Arial',
            'font'   => 'websafe',
          ),
          'weight'   => false,
          'chosen'   => false,
        ),

      ),
    ),

    //
    // Wysiwyg
    //
    array(
      'name'   => 'wysiwyg_options',
      'title'  => 'Wysiwyg',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'wysiwyg_1',
          'type'  => 'wysiwyg',
          'title' => 'Wysiwyg',
        ),

        array(
          'id'       => 'wysiwyg_2',
          'type'     => 'wysiwyg',
          'title'    => 'Wysiwyg with Custom Settings',
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => false,
            'media_buttons' => false,
          )
        ),


      ),
    ),

    //
    // Image
    //
    array(
      'name'   => 'image_options',
      'title'  => 'Image',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'image_1',
          'type'  => 'image',
          'title' => 'Image',
        ),

        array(
          'id'    => 'image_2',
          'type'  => 'image',
          'title' => 'Image with Description and Help',
          'desc'  => 'Lets write some description for this image field.',
          'help'  => 'This option field is useful. You will love it!',
        ),

        array(
          'id'        => 'image_3',
          'type'      => 'image',
          'title'     => 'Image with Custom Button Title',
          'add_title' => 'Add Logo',
        ),

      ),
    ),

    //
    // Gallery
    //
    array(
      'name'   => 'gallery_options',
      'title'  => 'Gallery',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'          => 'gallery_1',
          'type'        => 'gallery',
          'title'       => 'Gallery',
        ),

        array(
          'id'          => 'gallery_2',
          'type'        => 'gallery',
          'title'       => 'Gallery with Custom Title',
          'add_title'   => 'Add Images',
          'edit_title'  => 'Edit Images',
          'clear_title' => 'Remove Images',
        ),

        array(
          'id'          => 'gallery_3',
          'type'        => 'gallery',
          'title'       => 'Gallery with Custom Button Titles',
          'desc'        => 'Lets write some description for this image field.',
          'help'        => 'This option field is useful. You will love it!',
          'add_title'   => 'Add Image(s)',
          'edit_title'  => 'Edit Image(s)',
          'clear_title' => 'Clear Image(s)',
        ),

      ),
    ),

    //
    // Sorter
    //
    array(
      'name'   => 'sorter_options',
      'title'  => 'Sorter',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'             => 'sorter_1',
          'type'           => 'sorter',
          'title'          => 'Sorter',
          'options'        => array(
            'enabled'      => array(
              'bmw'        => 'BMW',
              'mercedes'   => 'Mercedes',
              'volkswagen' => 'Volkswagen',
            ),
            'disabled'     => array(
              'ferrari'    => 'Ferrari',
              'mustang'    => 'Mustang',
            ),
          ),
        ),

        array(
          'id'             => 'sorter_2',
          'type'           => 'sorter',
          'title'          => 'Sorter',
          'options'        => array(
            'enabled'      => array(
              'blue'       => 'Blue',
              'green'      => 'Green',
              'red'        => 'Red',
              'yellow'     => 'Yellow',
              'orange'     => 'Orange',
              'ocean'      => 'Ocean',
            ),
            'disabled'     => array(
              'black'      => 'Black',
              'white'      => 'White',
            ),
          ),
          'enabled_title'  => 'Active',
          'disabled_title' => 'Deactive',
        ),

        array(
          'id'            => 'sorter_3',
          'type'          => 'sorter',
          'title'         => 'Sorter With Only Enabled',
          'options'       => array(
            'enabled'     => array(
              'wordpress' => 'WordPress',
              'jquery'    => 'jQuery',
              'php5'      => 'PHP5',
              'mysql'     => 'MYSQL',
              'nodejs'    => 'NodeJS',
              'no-life'   => 'No Life',
            ),
          ),
          'enabled_only'  => true,
        ),

      ),
    ),

    //
    // Fieldset
    //
    array(
      'name'   => 'fieldset_options',
      'title'  => 'Fieldset',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'     => 'fieldset_1',
          'type'   => 'fieldset',
          'title'  => 'Fieldset',
          'fields' => array(

            array(
              'id'    => 'fieldset_1_text',
              'type'  => 'text',
              'title' => 'Text Field',
            ),

            array(
              'id'    => 'fieldset_1_upload',
              'type'  => 'upload',
              'title' => 'Upload Field',
            ),

            array(
              'id'    => 'fieldset_1_textarea',
              'type'  => 'textarea',
              'title' => 'Textarea Field',
            ),

          ),
        ),

        array(
          'id'     => 'fieldset_2',
          'type'   => 'fieldset',
          'title'  => 'Fieldset with Default',
          'fields' => array(

            array(
              'type'    => 'subheading',
              'content' => 'Title of Fieldset',
            ),

            array(
              'id'    => 'fieldset_2_text',
              'type'  => 'text',
              'title' => 'Text Field',
            ),

            array(
              'id'    => 'fieldset_2_checkbox',
              'type'  => 'checkbox',
              'title' => 'Checkbox Field',
              'label' => 'Are you sure?',
            ),

            array(
              'id'    => 'fieldset_2_textarea',
              'type'  => 'textarea',
              'title' => 'Upload Field',
            ),

          ),
          'default'   => array(
            'fieldset_2_text'     => 'Hello',
            'fieldset_2_checkbox' => true,
            'fieldset_2_textarea' => 'Do stuff',
          )
        ),

      ),
    ),

    //
    // Tabbed
    //
    array(
      'name'   => 'tabbed_options',
      'title'  => 'Tabbed',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'id'    => 'tabbed_1',
          'type'  => 'tabbed',
          'title' => 'Tabbed',
          'tabs'  => array(

            array(
              'title'  => 'Tab 1',
              'icon'   => 'fa fa-star',
              'fields' => array(

                array(
                  'id'    => 'tab_1_text',
                  'type'  => 'text',
                  'title' => 'Tab 1 Text',
                ),

                array(
                  'id'    => 'tab_1_textarea',
                  'type'  => 'textarea',
                  'title' => 'Tab 1 Textarea',
                ),

              ),

            ),

            array(
              'title'  => 'Tab 2',
              'fields' => array(

                array(
                  'id'    => 'tab_2_text',
                  'type'  => 'text',
                  'title' => 'Tab 2 Text',
                ),

              ),

            ),

          ),
        ),

        array(
          'id'    => 'tabbed_2',
          'type'  => 'tabbed',
          'title' => 'Tabbed with Default',
          'tabs'  => array(

            array(
              'title'  => 'Tab 1',
              'icon'   => 'fa fa-star',
              'fields' => array(

                array(
                  'id'      => 'tab_1_icon',
                  'type'    => 'icon',
                  'title'   => 'Tab 1 Icon',
                  'default' => 'fa fa-heart'
                ),

                array(
                  'id'      => 'tab_1_text',
                  'type'    => 'text',
                  'title'   => 'Tab 1 Text',
                  'default' => 'Text Content'
                ),


                array(
                  'id'      => 'tab_1_textarea',
                  'type'    => 'textarea',
                  'title'   => 'Tab 1 Textarea',
                  'default' => 'Textarea Content'
                ),

              ),

            ),

            array(
              'title'  => 'Tab 2',
              'fields' => array(

                array(
                  'id'      => 'tab_2_text',
                  'type'    => 'text',
                  'title'   => 'Tab 2 Text',
                  'default' => 'Text 2 Content'
                ),

              ),
            ),

            array(
              'title'  => 'Tab 3',
              'fields' => array(

                array(
                  'id'      => 'tab_1_textarea',
                  'type'    => 'textarea',
                  'title'   => 'Tab 1 Textarea',
                  'default' => 'Textarea Content'
                ),

              ),
            ),

          ),
        ),

      ),
    ),

    //
    // Ace Editor
    //
    array(
      'name'     => 'ace_editor_options',
      'title'    => 'Ace Editor',
      'icon'     => 'fa fa-check',
      'fields'   => array(

        array(
          'id'      => 'ace_editor_1',
          'type'    => 'ace_editor',
          'title'   => 'Ace Editor',
          'default' => '// do stuff',
        ),

        array(
          'id'      => 'ace_editor_3',
          'type'    => 'ace_editor',
          'title'   => 'Ace Editor Custom Options',
          'options' => array(
            'theme'      => 'ace/theme/chrome',
            'mode'       => 'ace/mode/css',
            'showGutter' => true,
          ),
          'default' =>'.text-layer {
  font: 12px Arial, "Courier New", monospace;
  cursor: text;
}',
        ),

      ),
    ),

    //
    // Others
    //
    array(
      'name'   => 'others_options',
      'title'  => 'Others',
      'icon'   => 'fa fa-check',
      'fields' => array(

        array(
          'type'    => 'heading',
          'content' => 'Heading',
        ),

        array(
          'id'    => 'unique_others_text_1',
          'type'  => 'text',
          'title' => 'Others Text 1',
        ),

        array(
          'id'    => 'unique_others_text_2',
          'type'  => 'text',
          'title' => 'Others Text 2',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Sub Heading',
        ),

        array(
          'id'    => 'unique_others_text_3',
          'type'  => 'text',
          'title' => 'Others Text 3',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => 'Notice Success: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'    => 'unique_others_text_4',
          'type'  => 'text',
          'title' => 'Others Text 4',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Notice Info: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'    => 'unique_others_text_5',
          'type'  => 'text',
          'title' => 'Others Text 5',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'warning',
          'content' => 'Notice Warning: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'    => 'unique_others_text_6',
          'type'  => 'text',
          'title' => 'Others Text 6',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'danger',
          'content' => 'Notice Danger: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'    => 'unique_others_text_7',
          'type'  => 'text',
          'title' => 'Others Text 7',
        ),

        array(
          'id'    => 'unique_others_text_8',
          'type'  => 'text',
          'title' => 'Others Text 8',
        ),

        array(
          'type'    => 'content',
          'content' => 'Content Field: It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ),

        array(
          'id'    => 'unique_others_text_9',
          'type'  => 'text',
          'title' => 'Others Text 9',
          'after' => '<p class="csf-text-warning">This field using debug=true</p>',
          'debug' => true,
        ),


      ),
    ),

  )
);

//
// Seperator
//
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'A Seperator',
  'icon'   => 'fa fa-bookmark'
);

//
// Backup
//
$options[] = array(
  'name'   => 'backup_section',
  'title'  => 'Backup',
  'icon'   => 'fa fa-shield',
  'fields' => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type' => 'backup',
    ),

  )
);

//
// Validate
//
$options[] = array(
  'name'   => 'validate_section',
  'title'  => 'Validate',
  'icon'   => 'fa fa-check-circle',
  'fields' => array(

    array(
      'id'       => 'validate_1',
      'type'     => 'text',
      'title'    => 'Validate Example 1',
      'desc'     => 'This text field only accepted email address.',
      'default'  => 'info@domain.com',
      'validate' => 'csf_validate_email',
    ),

    array(
      'id'       => 'validate_2',
      'type'     => 'text',
      'title'    => 'Validate Example 2',
      'desc'     => 'This text field only accepted numbers',
      'default'  => '123456',
      'validate' => 'csf_validate_numeric',
    ),

    array(
      'id'       => 'validate_3',
      'type'     => 'text',
      'title'    => 'Validate Example 3',
      'after'    => ' <small class="csf-text-warning">( * required )</small>',
      'default'  => 'lorem ipsum',
      'validate' => 'csf_validate_required',
    ),

  )
);

//
// Sanitize
//
$options[] = array(
  'name'   => 'sanitize_section',
  'title'  => 'Sanitize',
  'icon'   => 'fa fa-repeat',
  'fields' => array(

    array(
      'id'       => 'sanitize_1',
      'type'     => 'text',
      'title'    => 'Sanitize Example 1',
      'after'    => '<p class="csf-text-muted">This text field using wp core function "sanitize_title". try to write some text</p>',
      'sanitize' => 'sanitize_title'
    ),

    array(
      'id'       => 'sanitize_2',
      'type'     => 'text',
      'title'    => 'Sanitize Example 2',
      'after'    => '<p class="csf-text-muted">This text field using custom function "csf_sanitize_custom". try to write some text, converting word "a" to "b"</p>',
      'sanitize' => 'csf_sanitize_custom'
    ),

  )
);

//
// Dependencies
//
$options[] = array(
  'name'   => 'dependencies',
  'title'  => 'Dependencies',
  'icon'   => 'fa fa-code-fork',
  'fields' => array(

    array(
      'type'    => 'subheading',
      'content' => 'Basic Dependencies',
    ),

    array(
      'id'    => 'dep_1',
      'type'  => 'text',
      'title' => 'If text <u>not be empty</u>',
    ),

    array(
      'id'         => 'dummy_1',
      'type'       => 'notice',
      'class'      => 'info',
      'content'    => 'Done, this text option have something.',
      'dependency' => array( 'dep_1', '!=', '' ),
    ),

    array(
      'id'    => 'dep_2',
      'type'  => 'switcher',
      'title' => 'If switcher mode <u>ON</u>',
    ),

    array(
      'id'         => 'dummy_2',
      'type'       => 'notice',
      'class'      => 'success',
      'content'    => 'Woow! Switcher is ON',
      'dependency' => array( 'dep_2', '==', 'true' ),
    ),

    array(
      'id'       => 'dep_3',
      'type'     => 'select',
      'title'    => 'Select color <u>black or white</u>',
      'options'  => array(
        'blue'   => 'Blue',
        'yellow' => 'Yellow',
        'green'  => 'Green',
        'black'  => 'Black',
        'white'  => 'White',
      ),
    ),

    array(
      'id'         => 'dummy_3',
      'type'       => 'notice',
      'class'      => 'danger',
      'content'    => 'Well done!',
      'dependency' => array( 'dep_3', 'any', 'black,white' ),
    ),

    array(
      'id'         => 'dep_4',
      'type'       => 'radio',
      'title'      => 'If set <u>No, Thanks</u>',
      'options'    => array(
        'yes'      => 'Yes, Please',
        'no'       => 'No, Thanks',
        'not-sure' => 'I am not sure!',
      ),
      'default'    => 'yes'
    ),

    array(
      'id'         => 'dummy_4',
      'type'       => 'notice',
      'class'      => 'info',
      'content'    => 'Uh why?!!!',
      'dependency' => array( 'dep_4_no', '==', 'true' ),
    ),

    array(
      'id'        => 'dep_5',
      'type'      => 'checkbox',
      'title'     => 'If checked <u>danger</u>',
      'options'   => array(
        'success' => 'Success',
        'danger'  => 'Danger',
        'info'    => 'Info',
        'warning' => 'Warning',
      ),
    ),

    array(
      'id'         => 'dummy_5',
      'type'       => 'notice',
      'class'      => 'danger',
      'content'    => 'Danger!',
      'dependency' => array( 'dep_5_danger', '==', 'true' ),
    ),

    array(
      'id'       => 'dep_6',
      'type'     => 'image_select',
      'title'    => 'If check <u>Blue box</u> (checkbox)',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'     => 'Image select field input="checkbox" model. in checkbox model unselected available.',
    ),

    array(
      'id'         => 'dummy_6',
      'type'       => 'notice',
      'class'      => 'info',
      'content'    => 'Blue box selected!',
      'dependency' => array( 'dep_6_blue', '==', 'true' ),
    ),

    array(
      'id'         => 'dep_6_alt',
      'type'       => 'image_select',
      'title'      => 'If check <u>Green box or Blue box</u> (checkbox)',
      'options'    => array(
        'green'    => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'      => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'   => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'     => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'     => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'       => 'Multipel Image select field input="checkbox" model. in checkbox model unselected available.',
      'default'    => 'gray',
      'attributes' => array(
        'data-depend-id' => 'dep_6_alt',
      ),
    ),

    array(
      'id'         => 'dummy_6_alt',
      'type'       => 'notice',
      'class'      => 'success',
      'content'    => 'Green or Blue box selected!',
      'dependency' => array( 'dep_6_alt', 'any', 'green,blue' ),
    ),

    array(
      'id'       => 'dep_7',
      'type'     => 'image_select',
      'title'    => 'If check <u>Green box</u> (radio)',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'     => 'Image select field input="radio" model. in radio model unselected unavailable.',
      'radio'    => true,
      'default'  => 'gray',
    ),

    array(
      'id'         => 'dummy_7',
      'type'       => 'notice',
      'class'      => 'success',
      'content'    => 'Green box selected!',
      'dependency' => array( 'dep_7_green', '==', 'true' ),
    ),

    array(
      'id'         => 'dep_7_alt',
      'type'       => 'image_select',
      'title'      => 'If check <u>Green box or Blue box</u> (radio)',
      'options'    => array(
        'green'    => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'      => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'   => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'     => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'     => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'       => 'Multipel Image select field input="radio" model. in radio model unselected unavailable.',
      'radio'      => true,
      'default'    => 'gray',
      'attributes' => array(
        'data-depend-id' => 'dep_7_alt',
      ),
    ),

    array(
      'id'         => 'dummy_7_alt',
      'type'       => 'notice',
      'class'      => 'success',
      'content'    => 'Green or Blue box selected!',
      'dependency' => array( 'dep_7_alt', 'any', 'green,blue' ),
    ),

    array(
      'id'    => 'dep_8',
      'type'  => 'image',
      'title' => 'Add a image',
    ),

    array(
      'id'         => 'dummy_8',
      'type'       => 'notice',
      'class'      => 'success',
      'content'    => 'Added a image!',
      'dependency' => array( 'dep_8', '!=', '' ),
    ),

    array(
      'id'    => 'dep_9',
      'type'  => 'icon',
      'title' => 'Add a icon',
    ),

    array(
      'id'         => 'dummy_9',
      'type'       => 'notice',
      'class'      => 'success',
      'content'    => 'Added a icon!',
      'dependency' => array( 'dep_9', '!=', '' ),
    ),

    array(
      'type'    => 'subheading',
      'content' => 'Advanced Dependencies',
    ),

    array(
      'id'    => 'dep_10',
      'type'  => 'text',
      'title' => 'If text string <u>hello</u>',
    ),

    array(
      'id'    => 'dep_11',
      'type'  => 'text',
      'title' => 'and this text string <u>world</u>',
    ),

    array(
      'id'    => 'dep_12',
      'type'  => 'checkbox',
      'title' => 'and checkbox mode <u>checked</u>',
      'label' => 'Check me!'
    ),

    array(
      'id'         => 'dummy_10',
      'type'       => 'notice',
      'class'      => 'info',
      'content'    => 'Done, Multiple Dependencies worked.',
      'dependency' => array( 'dep_10|dep_11|dep_12', '==|==|==', 'hello|world|true' ),
    ),

    array(
      'type'    => 'subheading',
      'content' => 'Another Dependencies',
    ),

    array(
      'id'      => 'dep_13',
      'type'    => 'select',
      'title'   => 'If color <u>black or white</u>',
      'options' => array(
        'blue'  => 'Blue',
        'black' => 'Black',
        'white' => 'White',
      ),
    ),

    array(
      'id'       => 'dep_14',
      'type'     => 'select',
      'title'    => 'If size <u>middle</u>',
      'options'  => array(
        'small'  => 'Small',
        'middle' => 'Middle',
        'large'  => 'Large',
        'xlage'  => 'XLarge',
      ),
    ),

    array(
      'id'         => 'dep_15',
      'type'       => 'select',
      'title'      => 'If text is <u>world</u>',
      'options'    => array(
        'hello'    => 'Hello',
        'world'    => 'World',
      ),
      'dependency' => array( 'dep_13|dep_14', 'any|==', 'black,white|middle' ),
    ),

    array(
      'id'         => 'dummy_11',
      'type'       => 'notice',
      'class'      => 'info',
      'content'    => 'Well done, Correctly!',
      'dependency' => array( 'dep_15', '==', 'world' ),
    ),

  ),
);

//
// Seperator
//
$options[] = array(
  'name'   => 'seperator_2',
  'title'  => 'Section Examples',
  'icon'   => 'fa fa-cog'
);

//
// Section
//
$options[] = array(
  'name'   => 'normal_section',
  'title'  => 'Normal Section',
  'icon'   => 'fa fa-minus',
  'fields' => array(

    array(
      'type'    => 'content',
      'content' => 'This section is empty, add some options...',
    ),

  )
);

//
// Dependencies
//
$options[]   = array(
  'name'     => 'accordion_section',
  'title'    => 'Accordion Sections',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    array(
      'name'   => 'sub_section_1',
      'title'  => 'Sub Sections 1',
      'icon'   => 'fa fa-minus',
      'fields' => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

    array(
      'name'   => 'sub_section_2',
      'title'  => 'Sub Sections 2',
      'icon'   => 'fa fa-minus',
      'fields' => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

    array(
      'name'   => 'sub_section_3',
      'title'  => 'Sub Sections 3',
      'icon'   => 'fa fa-minus',
      'fields' => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

  )
);

//
// Seperator
//
$options[] = array(
  'name'   => 'seperator_3',
  'title'  => 'Others',
  'icon'   => 'fa fa-gift'
);

//
// Donate
//
$options[] = array(
  'name'   => 'donate_section',
  'title'  => 'Donate',
  'icon'   => 'fa fa-heart',
  'fields' => array(

    array(
      'type'    => 'heading',
      'content' => 'You Guys!'
    ),

    array(
      'type'    => 'content',
      'content' => 'If you want to see more functions and features for this framework, you can buy me a coffee. I need a lot of it when I am creating new stuff for you. Thank you in advance.',
    ),

    array(
      'type'    => 'content',
      'content' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=56MAQNCNELP8J" target="_blank"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Donate" /></a>',
    ),

  )
);

//
// License
//
$options[] = array(
  'name'   => 'license_section',
  'title'  => 'License',
  'icon'   => 'fa fa-info-circle',
  'fields' => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSF_Customize::instance( $options, $options_name );
