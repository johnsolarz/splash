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
    'id' => 'acf_header',
    'title' => 'Header',
    'fields' => array (
      array (
        'key' => 'field_52497ec189eb5',
        'label' => 'Logo',
        'name' => 'logo',
        'type' => 'image',
        'save_format' => 'object',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array (
        'key' => 'field_524976dafffff',
        'label' => 'Facebook',
        'name' => 'facebook',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://www.facebook.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5249770600000',
        'label' => 'Google Plus',
        'name' => 'google_plus',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://plus.google.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5249771f00001',
        'label' => 'Instagram',
        'name' => 'instagram',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://instagram.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5249773200002',
        'label' => 'Pinterest',
        'name' => 'pinterest',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://www.pinterest.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5249774d00003',
        'label' => 'Twitter',
        'name' => 'twitter',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://twitter.com/',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-header',
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
  register_field_group(array (
    'id' => 'acf_slides',
    'title' => 'Slides',
    'fields' => array (
      array (
        'key' => 'field_524977dfead04',
        'label' => 'Slide',
        'name' => 'slide',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_524977ecead05',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_5249781aead06',
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
        'key' => 'field_52497d0dcaf42',
        'label' => 'Theme',
        'name' => 'theme',
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
          'value' => 'acf-options-slides',
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
  register_field_group(array (
    'id' => 'acf_typography',
    'title' => 'Typography',
    'fields' => array (
      array (
        'key' => 'field_5249749772c85',
        'label' => 'Font Embed Code',
        'name' => 'font_embed_code',
        'type' => 'textarea',
        'default_value' => '',
        'placeholder' => '<script type="text/javascript" src="//use.typekit.net/mjg5zpl.js"></script> and <script type="text/javascript">try{Typekit.load();}catch(e){}</script>',
        'maxlength' => '',
        'formatting' => 'html',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-typography',
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
