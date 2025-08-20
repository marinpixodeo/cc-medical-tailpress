<?php
/**
 * CC Medical Theme Functions
 * WordPress theme with Tailwind CSS v4
 */


 define('THEME_URL', get_template_directory_uri().'/resources/');
 
// Enqueue theme styles
function cc_medical_enqueue_styles() {
    wp_enqueue_style(
        'cc-medical-tailwind', 
        get_template_directory_uri() . '/dist/style.css', 
        [], 
        filemtime(get_template_directory() . '/dist/style.css')
    );
}
add_action('wp_enqueue_scripts', 'cc_medical_enqueue_styles');

// Add theme support
function cc_medical_theme_support() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for title tag
    add_theme_support('title-tag');
    
    // Add support for HTML5 elements
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ));
}
add_action('after_setup_theme', 'cc_medical_theme_support');
