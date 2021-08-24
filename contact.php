<?php
/*
  Template Name: Contact
*/
	get_header();
?>
			<h1><?php the_title(); ?></h1>

<div class="justify-content-center">
	<div class="col-md-4  container">
		<?php echo do_shortcode( '[contact-form-7 id="218" title="Contact form 1"]' ); ?>
	</div>
</div>


<?php get_footer(); ?>
