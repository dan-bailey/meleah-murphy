<?php get_header(); ?>

	<div class="section-sm bg-primary">
		<div class="container text-center">
			<h3 class="font-family-secondary" style="color: white;">The Power of PT</h3>
		</div><!-- end container -->
	</div>

		<!-- Blog Posts -->
		<div class="section">
			<div class="container">
				<div class="masonry masonry-column-3 masonry-spacing-40">
				<?php get_template_part('loop'); ?>
				</div><!-- end masonry -->	
			</div>
		</div>	

<?php get_footer(); ?>
