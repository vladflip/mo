<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('show_admin_bar', '__return_false');

add_action('init', 'addScripts');

add_action('init', 'usefull_links');

add_action('init', 'registerMenu');

function change_submenu_class($menu) {  
	$menu = preg_replace('/ class="sub-menu"/','/ class="menu_sub" /',$menu);  
	return $menu;  
}

add_filter('wp_nav_menu','change_submenu_class');  

function registerMenu() {
	$args = array('header_menu' => __('Главное меню'));
	register_nav_menus($args);
}

function usefull_links() {

	register_post_type( 'usefull-links',
		array(
			'label' => 'Ссылки',
			'public' => true,
			'menu_position' => 15,
			'menu_icon' => 'dashicons-images-alt',
			'supports' => array( 'title', 'custom-fields', 'thumbnail')
		)
	);

}

function addScripts(){

	wp_enqueue_script('stickyjs', get_template_directory_uri() . '/js/vendor/jquery.sticky.js', array('jquery'), '1', true);

	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array(
		'jquery',
		'stickyjs'
	), '1', true);
}

function getThumbSrc($id) {

	return wp_get_attachment_url( get_post_thumbnail_id($id) );

}

function getTheDate($id) {

	$date = get_the_date('j n', $id);

	$date = explode(' ', $date);

	$day = $date[0];
	$month = $date[1];

	$months = array(
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
	);

	$dayFormatted = '<span class="post_date--large">' . $day . '</span>';

	return $dayFormatted . ' ' . $months[$month-1];
}