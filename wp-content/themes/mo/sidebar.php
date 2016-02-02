<?php
	$args = array(
		'post_type' => 'usefull-links'
	);

	$links = get_posts($args);

	$args = array(
		'post_type' => 'social-links'
	);

	$socials = get_posts($args);

	function check_link($id){
		$link = get_post_custom($id);

		if( ! array_key_exists('link', $link))
			return '#';
	}

?>

<div class="sidebar">
			
	<div class="sidebar_widget">
		
		<h3 class="sidebar_header">Полезные ссылки</h3>

		<div class="sidebar_content">

			<div class="sidebar_socials">
				<?php 
					foreach($socials as $social): 
					$link = check_link($social->ID)
				?>

					<a href="<?=$link?>">
						<span class="fa fa-<?=$social->post_title?>"></span>
					</a>

				<?php endforeach; ?>
			</div>
			
			<?php foreach($links as $link): ?>

				<?php 
					$src = wp_get_attachment_url( get_post_thumbnail_id($link->ID) );  
					$link = check_link($link->ID);
				?>

				<div class="sidebar_link"
				style="background-image:url(<?= $src ?>);">
					<a target="_blank" href="<?= $link ?>"></a>
				</div>

			<?php endforeach; ?>

		</div>

	</div>
		
</div>