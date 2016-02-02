<?php
	$args = array(
		'post_type' => 'usefull-links'
	);

	$links = get_posts($args);

	$args = array(
		'post_type' => 'social-links'
	);

	$socials = get_posts($args);

?>

<div class="sidebar">
			
	<div class="sidebar_widget">
		
		<h3 class="sidebar_header">Полезные ссылки</h3>

		<div class="sidebar_content">

			<div class="sidebar_socials">
				<?php foreach($socials as $social): ?>
					<a href="<?=get_post_custom($social->ID)['link'][0]?>">
						<span class="fa fa-<?=$social->post_title?>"></span>
					</a>
				<?php endforeach; ?>
			</div>
			
			<?php foreach($links as $link): ?>

				<?php $src = wp_get_attachment_url( get_post_thumbnail_id($link->ID) );  ?>

				<div class="sidebar_link"
				style="background-image:url(<?= $src ?>);">
					<a target="_blank" href="<?= get_post_custom($link->ID)['link'][0] ?>"></a>
				</div>

			<?php endforeach; ?>

		</div>

	</div>
		
</div>