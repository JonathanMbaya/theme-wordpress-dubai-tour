<?php
/*
  Template Name: Partir demain
*/
	get_header();
?>

<h1><?php the_title(); ?></h1>

<div style="display: flex; justify-content: space-between;" class="container">
	<div class="row">
		<div class="col-md-3">
	    <div style="background-color: #F1F0EA; padding: 10px; border-radius: 20px 20px 0px 0px; text-align: center; margin-right: 5px;" class="info">
	      <?php
	      $id=95; // identifiant de la page
	      $post = get_post($id);
	      $content = apply_filters('the_content', $post->post_content);
	      echo $content;
	      ?>
	       </div>
	       <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; margin-right: 5px;" class="info">
	        <h4><?php the_title() ?></h4>
	       </div>
	  </div>


	  <div class="col-md-3">
	    <div style="background-color: #F1F0EA; padding: 10px; border-radius: 20px 20px 0px 0px; text-align: center; margin-right: 5px;" class="info">
	      <?php
	      $id=101; // identifiant de la page
	      $post = get_post($id);
	      $content = apply_filters('the_content', $post->post_content);
	      echo $content;
	      ?>
	       </div>
	       <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; margin-right: 5px;" class="info">
	        <h4><?php the_title() ?></h4>
	       </div>
	  </div>

	  <div class="col-md-3">
	    <div style="background-color: #F1F0EA; padding: 10px; border-radius: 20px 20px 0px 0px; text-align: center; margin-right: 5px;" class="info">
	      <?php
	      $id=104; // identifiant de la page
	      $post = get_post($id);
	      $content = apply_filters('the_content', $post->post_content);
	      echo $content;
	      ?>
	       </div>
	       <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; margin-right: 5px;" class="info">
	        <h4><?php the_title() ?></h4>
	       </div>
	  </div>

	  <div class="col-md-3">
	    <div style="background-color: #F1F0EA; padding: 10px; border-radius: 20px 20px 0px 0px; text-align: center; align-items: center; margin-right: 5px;" class="info">
	      <?php
	      $id=106; // identifiant de la page
	      $post = get_post($id);
	      $content = apply_filters('the_content', $post->post_content);
	      echo $content;
	      ?>
	       </div>
	       <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; margin-right: 5px;" class="info">
	        <h4><?php the_title() ?></h4>
	       </div>
	  </div>
	</div>
</div>

<!--Article informations-->
<div class="container">
	<div class="row" >


	<?php
	$id=189; // identifiant de la page
	$post = get_post($id);
	$post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
	$content = apply_filters('the_content', $post->post_content);
	echo $post_thumbnail;
	?>
		 <h3 style="text-align: left;"><?php the_title() ?></h3>
<div class="col-md-12">
	<div style="background-color: #F1F0EA; padding: 10px; border-radius: 20px 20px 20px 20px; text-align: center; margin-right: 5px;" class="info">
<p><?php the_content() ?></p>
	</div>
</div>
</div>
</div>
<!--Article informations-->

<!--Article informations-->
<div class="container">
	<div class="row" >


	<?php
	$id=191; // identifiant de la page
	$post = get_post($id);
	$post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
	$content = apply_filters('the_content', $post->post_content);
	echo $post_thumbnail;
	?>
		 <h3 style="text-align: left;"><?php the_title() ?></h3>
<div class="col-md-12">
	<div style="background-color: #F1F0EA; padding: 10px; border-radius: 20px 20px 20px 20px; text-align: center; margin-right: 5px;" class="info">
<p><?php the_content() ?></p>
	</div>
</div>
</div>
</div>
<!--Article informations-->









<?php get_footer(); ?>
