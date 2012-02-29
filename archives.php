<?php 
/*
Template Name: Archives
*/

get_header();

?>

<!-- archives -->

<div class="eight columns">

<!-- Skip Nav -->
<a id="content"></a>

	<?php the_post(); ?>
	<h2 class="entry-title"><?php the_title(); ?></h2>
				
	<h4 class="subheader"><?php _e("Archives by Month:",'Foundation'); ?></h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
		
	<h4 class="subheader"><?php _e("Archives by Subject:",'Foundation'); ?></h4>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<!-- archives -->