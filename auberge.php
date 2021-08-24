<?php
/*
  Template Name: Location Maison
*/
	get_header();
?>

<div style="justify-content: space-between;" class="container">
 <div class="row">
<div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); border-radius: 20px 20px 20px 20px; margin-top: 20px; margin-bottom: 20px;" class="col-md-4 col-sm-12">
              <?php
               $id=251; // identifiant de la page
               $post = get_post($id);
               $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
               $content = apply_filters('the_content', $post->post_content);
               echo $post_thumbnail;
               ?>
               <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px;" class="img-fluid" src=<?php the_post_thumbnail();?>
              <div style="background-color: #F1F0EA; border-radius: 0px 0px 20px 20px; text-align: center; " class="">
                <h4><?php the_title() ?></h4>
                 <p><?php the_content() ?></p>
              </div>
           </div>

<div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); border-radius: 20px 20px 20px 20px; margin-top: 20px; margin-bottom: 20px;" class="col-md-4 col-sm-12">
              <?php
               $id=254; // identifiant de la page
               $post = get_post($id);
               $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
               $content = apply_filters('the_content', $post->post_content);
               echo $post_thumbnail;
               ?>
               <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px;" class="img-fluid" src=<?php the_post_thumbnail();?>
              <div style="background-color: #F1F0EA; border-radius: 0px 0px 20px 20px; text-align: center; " class="">
                <h4><?php the_title() ?></h4>
                 <p><?php the_content() ?></p>
              </div>
           </div>


<div style="background-color: #F1F0EA; box-shadow:2px 2px 2px 1px rgba(0, 0, 0, 0.2); border-radius: 20px 20px 20px 20px; margin-top: 20px; margin-bottom: 20px;" class="col-md-4 col-sm-12">
              <?php
               $id=262; // identifiant de la page
               $post = get_post($id);
               $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
               $content = apply_filters('the_content', $post->post_content);
               echo $post_thumbnail;
               ?>
               <img style="background-color: #F1F0EA; border-radius: 20px 20px 0px 0px;" class="img-fluid" src=<?php the_post_thumbnail();?>
              <div style="background-color: #F1F0EA; border-radius: 0px 0px 20px 20px; text-align: center; " class="">
                <h4><?php the_title() ?></h4>
                 <p><?php the_content() ?></p>
              </div>
           </div>


        </div>
    </div>

<?php get_footer(); ?>
