<?php
/*
Template Name: Search page display results
*/

get_header();
?>
    <!-- SUBMENU H1 -->
	<div class="container-fluid p-0 mt-4 text-center submenu">
		<h1><?php if ( !is_search() ) { the_title(); } else { printf(esc_html__('Résultats de la recherche : %s'), ' '. get_search_query() ); } ?></h1>
	</div>
	<!-- IMG + H1 END -->
	
    <!-- PAGE CONTENT -->
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col mb-4">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
			<p><a class="text-secondary" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
			<?php
			endwhile; else:
				echo 'Désolé, aucun résultat pour cette recherche ! Effectuez une nouvelle recherche : <br>';
                get_search_form();
			endif;
			?>
            </div>
        </div>
    </div>
	<!-- PAGE CONTENT END -->
<?php
	get_template_part( 'template-parts/content-banner' );
get_footer();