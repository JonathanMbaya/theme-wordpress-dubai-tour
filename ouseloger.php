<?php
/*
  Template Name: Où se loger?
*/
	get_header();
?>

<h1><?php the_title(); ?></h1>

<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid imageh1 col-md-6')); ?>
		</div>
		<div class="col-md-6">
			<?php the_content();?>
		</div>
	</div>
</div>


             <div class="container">
               <div class="row" >
                       <h3 style="margin-bottom: 20px;">Découvrez en plus à propos de l'élément qui vous correspond</h3>
             <div class="col-md-3">

               <?php
               $id=26; // identifiant de la page
               $post = get_post($id);
               $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
               $content = apply_filters('the_content', $post->post_content);
               echo $post_thumbnail;
               ?>

               <a href="<?php bloginfo('url'); ?>/hotels/"class="post__link">
                 <img class="img-fluid" src=<?php the_post_thumbnail();?>
               </a>
               <h4>Hotels</h4>

             </div>

             <div class="col-md-3">

               <?php
               $id=13; // identifiant de la page
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
               $id=162; // identifiant de la page
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
               $id=166; // identifiant de la page
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





<?php get_footer(); ?>
