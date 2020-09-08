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

	<?php 
		$testCase = get_field('use_subhero_section'); 
		$secondTest = get_field('use_microfooter');
		if ( $testCase == "yes" ) {
	?>
	<!-- subhero section -->
	<section>
		<div class="container pb-5">
			<div class="row align-items-center col-spacing-50">
				<div class="col-12 col-lg-4">
				<?php 
					$subheroImage = $image = get_field('subhero_image');
				?>
					<img src="<?php print $subheroImage['url']; ?>" alt="<?php print $subheroImage['alt']; ?>" title="<?php print $subheroImage['title']; ?>"><!-- Image source -->
				</div>
				<div class="col-12 col-lg-8">
					<h6 class="font-family-tertiary font-small font-weight-normal uppercase"><?php the_field('micro_title'); ?></h6>
					<h3><?php the_field('subhero_title'); ?></h3>
					<p><? the_field('subhero_content'); ?></p>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end subhero section -->
	<?php } ?>

	<?php
		if ( $secondTest == "yes" ) {
	?>
	<!-- microfooter content -->
	<section>
	<div class="container pb-5">
		<h3><?php the_field('microfooter_title'); ?></h3>
		<p><?php the_field('microfooter_content'); ?></p>
	</div>
	</section>
	<!-- end microfooter content -->
	<?php } ?>

<?php get_footer(); ?>
