<?php

//show_admin_bar( false );

function wpb_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'wpb_theme_setup');

function set_excerpt_length() {
    return 20;
}
add_filter('excerpt_length', 'set_excerpt_length');

require_once('inc/class-wp-bootstrap-navwalker.php');