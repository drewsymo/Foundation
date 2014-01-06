<?php
/**
 * Searchform
 *
 * Custom template for search form
 *
 * @package WordPress
 * @subpackage Foundation 5, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row">
		<div class="large-12 columns">
			<div class="row collapse">
				<div class="large-8 mobile-three columns">
					<input type="text" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'foundation' ); ?>" />
				</div>
				<div class="large-4 mobile-one columns">
					<input type="submit" class="button prefix" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'foundation' ); ?>" />
				</div>
			</div>
		</div>
	</div>
</form>
