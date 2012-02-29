<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"><?php _e('Search for:', 'Foundation') ?></label>
        <input type="search" results="5" placeholder="<?php _e('Search', 'Foundation') ?>" name="s" id="s" />
    </div>
</form>