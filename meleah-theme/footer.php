<footer>
			<div class="section bg-dark">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-md-6 text-center text-md-left">
							<ul class="list-inline-dash">
								<?php 
									$fLine = get_field('footer_line', 'option');
									print $fLine;
								?>
							</ul>
							<p class="margin-top-10">&copy; 2020 by Meleah Murphy, all rights reserved. Web development by <a href="https://www.danbailey.dev" target="_blank">Dan Bailey</a>.</p>
						</div>
						<div class="col-12 col-md-6 text-center text-md-right">
							<ul class="list-inline-sm icon-sm">
								<li>
									<a class="button-circle button-circle-sm button-circle-outline-white button-circle-hover-slide" href="<?php print (get_field('facebook_link', 'option')); ?>">
										<i class="fab fa-facebook-f"></i>
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a class="button-circle button-circle-sm button-circle-outline-white button-circle-hover-slide" href="<?php print (get_field('twitter_link', 'option')); ?>">
										<i class="fab fa-twitter"></i>
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a class="button-circle button-circle-sm button-circle-outline-white button-circle-hover-slide" href="<?php print (get_field('instagram_link', 'option')); ?>">
										<i class="fab fa-instagram"></i>
										<i class="fab fa-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
		</footer>

		<!-- Scroll to top button -->
		<div class="scrolltotop">
			<a class="button-circle button-circle-sm button-circle-dark" href="#"><i class="ti-arrow-up"></i></a>
		</div>
		<!-- end Scroll to top button -->

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="<?php echo get_template_directory_uri(); ?>/plugins/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/plugins/plugins.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
		
		<!-- ***** ERROR TRAP ***** -->
		<!--
		<?php
		if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
			print "The Bootstrap Navwalker class file is missing.";	
		} else {
			print "The Bootstrap Navwalker class file is present.";
		}
		?>
		-->
	</body>
</html>
