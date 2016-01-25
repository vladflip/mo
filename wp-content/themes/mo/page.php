<?php get_header(); ?>

<div class="page">
	<div class="container">
		
		<div class="page_content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?> 
		</div>

		<?php get_sidebar('sidebar'); ?>

	</div>
</div>

<?php get_footer(); ?>