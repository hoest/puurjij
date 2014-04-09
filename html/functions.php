<?php
function puurjij_register_theme_menu() {
  register_nav_menu('primary', 'Hoofd navigatie menu');
}

add_action('init', 'puurjij_register_theme_menu');

function puurjij_widgets_init() {
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

  // Sidebar widget area, located in the footer. Empty by default.
  register_sidebar(array(
    'name' => 'Footer Widget Area',
    'id' => 'footer-widget-area',
    'description' => 'De widget area voor de footer',
    'before_widget' => '<div class="medium-4 columns widget-container %2$s" id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}

add_action('widgets_init', 'puurjij_widgets_init');

/**
 * Customize the output of menus for Foundation top bar
 */
class top_bar_walker extends Walker_Nav_Menu {
  function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
    $element->has_children = !empty($children_elements[$element->ID]);
    $element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
    $element->classes[] = ($element->has_children) ? 'has-dropdown' : '';

    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
  }

  function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0) {
    $item_html = '';
    parent::start_el($item_html, $object, $depth, $args);

    $output .= ($depth == 0) ? '<li class="divider"></li>' : '';

    $classes = empty($object->classes) ? array() : (array) $object->classes;

    if(in_array('label', $classes)) {
      $output .= '<li class="divider"></li>';
      $item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html);
    }

    if (in_array('divider', $classes)) {
      $item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '', $item_html);
    }

    $output .= $item_html;
  }

  function start_lvl(&$output, $depth = 0, $args = array()) {
    $output .= "\n<ul class=\"sub-menu dropdown\">\n";
  }
}

?>
