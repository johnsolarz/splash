<?php
// Splash social options
$facebook  = get_field('facebook', 'option');
$google    = get_field('google_plus', 'option');
$instagram = get_field('instagram', 'option');
$pinterest = get_field('pinterest', 'option');
$twitter   = get_field('twitter', 'option');
?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <?php if ($facebook || $google || $instagram || $pinterest || $twitter) { ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php } ?>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <?php if ($facebook || $google || $instagram || $pinterest || $twitter) { ?>
      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
        <ul class="nav navbar-nav socials">

        <?php if ($facebook) { ?>
          <li class="menu-facebook"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="symbol">circlefacebook</a></li>
        <?php }

        if ($google) { ?>
          <li class="menu-google"><a href="<?php the_field('google_plus', 'option'); ?>" target="_blank" class="symbol">circlegoogleplus</a></li>
       <?php }

        if ($instagram) { ?>
          <li class="menu-instagram"><a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="symbol">circleinstagram</a></li>
        <?php }

        if ($pinterest) { ?>
          <li class="menu-pinterest"><a href="<?php the_field('pinterest', 'option'); ?>" target="_blank" class="symbol">circlepinterest</a></li>
        <?php }

        if ($twitter) { ?>
          <li class="menu-twitter"><a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="symbol">circletwitterbird</a></li>
        <?php } ?>
      </ul>
    </nav>
    <?php } ?>
  </div>
</header>
