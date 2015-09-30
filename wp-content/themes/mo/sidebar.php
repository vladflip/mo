<?php
	$args = [
		'post_type' => 'usefull-links',
		'numberposts' => 0
	];

	$links = get_posts($args);

?>

<div class="sidebar">
			
	<div class="sidebar_widget">
		
		<h3 class="sidebar_header">Полезные ссылки</h3>

		<div class="sidebar_content">
			
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