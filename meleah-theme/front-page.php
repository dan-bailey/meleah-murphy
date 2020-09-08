<?php get_header(); ?>

		<!-- Hero section -->
		<div class="section-2xl bg-image parallax" data-bg-src="<?php echo get_template_directory_uri(); ?>/img/running-573762_1920.jpg">
			<div class="bg-black-02">
				<div class="container text-center">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							<img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/full_logo_white_2.svg" />
							<p class="jumbotron-tagline"><?php the_field('site_tagline'); ?></p>
							<a class="button button-lg button-radius button-dark margin-top-30" href="<?php the_field('button_link'); ?>"><?php the_field('button_label'); ?></a>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
		</div>
		<!-- end Hero section -->

		<!-- Subhero section -->
		<div id="about" class="section border-top">
			<div class="container">
				<div class="row align-items-center col-spacing-50">
					<div class="col-12 col-lg-6">
						<img class="box-shadow" src="<?php the_field('subhero_image'); ?>" alt="">
					</div>
					<div class="col-12 col-lg-6">
						<h2 class="font-weight-normal line-height-160"><?php the_field('subhero_title'); ?></h2>
						<p><?php the_field('subhero_text'); ?></p>
						<a class="button button-lg button-radius button-outline-dark margin-top-30" href="<?php the_field('subhero_button_link'); ?>"><?php the_field('subhero_button_label'); ?></a>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
		<!-- end Subhero section -->

		<!-- Services section -->
		<div class="section padding-top-0">
			<div class="container">
				<div class="row">
					<!-- Icon text box 1 -->
					<div class="col-12 col-md-4">
						<h5 class="font-weight-normal margin-top-20"><?php the_field('block_1_symbol'); ?> <?php the_field('block_1_title'); ?></h5>
						<p><?php the_field('block_1_text'); ?></p>
					</div>
					<!-- Icon text box 2 -->
					<div class="col-12 col-md-4">
					<h5 class="font-weight-normal margin-top-20"><?php the_field('block_2_symbol'); ?> <?php the_field('block_2_title'); ?></h5>
						<p><?php the_field('block_2_text'); ?></p>
					</div>
					<!-- Icon text box 3 -->
					<div class="col-12 col-md-4">
					<h5 class="font-weight-normal margin-top-20"><?php the_field('block_3_symbol'); ?> <?php the_field('block_3_title'); ?></h5>
						<p><?php the_field('block_3_text'); ?></p>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
		<!-- end Services section -->

		<!-- Testimonial section -->
		<div class="section bg-dark-lighter">
			<div class="container">
				<div class="margin-bottom-50 text-center">
					<h6 class="font-family-tertiary font-small font-weight-normal uppercase">What People Say</h6>
				</div>
				<div class="owl-carousel" data-owl-nav="true" data-owl-margin="30" data-owl-xs="1" data-owl-sm="1" data-owl-md="1" data-owl-lg="2" data-owl-xl="2">
				
					<?php
						$args = array(
							'post_type' => 'testimonial',
							'posts_per_page' => 4,
							'orderby' => 'rand',
						);

						$loop = new WP_Query( $args );
						
						while ( $loop->have_posts() ) : $loop->the_post(); 
							
							$clientIcon = get_field('client_icon');
							$clientName = get_field('client_name');
							$clientRole = get_field('client_role');
							$clientTestimonial = get_field('testimonial'); ?>						

					<div class="border-all border-radius padding-40">
						<div class="d-flex align-items-center margin-bottom-20">
							<div class="d-inline-block margin-right-20">
							<i class="fas <?php print $clientIcon; ?> fa-3x"></i>
							</div>
							<div class="d-inline-block">
								<h5 class="font-weight-normal margin-0 line-height-130"><?php print $clientName; ?></h5>
								<span class="font-small"><?php print $clientRole; ?></span>
							</div>
						</div>
						<p>"<?php print $clientTestimonial; ?>"</p>
					</div>

					<?php 
						
						endwhile;
						wp_reset_postdata(); 

					?>
					
				</div><!-- end owl-carousel -->
			</div><!-- end row -->
		</div>
		<!-- end Testimonial section -->
<?php get_footer(); ?>
