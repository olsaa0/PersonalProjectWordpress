<?php
// Enqueue theme styles
function photo_exhibition_enqueue_styles() {

    
    wp_enqueue_style(
        'photo-exhibition-style',
        get_stylesheet_uri(),
        array(), 
        wp_get_theme()->get('Version') 
    );

    
    if (is_page_template('page-books.php')) {
        wp_enqueue_style(
            'books-css',
            get_template_directory_uri() . '/books.css',
            array('photo-exhibition-style'), 
            wp_get_theme()->get('Version')
        );
    }

    
    if (is_page_template('page-about.php')) {
        wp_enqueue_style(
            'about-css',
            get_template_directory_uri() . '/about.css',
            array('photo-exhibition-style'), 
            wp_get_theme()->get('Version')
        );
    }

    
    if (is_page_template('page-exhibition.php')) {
        wp_enqueue_style(
            'exhibition-css',
            get_template_directory_uri() . '/exhibition.css',
            array('photo-exhibition-style'), 
            wp_get_theme()->get('Version')
        );
    }
}
add_action('wp_enqueue_scripts', 'photo_exhibition_enqueue_styles');
