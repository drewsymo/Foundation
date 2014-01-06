<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation 5, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

</div>
<!-- End Page -->

<!-- Footer -->
<footer class="row">

<?php if ( dynamic_sidebar('Footer Column #1') || dynamic_sidebar('Footer Column #2') || dynamic_sidebar('Footer Column #3') || dynamic_sidebar('Footer Column #4')  ) : else : ?>

<div class="large-12 columns">
	<ul class="inline-list">
	<?php wp_list_pages('title_li='); ?>
	</ul>
</div>

<?php endif; ?>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>
