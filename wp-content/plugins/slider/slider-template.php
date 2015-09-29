<?php
	$args = [
		'post_type' => 'slider',
		'numberposts' => '0'
	];

	$images = get_posts($args);

?>

<div class="slider owl-carousel">

	<?php foreach($images as $image): ?>

		<?php $src = wp_get_attachment_url( get_post_thumbnail_id($image->ID) );  ?>

		<div class="slider_item"
		style="background-image:url(<?= $src ?>);"></div>

	<?php endforeach; ?>

</div>