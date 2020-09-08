<?php get_header(); ?>

	<?php
		if( has_post_thumbnail() ) {
			$urlFeaturedImage = get_the_post_thumbnail_url();
		}
	?>

	<div class="section-xl bg-image parallax" data-bg-src="<?php print $urlFeaturedImage; ?>">
		<div class="bg-black-03">
			<div class="container text-center">
				<h1 class="font-weight-light margin-0"><?php the_title(); ?></h1>
			</div><!-- end container -->
		</div>
	</div>	

	<section>
	<div class="container pt-5 pb-5 pagecontent">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php the_content(); ?>			

	<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	

	<?php endif; ?>
	</div>
	</section>

<?php get_footer(); ?>