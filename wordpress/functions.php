<?php
// Enqueue stylesheet
function photo_exhibition_enqueue_styles() {
    wp_enqueue_style('photo-exhibition-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'photo_exhibition_enqueue_styles');

// Theme setup: support logo and menus
function photo_exhibition_theme_setup() {
  add_theme_support('custom-logo', array(
    'height'      => 60,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
  ));
  register_nav_menus( array(
    'main-menu' => __( 'Main Menu', 'photo-exhibition' ),
  ) );
}
add_action( 'after_setup_theme', 'photo_exhibition_theme_setup' );

