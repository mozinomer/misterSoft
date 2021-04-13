<footer>
	<div class="container">
		<div class="innerFooterContainer">
			<div class="row">
				<div class="col-md-3">
					<div class="leftCOntainerFooeoris">
						<div class="logoContainerFooter">
							<img src="<?php the_field('logo_footer','options'); ?>">
						</div>
						<p>
							<?php the_field('text_under_logo','options'); ?>
						</p>
						<ul>
							<li><a href="<?php the_field('facebook','options'); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php the_field('twitter','options'); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php the_field('instagram','options'); ?>"><i class="fa fa-instagram"></i></a></li>
							<li><a href="<?php the_field('linkedin','options'); ?>"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="menuContainerFooter">
						<div class="innerMenuCOntianerFOoter">
							<h6>Quick Links</h6>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
						</div>
						<div class="innerMenuCOntianerFOoter">
							<h6>Social Media</h6>
							<ul>
								<li><a href="<?php the_field('facebook','options'); ?>">Facebook</a></li>
								<li><a href="<?php the_field('twitter','options'); ?>">Twitter</a></li>
								<li><a href="<?php the_field('instagram','options'); ?>">Instagram</a></li>
								<li><a href="<?php the_field('linkedin','options'); ?>">Youtube</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="contentContainerFooter">
						<p><?php the_field('call_us_text','options'); ?></p>
						<a href="#" class="bookNow">BOOK NOW</a>
					</div>
				</div>
			</div>
		</div>
		<div class="copyRIghts">
			<p>© <?php the_field('copy_right_line','options'); ?></p>
			<ul>
				<li><a href="<?php echo site_url(); ?>/terms-and-condition">Terms & Conditions | </a></li>
				<li><a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a></li>
			</ul>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/shh.js"></script>

</html>