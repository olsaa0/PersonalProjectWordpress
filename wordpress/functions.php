<?php
function mytheme_setup() {
    register_nav_menu('main_menu', 'Main Menu');
}
add_action('after_setup_theme', 'mytheme_setup');
