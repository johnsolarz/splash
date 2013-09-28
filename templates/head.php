<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!--

  .....................................................................

  Built by Eight Seven Central in Des Moines, Iowa.

  .....................................................................

  Hi.
  http://eightsevencentral.com
  design@eightsevencentral.com
  @87central

  .....................................................................

  -->
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/royalslider/jquery.royalslider.min.js"></script>
  <script type="text/javascript" src="//use.typekit.net/mjg5zpl.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <?php
  $skin = get_field('slider_theme', 'option');
  ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/royalslider/skins/<?php echo $skin; ?>/rs-<?php echo $skin; ?>.css">
  <?php
  $css = get_field('logo', 'option');
  if ($css) {
    get_template_part( 'templates/custom', 'css' );
  }
  ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
