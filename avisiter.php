<?php
/*
  Template Name: A Visiter
*/
	get_header();
?>

<div class="container col-md-12">
  <h1><?php the_title(); ?></h1>
</div>

<div class="container col-md-12">
  <?php the_content();?>
</div>
<div class="container col-md-12">
</div>


<div style="display: flex; justify-content: space-around;" class="container">
	<div class="row">
		<div class="col-md-7">
	     <?php
	      $id=174; // identifiant de la page
	      $post = get_post($id);
	      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
	      $content = apply_filters('the_content', $post->post_content);
	      echo $post_thumbnail;
	      ?>
	      <img style="background-color: #F1F0EA; border-radius: 20px 20px 20px 20px; width: 600px; height: 270px;" class="img-fluid" src=<?php the_post_thumbnail();?>
	  </div>

	  <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); border-radius: 20px 20px 20px 20px;" class="col-md-5">
	       <h4><?php the_title() ?></h4>
	        <p><?php the_content() ?></p>
	  </div>
	</div>
</div>


<div style="display: flex; justify-content: space-around;" class="container">
	<div class="row">
		<div class="col-md-7">
	     <?php
	      $id=178; // identifiant de la page
	      $post = get_post($id);
	      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
	      $content = apply_filters('the_content', $post->post_content);
	      echo $post_thumbnail;
	      ?>
	      <img style="background-color: #F1F0EA; border-radius: 20px 20px 20px 20px; width: 600px; height: 270px;" class="img-fluid" src=<?php the_post_thumbnail();?>
	  </div>

	  <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); border-radius: 20px 20px 20px 20px;" class="col-md-5">
	       <h4><?php the_title() ?></h4>
	        <p><?php the_content() ?></p>
	  </div>
	</div>
</div>









<?php get_footer(); ?>
