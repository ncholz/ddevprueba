<?php
function tt4_child_enqueue_styles() {
    wp_enqueue_style(
        'tt4-child-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'tt4_child_enqueue_styles');