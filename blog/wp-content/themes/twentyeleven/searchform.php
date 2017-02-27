<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( '', 'twentyeleven' ); ?>" />
		 <input type="submit" class="search_image" />
	</form>
