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
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.4/dist/aos.css', array(), '2.3.4' );
    wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.4/dist/aos.js', array(), '2.3.4', true );
    wp_enqueue_script( 'cc-medical-js', get_template_directory_uri() . '/resources/js/app.js', array(), '2.3.4', true );
    wp_add_inline_script( 'aos-js', 'AOS.init();' );
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

// Contact Form 7 customizations
function cc_medical_cf7_enqueue_styles() {
    if (function_exists('wpcf7_plugin_url')) {
        wp_enqueue_style(
            'cc-medical-cf7-custom',
            get_template_directory_uri() . '/resources/css/custom.css',
            [],
            filemtime(get_template_directory() . '/resources/css/custom.css')
        );
    }
}
add_action('wp_enqueue_scripts', 'cc_medical_cf7_enqueue_styles');
