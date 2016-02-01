<?php
	$args = array(
		'theme_location' => 'header_menu',
		'container' => false,
		'menu_id' => '',
		'menu_class' => 'menu_list'

	);
?>

<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="UTF-8">
		<title>Молодежная организация | ХНЭУ</title>
		<link rel="shortcut icon" href="<?=THEME_URI?>/img/favicon.png" type="image/x-icon">
		<?php wp_enqueue_style('main-style'); ?>
		<?php wp_head(); ?>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>

	<body>
		
		<div class="header">

			<div class="header_logo">
				<div id="header-logo" class="header_logo-item"></div>
			</div>

			<div id="menu" class="menu">
				<div class="container">

					<?php wp_nav_menu($args); ?>

				</div>
			</div>

		</div>