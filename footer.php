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

<?php
	$foundation_sidebars = array('foundation_footer_one','foundation_footer_two','foundation_footer_three','foundation_footer_four');
	$count = 0;
	/*
		Check to see how many columns the footer is required to support
		and unset inactive sidebars
	*/
	foreach($foundation_sidebars as $x=>$sidebar)
	{
		if(is_active_sidebar($sidebar)) {
			$count++;
		} else {
			unset($foundation_sidebars[$x]);
		}

	}
	/*
		Display active sidebars with the approprite column width
		The widgets in the sidebars stack in their column
	*/
	if($count){
		$col_width = 12/$count;
		foreach($foundation_sidebars as $sidebar)
		{
?>
		<div id="<?php echo $sidebar;?>" class="large-<?php echo $col_width;?> columns">
			<?php dynamic_sidebar($sidebar); ?>
		</div>
<?php
		}

	} else {
?>

<div class="large-12 columns">
	<ul class="inline-list">
	<?php wp_list_pages('title_li='); ?>
	</ul>
</div>

<?php } ?>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>
