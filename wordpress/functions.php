<?php
function photo_exhibition_scripts() {
    wp_enqueue_style('photo-exhibition-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'photo_exhibition_scripts');
