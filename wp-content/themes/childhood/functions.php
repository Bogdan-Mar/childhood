<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
    wp_enqueue_script( 'childhood-script', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};

add_theme_support( 'custom-logo' );


/*
add_action('wp_enqueue_scripts', 'childhood_style');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_style() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
};

function childhood_scripts() {
    wp_enqueue_script( 'childhood-script', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};*/

?>