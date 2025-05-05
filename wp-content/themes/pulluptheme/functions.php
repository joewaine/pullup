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

