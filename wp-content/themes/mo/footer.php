<?php
	$args = array(
		'post_type' => 'social-links'
	);

	$socials = get_posts($args);
?>	
		<div class="footer">
			<div class="container">
				<div class="footer_top">
					<div class="footer_logo"></div>
					<div class="footer_instagram">
						<h3 class="footer_title">Instagram</h3>
						<ul class="footer_insta-list">
							<li>
								<a href="">
									<img src="" alt="">
								</a>
							</li>
							<li>
								<a href="">
									<img src="" alt="">
								</a>
							</li>
							<li>
								<a href="">
									<img src="" alt="">
								</a>
							</li>
							<li>
								<a href="">
									<img src="" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer_bottom">
					<div class="footer_copyrights">
						© 2016 Молодежная Организация ХНЕУ им. Семена Кузнеца
					</div>
					<div class="footer_socials">
						<?php 
							foreach($socials as $social): 
							$link = check_link($social->ID)
						?>
				
							<a href="<?=$link?>">
								<span class="fa fa-<?=$social->post_title?>"></span>
							</a>
				
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<?php wp_footer(); ?>

	</body>

</html>	