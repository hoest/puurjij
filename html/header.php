<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="nl" prefix="og: http://ogp.me/ns#"> <![endif]-->
<html class="no-js" lang="nl" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
      <?php
      global $page, $paged;
      wp_title( '|', true, 'right' );
      // Add the blog name.
      bloginfo( 'name' );
      // Add the blog description for the home/front page.
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
        echo " - $site_description";
      ?>
    </title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.1/css/normalize.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.1/css/foundation.min.css" />
    <link href="http://fonts.googleapis.com/css?family=Muli:300,400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.1/js/vendor/modernizr.min.js"></script>

    <meta name="author" content="<?php bloginfo('name'); ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="5 days" />

    <!-- if page is content page -->
    <?php if (is_single()) { ?>
    <meta property="og:url" content="<?php the_permalink() ?>"/>
    <meta property="og:title" content="<?php single_post_title(''); ?>" />
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta property="og:type" content="article" />

    <!-- if page is others -->
    <?php } else { ?>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" /s>
    <meta property="og:type" content="website" />
    <?php } ?>

    <meta property="og:image" content="<?php bloginfo( 'stylesheet_directory' ); ?>/logo/puurjij-small.png"/>

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="silvereffect">
      <div class="row hidden">
        <div class="medium-12 columns">
          <h1><?php bloginfo( 'name' ); ?></h1>
          <h2><?php bloginfo( 'description' ); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="medium-4 columns">
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <img alt="PUUR JIJ Schoonheidssalong - Logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/logo/puurjij-small.png" />
            </a>
          </div>
        </div>
        <div class="medium-8 columns">
          <div class="image-slider">
            <ul data-orbit
                data-options="animation:slide;
                              pause_on_hover:true;
                              timer_speed:5000;
                              animation_speed:500;
                              slide_number:false;
                              resume_on_mouseout:true;
                              navigation_arrows:true;
                              bullets:false;">
              <li>
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photo-001.jpg" alt="slide 1" />
              </li>
              <li>
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photo-002.jpg" alt="slide 2" />
              </li>
              <li>
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photo-003.jpg" alt="slide 1" />
              </li>
              <li>
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photo-004.jpg" alt="slide 1" />
              </li>
              <li>
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photo-005.jpg" alt="slide 1" />
              </li>
              <li>
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photo-006.jpg" alt="slide 1" />
              </li>
              <li>
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/photo-007.jpg" alt="slide 1" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <div class="contain-to-grid sticky">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name"></li>
          <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

        <section class="top-bar-section">
          <?php wp_nav_menu(array(
            'container' => '',
            'container_class' => 'right',
            'items_wrap' => '<ul id="%1$s" class="right %2$s">%3$s</ul>',
            'walker' => new top_bar_walker(),
            'theme_location' => 'primary')); ?>
        </section>
      </nav>
    </div>
    <main>
      <div class="row">
