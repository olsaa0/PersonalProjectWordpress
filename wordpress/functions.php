<?php
// Enqueue theme styles
function photo_exhibition_enqueue_styles() {

    // Main theme stylesheet (applies to all pages)
    wp_enqueue_style(
        'photo-exhibition-style',
        get_stylesheet_uri(),
        array(), // no dependencies
        wp_get_theme()->get('Version') // version from theme
    );

    // Books page stylesheet (only loads on Books page)
    if (is_page_template('page-books.php')) {
        wp_enqueue_style(
            'books-css',
            get_template_directory_uri() . '/books.css',
            array('photo-exhibition-style'), // load after main style
            wp_get_theme()->get('Version')
        );
    }

    // About page stylesheet (only loads on About page)
    if (is_page_template('page-about.php')) {
        wp_enqueue_style(
            'about-css',
            get_template_directory_uri() . '/about.css',
            array('photo-exhibition-style'), // load after main style
            wp_get_theme()->get('Version')
        );
    }
}
add_action('wp_enqueue_scripts', 'photo_exhibition_enqueue_styles');
