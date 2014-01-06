<?php
/**
 * Author Box
 *
 * Displays author box with author description and thumbnail on single posts
 *
 * @package WordPress
 * @subpackage Foundation 5, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<?php if ( get_the_author_meta('description') ) : ?>


<section class="row">
	<div class="large-12 columns">

		<div class="panel author-box">
			<a href="<?php get_the_author_meta('url'); ?>"><?php echo get_avatar( get_the_author_meta('user_email'),'60' ); ?></a>
			<h5><?php _e('About', 'foundation' ); ?> <?php the_author_link(); ?></h5>
			<p>
				<?php echo get_the_author_meta('description'); ?>
			</p>
		</div>
		
	</div>
</section>

<?php endif; ?>
