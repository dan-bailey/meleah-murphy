<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- Masonry Item -->
	<div class="masonry-item">
		<div class="hoverbox-9 margin-bottom-20">
		<a href="<?php the_permalink(); ?>">
			<?php $urlImage = get_the_post_thumbnail_url(); ?>
			<img src="<?php echo $urlImage;?>" alt="">
			<div class="content bg-black-04">
				<span class="font-family-tertiary font-small font-weight-normal uppercase text-white"><?php the_date('F j'); ?></span>
			</div>
		</a>
		</div>
		<h5 class="font-weight-normal"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		<p><?php the_excerpt(); ?></p>
	</div>

	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
