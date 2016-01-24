<?php
	function br2nl( $input ) {
		return preg_replace('/<br(\s+)?\/?>/i', "\n", $input);
	}
?>

<?php get_header(); ?>

<div class="page">
	<div class="container">
		
		<div class="page_content">
			<?php echo nl2br($post->post_content); ?>
		</div>

		<?php get_sidebar('sidebar'); ?>

	</div>
</div>

<?php get_footer(); ?>