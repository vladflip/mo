<?php
/*
	Plugin Name: Slider
	Description: Плагин для управления слайдером на главной странице.
	Author: vladflip
	Author URI: vk.com/vlad.flip
*/
function load_scripts_and_styles() {

    wp_register_script('owl.carousel.script', plugins_url('owl.carousel.min.js', __FILE__), [], '', true);
    wp_register_script('slider-script', plugins_url('script.js', __FILE__), ['owl.carousel.script'], '', true);

    wp_enqueue_script('slider-script');

    wp_register_style('owl.carousel.style', plugins_url('owl.carousel.css', __FILE__));
    wp_enqueue_style('owl.carousel.style');
        
}

function create_slider_images() {

    register_post_type( 'slider',
        array(
            'label' => 'Slider',
            'public' => true,
            'menu_position' => 15,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array( 'title', 'thumbnail' )
        )
    );
}

add_action('init', 'create_slider_images');

add_action('wp_print_scripts', 'load_scripts_and_styles');

function slider() {
	include 'slider-template.php';
}
	
add_shortcode('slider', 'slider');
