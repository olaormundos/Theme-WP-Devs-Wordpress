	<form role="search" method="get" id="searchform" class="searchform" action=" <?php esc_url( home_url( '/' ) ) ?> ">
		<div>
			<label class="screen-reader-text" for="s">Pesquisar por:</label>
			<input type="text" value="<?= get_search_query(); ?>" name="s" id="s">
			<input type="submit" id="searchsubmit" value="Pesquisar">
		</div>
	</form>