<?php
/*
  Template Name: Activités
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
<h3>Dans le désert</h3>
</div>

<!--Dans le désert-->

         <div style="display: flex; justify-content: space-between;" class="container">
					 <div class="row">

					 </div>
           <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
              <?php
               $id=117; // identifiant de la page
               $post = get_post($id);
               $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
               $content = apply_filters('the_content', $post->post_content);
               echo $post_thumbnail;
               ?>
               <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
              <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
                <h4><?php the_title() ?></h4>
                 <p><?php the_content() ?></p>
              </div>
           </div>

           <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
               <?php
               $id=122; // identifiant de la page
               $post = get_post($id);
               $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
               $content = apply_filters('the_content', $post->post_content);
               echo $post_thumbnail;
               ?>
               <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
              <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
                 <h4><?php the_title() ?></h4>
                 <p><?php the_content() ?></p>
              </div>
           </div>

           <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
               <?php
               $id=122; // identifiant de la page
               $post = get_post($id);
               $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
               $content = apply_filters('the_content', $post->post_content);
               echo $post_thumbnail;
               ?>
               <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
              <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
                <h4><?php the_title() ?></h4>
                 <p><?php the_content() ?></p>
              </div>
           </div>
         </div>

<!--Dans le désert-->

<div class="container col-md-12">
<h3>En Mer</h3>
</div>

<!--En Mer-->

<div style="display: flex; justify-content: space-between;" class="container">

  <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
      <?php
      $id=130; // identifiant de la page
      $post = get_post($id);
      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
      $content = apply_filters('the_content', $post->post_content);
      echo $post_thumbnail;
      ?>
      <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
     <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
       <h4><?php the_title() ?></h4>
        <p><?php the_content() ?></p>
     </div>
  </div>

  <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
      <?php
      $id=133; // identifiant de la page
      $post = get_post($id);
      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
      $content = apply_filters('the_content', $post->post_content);
      echo $post_thumbnail;
      ?>
      <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
     <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
       <h4><?php the_title() ?></h4>
        <p><?php the_content() ?></p>
     </div>
  </div>

  <div style=" background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
      <?php
      $id=136; // identifiant de la page
      $post = get_post($id);
      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
      $content = apply_filters('the_content', $post->post_content);
      echo $post_thumbnail;
      ?>
      <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
     <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
       <h4><?php the_title() ?></h4>
        <p><?php the_content() ?></p>
     </div>
  </div>
</div>

<!--En Mer-->


<div class="container col-md-12">
<h3>Dans le ciel</h3>
</div>


<!-- Dans le ciel-->

<div style="display: flex; justify-content: space-between;" class="container">

  <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
      <?php
      $id=139; // identifiant de la page
      $post = get_post($id);
      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
      $content = apply_filters('the_content', $post->post_content);
      echo $post_thumbnail;
      ?>
      <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
     <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
       <h4><?php the_title() ?></h4>
        <p><?php the_content() ?></p>
     </div>
  </div>

  <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
      <?php
      $id=142; // identifiant de la page
      $post = get_post($id);
      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
      $content = apply_filters('the_content', $post->post_content);
      echo $post_thumbnail;
      ?>
      <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
     <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
       <h4><?php the_title() ?></h4>
        <p><?php the_content() ?></p>
     </div>
  </div>

  <div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); width: 350px; border-radius: 20px 20px 20px 20px;" class="col-md-4">
      <?php
      $id=145; // identifiant de la page
      $post = get_post($id);
      $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
      $content = apply_filters('the_content', $post->post_content);
      echo $post_thumbnail;
      ?>
      <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px; height: 270px; width: 350px;" class="img-fluid" src=<?php the_post_thumbnail();?>
     <div style="background-color: #F1F0EA; padding: 10px; border-radius: 0px 0px 20px 20px; text-align: center; width: 350px;" class="info">
        <h4><?php the_title() ?></h4>
        <p><?php the_content() ?></p>
     </div>
  </div>
</div>

<!-- Dans le ciel-->







<?php get_footer(); ?>
