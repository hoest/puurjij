<?php
function puurjij_register_theme_menu() {
  register_nav_menu('primary', 'Hoofd navigatie menu');
}

add_action('init', 'puurjij_register_theme_menu');

function puurjij_widgets_init() {
  // In header widget area, located to the right hand side of the
  // header, next to the site title and description. Empty by default.
  // register_sidebar( array(
  //   'name' => 'In Header Widget Area',
  //   'id' => 'in-header-widget-area',
  //   'description' => 'A widget area located to the right hand side of the header, next to the site title and description.',
  //   'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
  //   'after_widget' => '</div>',
  //   'before_title' => '<h3 class="widget-title">',
  //   'after_title' => '</h3>',
  // ) );

  // Sidebar widget area, located in the sidebar. Empty by default.
  register_sidebar(array(
    'name' => 'Zijbalk Widget Area',
    'id' => 'sidebar-widget-area',
    'description' => 'De widget area voor de zijbalk',
    'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}

add_action( 'widgets_init', 'puurjij_widgets_init' );

?>
