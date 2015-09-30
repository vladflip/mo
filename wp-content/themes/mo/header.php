<?php
	$args = array(
		'theme_location' => 'header_menu',
		'container' => false,
		'menu_id' => '',
		'menu_class' => 'header_menu-item'

	);
?>

<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="UTF-8">
		<title>Молодежная организация | ХНЭУ</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
		<?php wp_head(); ?>
	</head>

	<body>
		
		<div class="header">
			
			<!-- <div class="header_top">
				
				<div class="container">
					
					<ul class="header_links">
						<li>
							<a href="#"><span class="fa fa-facebook"></span></a>
						</li>
						<li>
							<a href="#"><span class="fa fa-vk"></span></a>
						</li>
						<li>
							<a href="#"><span class="fa fa-instagram"></span></a>
						</li>
					</ul>

				</div>

			</div> -->

			<div class="header_logo"></div>

			<div id="header-menu" class="header_menu">
				<div class="container">

					<?php wp_nav_menu($args); ?>
					
					<!-- <ul class="header_menu-item">
						<li>
							<a href="#">Главная</a>
						</li>
						<li>
							<a href="#">Новости</a>
						</li>
						<li>
							<a href="#">О нас</a>
						</li>
						<li>
							<a href="#">Мероприятия</a>
						</li>
						<li>
							<a href="#">Контакты</a>
						</li>
					</ul> -->

				</div>
			</div>

		</div>