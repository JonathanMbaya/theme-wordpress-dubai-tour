<?php
/*
  Template Name: Hotel
*/
	get_header();
?>

<!--Galerie Hôtels Luxe-->
							 <div class="container">
							   <div class="row" >
							           <h3>Hôtels de luxe</h3>
							 <div class="col-md-3">

							   <?php
							   $id=26; // identifiant de la page
							   $post = get_post($id);
							   $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
							   $content = apply_filters('the_content', $post->post_content);
							   echo $post_thumbnail;
							   ?>

							   <a href="<?php the_permalink(); ?>"class="post__link">
							     <img class="img-fluid" src=<?php the_post_thumbnail();?>
							   </a>
								 <h4><?php the_title() ?></h4>
							 </div>

							 <div class="col-md-3">

							   <?php
							   $id=74; // identifiant de la page
							   $post = get_post($id);
							   $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
							   $content = apply_filters('the_content', $post->post_content);
							   echo $post_thumbnail;
							   ?>

							   <a href="<?php the_permalink(); ?>"class="post__link">
							     <img class="img-fluid" src=<?php the_post_thumbnail();?>
							   </a>
								 <h4><?php the_title() ?></h4>

							 </div>

							 <div class="col-md-3">

							   <?php
							   $id=79; // identifiant de la page
							   $post = get_post($id);
							   $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
							   $content = apply_filters('the_content', $post->post_content);
							   echo $post_thumbnail;
							   ?>

							   <a href="<?php the_permalink(); ?>"class="post__link">
							     <img class="img-fluid" src=<?php the_post_thumbnail();?>
							   </a>
								 <h4><?php the_title() ?></h4>
							 </div>

							 <div class="col-md-3">

								 <?php
								 $id=83; // identifiant de la page
								 $post = get_post($id);
								 $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
								 $content = apply_filters('the_content', $post->post_content);
								 echo $post_thumbnail;
								 ?>

								 <a href="<?php the_permalink(); ?>"class="post__link">
									 <img class="img-fluid" src=<?php the_post_thumbnail();?>
								 </a>
								 <h4><?php the_title() ?></h4>
							 </div>
							 </div>
							 </div>
<!--Galerie Hôtels Luxe-->

<!--Galerie Hôtels Luxe-->
							 <div class="container">
							   <div class="row" >
							           <h3>Hôtels abordables</h3>
							 <div class="col-md-3">

							   <?php
							   $id=26; // identifiant de la page
							   $post = get_post($id);
							   $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
							   $content = apply_filters('the_content', $post->post_content);
							   echo $post_thumbnail;
							   ?>

							   <a href="<?php the_permalink(); ?>"class="post__link">
							     <img class="img-fluid" src=<?php the_post_thumbnail();?>
							   </a>
								 <h4><?php the_title() ?></h4>

							 </div>

							 <div class="col-md-3">

							   <?php
							   $id=74; // identifiant de la page
							   $post = get_post($id);
							   $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
							   $content = apply_filters('the_content', $post->post_content);
							   echo $post_thumbnail;
							   ?>

							   <a href="<?php the_permalink(); ?>"class="post__link">
							     <img class="img-fluid" src=<?php the_post_thumbnail();?>
							   </a>
								 <h4><?php the_title() ?></h4>

							 </div>

							 <div class="col-md-3">

							   <?php
							   $id=79; // identifiant de la page
							   $post = get_post($id);
							   $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
							   $content = apply_filters('the_content', $post->post_content);
							   echo $post_thumbnail;
							   ?>

							   <a href="<?php the_permalink(); ?>"class="post__link">
							     <img class="img-fluid" src=<?php the_post_thumbnail();?>
							   </a>
								 <h4><?php the_title() ?></h4>
							 </div>

							 <div class="col-md-3">

								 <?php
								 $id=83; // identifiant de la page
								 $post = get_post($id);
								 $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
								 $content = apply_filters('the_content', $post->post_content);
								 echo $post_thumbnail;
								 ?>

								 <a href="<?php the_permalink(); ?>"class="post__link">
									 <img class="img-fluid" src=<?php the_post_thumbnail();?>
								 </a>
								 <h4><?php the_title() ?></h4>

							 </div>
							 </div>
							 </div>
<!--Galerie Hôtels Luxe-->




<?php get_footer(); ?>
