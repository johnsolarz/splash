<?php

/**
 *  Install Add-ons
 *
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme/plugin as outlined in the terms and conditions.
 *  For more information, please read:
 *  - http://www.advancedcustomfields.com/terms-conditions/
 *  - http://www.advancedcustomfields.com/resources/getting-started/including-lite-mode-in-a-plugin-theme/
 */

// Add-ons
// include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
// include_once( 'add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_splash-page',
    'title' => 'Splash Page',
    'fields' => array (
      array (
        'key' => 'field_5246fd6e74a4e',
        'label' => 'Logo',
        'name' => 'logo',
        'type' => 'image',
        'save_format' => 'object',
        'preview_size' => 'large',
        'library' => 'all',
      ),
      array (
        'key' => 'field_5240527aa17f7',
        'label' => 'Facebook',
        'name' => 'facebook',
        'type' => 'text',
        'instructions' => 'Add your facebook handle',
        'default_value' => '',
        'placeholder' => 'https://www.facebook.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_524052c4a17f9',
        'label' => 'Google Plus',
        'name' => 'google_plus',
        'type' => 'text',
        'instructions' => 'Add your google+ handle',
        'default_value' => '',
        'placeholder' => 'https://plus.google.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_524052a7a17f8',
        'label' => 'Instagram',
        'name' => 'instagram',
        'type' => 'text',
        'instructions' => 'Add your instagram handle',
        'default_value' => '',
        'placeholder' => 'http://instagram.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_524052dda17fa',
        'label' => 'Pinterest',
        'name' => 'pinterest',
        'type' => 'text',
        'instructions' => 'Add your pinterest handle',
        'default_value' => '',
        'placeholder' => 'http://www.pinterest.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_524052f5a17fb',
        'label' => 'Twitter',
        'name' => 'twitter',
        'type' => 'text',
        'instructions' => 'Add your twitter handle',
        'default_value' => '',
        'placeholder' => 'https://twitter.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_523ca8e5e1a4d',
        'label' => 'Slide',
        'name' => 'slide',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_523ca8ede1a4e',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'large',
            'library' => 'all',
          ),
          array (
            'key' => 'field_5246fc68d6caa',
            'label' => 'Caption',
            'name' => 'caption',
            'type' => 'wysiwyg',
            'column_width' => '',
            'default_value' => '',
            'toolbar' => 'full',
            'media_upload' => 'no',
          ),
        ),
        'row_min' => 0,
        'row_limit' => '',
        'layout' => 'row',
        'button_label' => 'Add Slide',
      ),
      array (
        'key' => 'field_52470de447da8',
        'label' => 'Slider Theme',
        'name' => 'slider_theme',
        'type' => 'select',
        'choices' => array (
          'default' => 'Default',
          'default-inverted' => 'Default Inverted',
          'minimal-white' => 'Minimal White',
          'universal' => 'Universal',
        ),
        'default_value' => '',
        'allow_null' => 0,
        'multiple' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
