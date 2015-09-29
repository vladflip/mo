<?php
	$posts = get_posts();

	// var_dump($posts);
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
						<div class="post_date">
							<?= getTheDate($post->ID); ?>
						</div>

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

				</div>

			<?php endforeach; ?>
		
		</div>
		
		<div class="sidebar">
			
			
		
		</div>
	</div>

</div>