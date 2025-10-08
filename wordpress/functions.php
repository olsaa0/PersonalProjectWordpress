<?php
function photo_exhibition_scripts() {
    wp_enqueue_style('photo-exhibition-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'photo_exhibition_scripts');

// Optional: register menu
function photo_exhibition_setup() {
    register_nav_menus(['main-menu' => __('Main Menu')]);
}
add_action('after_setup_theme', 'photo_exhibition_setup');
