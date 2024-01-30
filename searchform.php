	<form role="search" method="get" id="searchform" class="searchform" action=" <?php esc_url( home_url( '/' ) ) ?> ">
		<div>
			<label class="screen-reader-text" for="s"><?php _e( 'Search for...', 'wp-devs' ) ?>:</label>
			<input type="text" value="<?= get_search_query(); ?>" name="s" id="s">
			<input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'wp-devs' ) ?>">
		</div>
	</form>