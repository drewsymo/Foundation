<?php get_header(); ?>
	
	<div class="twelve columns centered">
	<div class="alert-box error">404!</div>
	<h1>!@!#@$@@!!</h1>  
	<p><?php _e("404\'s are such a lovely thing. But you know, I'm not going to leave you stranded.",'foundation'); ?></p>
	<p><?php _e("Why don't you try a search?",'foundation'); ?></p>
	
	<?php get_search_form(); ?>
	
	<a href="<?php echo home_url( '/' ); ?>">&larr; <?php _e("Go Home?",'Foundation'); ?></a>

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>