<?php
	$images = get_posts([
		'post_type' => 'slider'
	]);
?>

<div class="slider owl-carousel">

	<?php foreach($images as $image): ?>

		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($image->ID) )[0];  ?>

		<div class="slider_item"
		style="background-image:url(<?= $src ?>);"></div>

	<?php endforeach; ?>

</div>