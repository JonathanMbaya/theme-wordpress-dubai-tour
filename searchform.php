<?php
/**
 * The single template file
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage FIM_THEME
 * @since 1.0
 */
?>
					<form action="<?php echo home_url( '/' ); ?>" method="get">
						<div class="input-group mb-4">
							<input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" placeholder="votre recherche..." aria-label="votre recherche..">
							<div class="input-group-append">
							   <button class="btn btn-outline-secondary" type="submit" value="OK">GO</button>
							</div>
						</div>
					</form>