<?php

add_theme_support( 'post-thumbnails' );

add_filter('show_admin_bar', '__return_false');

add_action('init', 'addScript');

function addScript(){
	
	if( ! is_admin() ){
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js');
		wp_enqueue_script('jquery');
	}
	
	wp_register_script('main-script', get_template_directory_uri() . '/js/script.js', ['jquery'], '1', true);
	wp_enqueue_script('main-script');
}

function getThumbSrc($id) {

	return wp_get_attachment_url( get_post_thumbnail_id($id) );

}

function getTheDate($id) {

	$date = get_the_date('j n', $id);

	$date = explode(' ', $date);

	$day = $date[0];
	$month = $date[1];

	$months = [
		'Января',
		'Февраля',
		'Марта',
		'Апреля',
		'Мая',
		'Июня',
		'Июля',
		'Августа',
		'Сентября',
		'Октября',
		'Ноября',
		'Декабря'
	];

	$dayFormatted = '<span class="post_date--large">' . $day . '</span>';

	return $dayFormatted . ' ' . $months[$month-1];
}