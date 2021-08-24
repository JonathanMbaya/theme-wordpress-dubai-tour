<?php
/*
  Template Name: Que faire?
*/
	get_header();
?>

	<h1><?php the_title(); ?></h1>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
<?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid imageh1')); ?>
				</div>
				<div class="col-md-6">
					<?php the_content();?>
				</div>
			</div>
		</div>


		<!--Galerie Hôtels Luxe-->
     <div class="container">
			 <div class="row">
				 <div class="col-md-12">
				 			 <h3>Découvrez les différentes activités</h3>
				 </div>
			 </div>
       <div class="row" >
         <div class="col-md-4">
           <?php
           $id=115; // identifiant de la page
           $post = get_post($id);
           $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
           $content = apply_filters('the_content', $post->post_content);
           echo $post_thumbnail;
           ?>

           <a href="<?php bloginfo('url'); ?>/activites-loisirs/"class="post__link">
             <img class="img-fluid" src<?php the_post_thumbnail();?>
           </a>
           <h4><?php the_title() ?></h4>

         </div>

         <div class="col-md-4">

           <?php
           $id=148; // identifiant de la page
           $post = get_post($id);
           $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
           $content = apply_filters('the_content', $post->post_content);
           echo $post_thumbnail;
           ?>

           <a href="<?php bloginfo('url'); ?>/a-visiter/"class="post__link">
             <img class="img-fluid" src<?php the_post_thumbnail();?>
           </a>
           <h4><?php the_title() ?></h4>

         </div>

         <div class="col-md-4">

           <?php
           $id=150; // identifiant de la page
           $post = get_post($id);
           $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
           $content = apply_filters('the_content', $post->post_content);
           echo $post_thumbnail;
           ?>

           <a href="<?php bloginfo('url'); ?>/restaurants-bars/"class="post__link">
             <img class="img-fluid" src<?php the_post_thumbnail();?>
           </a>
           <h4><?php the_title() ?></h4>
         </div>
       </div>
     </div>


<?php get_footer(); ?>
