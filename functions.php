<?php

function grewai_hp_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
        )
    );
}
add_action('after_setup_theme', 'grewai_hp_setup');

function grewai_hp_assets() {
    wp_enqueue_style('grewai-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'grewai_hp_assets');

?>
