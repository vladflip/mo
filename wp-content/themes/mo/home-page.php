<?php
	$args = [
		'posts_per_page' => 6
	];

	$posts = get_posts($args);
?>

<div class="home">
		
	<div class="container">
		
		<div class="home_posts">

			<?php foreach ($posts as $post): ?>
			
				<div class="post">
					
					<div class="post_thumbnail">
						<img src="<?= getThumbSrc($post->ID)?>" alt="">
					</div>

					<div class="post_header">
						<div class="post_title">
							<a href="<?= get_permalink($post->ID); ?>">
								<?= $post->post_title ?>
							</a>
						</div>
					</div>

					<div class="post_excerpt">
						<?= $post->post_excerpt; ?>
					</div>

					<div class="post_button">
						<a href="<?= get_permalink($post->ID); ?>">читать</a>
					</div>

					<div class="post_footer">
						<div class="post_date">
							<?= getTheDate($post->ID); ?>
						</div>
						<div class="post_share">
							<script type="text/javascript">
							<?php $link = get_permalink();?>
							document.write(VK.Share.button({url: "<?=$link?>"},{type: "custom", text: "<img src=\"http://vk.com/images/share_32_eng.png\" width=\"32\" height=\"32\" title=\"Поделиться\" />", eng: 1}));
							</script>
						</div>
					</div>

				</div>

			<?php endforeach; ?>

			<?php if(is_page('news')) : ?>
				
			<?php else: ?>
				<div class="home_more-posts">
					<a href="<?=site_url();?>/news">Остальные новости</a>
				</div>
			<?php endif; ?>
		
		</div>
		
		<?php get_sidebar('sidebar'); ?>

	</div>

</div>