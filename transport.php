<?php
/*
  Template Name: Transport
*/
	get_header();
?>
<div class="container col-md-12">
  <h1><?php the_title(); ?></h1>
</div>

<div class="container col-md-12">
  <?php the_content();?>
</div>

<div class="container">
  <div class="row col-md-12" >
<div class="col-md-4">

  <?php
  $id=139; // identifiant de la page
  $post = get_post($id);
  $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
  $content = apply_filters('the_content', $post->post_content);
  echo $post_thumbnail;
  ?>

  <a href="<?php the_permalink(); ?>"class="post__link">
    <img class="img-fluid" src=<?php the_post_thumbnail();?>
  </a>

</div>

<div class="col-md-4">

  <?php
  $id=142; // identifiant de la page
  $post = get_post($id);
  $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
  $content = apply_filters('the_content', $post->post_content);
  echo $post_thumbnail;
  ?>

  <a href="<?php the_permalink(); ?>"class="post__link">
    <img class="img-fluid" src=<?php the_post_thumbnail();?>
  </a>

</div>

<div class="col-md-4">

  <?php
  $id=145; // identifiant de la page
  $post = get_post($id);
  $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
  $content = apply_filters('the_content', $post->post_content);
  echo $post_thumbnail;
  ?>

  <a href="<?php the_permalink(); ?>"class="post__link">
    <img class="img-fluid" src=<?php the_post_thumbnail();?>
  </a>

</div>

<?php get_footer(); ?>
