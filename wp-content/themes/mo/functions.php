<?php

add_theme_support( 'post-thumbnails' );

add_filter('show_admin_bar', '__return_false');

add_action('init', 'addScript');

function addScript(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js');
    wp_enqueue_script('jquery');

	wp_register_script('main-script', get_template_directory_uri() . '/js/script.js', ['jquery'], '1', true);
	wp_enqueue_script('main-script');
}