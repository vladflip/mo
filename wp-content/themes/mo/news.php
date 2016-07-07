<?php 
	/*
		Template Name: news
	*/

	get_header();

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = [
		'posts_per_page' => '15',
		'post_type' => 'post',
		'paged' => $paged
	];

	query_posts($args);

	require_once('inc/posts.php'); 

	wp_pagenavi();

	get_footer(); 

?>