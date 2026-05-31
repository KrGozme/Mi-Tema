<?php
function enqueue_styles() {
    wp_enqueue_style(
        'public-css',
        get_template_directory_uri() . '/public/css/atr-public.css',
        array(),
        '1.0.0',
        'all'
    );
    //Libreria de bootstrap
    wp_enqueue_style(
        'bootstrap-css',
        get_template_directory_uri() . '/helpers/bootstrap-5.3.8/css/bootstrap.min.css',
        [],
        '5.3.8',
        'all'
    );

    wp_enqueue_style(
        'normalize',
        get_template_directory_uri() . '/public/css/normalize.css',
        array(),
        '8.0.1',
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


function enqueue_scripts() {
    wp_enqueue_script(
        'public-js',
        get_template_directory_uri() . '/public/js/atr-public.js',
        ['jquery', 'bootstrap-min'],
        '1.0.0',
        true
    );
    //Encolando libreria de bootstrap
    wp_enqueue_script(
        'bootstrap-min',
        get_template_directory_uri() . '/helpers/bootstrap-5.3.8/js/bootstrap.min.js',
        ['jquery'],
        '5.3.8',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );