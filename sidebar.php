<!-- sidebar -->
<aside class="four columns">

	<ul>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?>
		<li><h4><?php _e('Hey! You!', 'Foundation') ?></h4></li>
		<li><?php _e('You should like, so test out this dynamic sidebar. Check it out in Appearance > Widgets!', 'Foundation') ?></li>
		<?php endif; ?>
	</ul>

</aside>
<!-- sidebar -->
