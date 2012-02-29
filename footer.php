	</div>
	<!-- Main Row -->
	
	<!-- Footer -->
	<footer class="row">
	
		<div class="twelve columns"><hr></div>
	
			<div class="row">
			
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
					<li><h4><?php _e('Hey! You!', 'Foundation') ?></h4></li>
					<li><?php _e('You should like, so test out this dynamic sidebar. Check it out in Appearance > Widgets!', 'Foundation') ?></li>
					<?php endif; ?>
				
			</div>
			<div class="row">
				<div class="six columns">
					<p>&#169; Copyright <?php the_date('Y'); ?> <?php bloginfo('name') ?></p>
				</div>
			</div>
	</footer>
	<!-- Footer -->

	</div>
	<!-- container -->

	<!-- Included JS Files -->	
	<script src="<?php bloginfo('template_url'); ?>/javascripts/foundation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/orbit-1.3.0.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/app.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/fitvids.js"></script>
	<script>
		$(document).ready(function(){
		    // Target your .container, .wrapper, .post, etc.
		    $(".entry").fitVids();
		});
	</script>
	<?php wp_footer(); ?>
	
</body>
</html>