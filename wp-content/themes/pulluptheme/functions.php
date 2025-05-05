<?php
// Enqueue stylesheets and scripts
function my_blank_theme_enqueue_styles() {
    wp_enqueue_style( 'my-blank-theme-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'my_blank_theme_enqueue_styles' );

// Add theme support for title tag and other features
function my_blank_theme_setup() {
    add_theme_support( 'title-tag' );  // Allows WordPress to manage the <title> tag
    add_theme_support( 'post-thumbnails' );  // Allows featured images for posts
}

add_action( 'after_setup_theme', 'my_blank_theme_setup' );





function register_artist_post_type() {
    register_post_type('artist', array(
        'labels' => array(
            'name' => __('Artists'),
            'singular_name' => __('Artist'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'artists'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true
    ));
}
add_action('init', 'register_artist_post_type');
