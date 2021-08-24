<?php get_header(); ?>

<!--Slider Actualités du site-->
<div class="container">
  <div class="row col-md-12">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">

        <div class="carousel-item active">
    			<div class="captionslide">
  <img class="img-fluid" src=<?php the_post_thumbnail();?>
    			</div>
          <div class="carousel-caption d-none d-md-block">
    				<h5>First slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
    				<div id="section07" class="local-scroll">
    					<a href="#nouveautes" class="scroll-down">En savoir plus</a>
    			</div>
          </div>
        </div>
      <div class="carousel-item">
    		<div class="captionslide">
  <img class="img-fluid" src=<?php the_post_thumbnail();?>
    			</div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
    				<div class="local-scroll">
    					<a href="#nouveautes" class="scroll-down">En savoir plus</a>
    			</div>
        </div>
      </div>
        <div class="carousel-item">
    	        <div class="captionslide">
  <img class="img-fluid" src=<?php the_post_thumbnail();?>
    	        </div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
    				<div class="local-scroll">
    					<a href="#nouveautes" class="scroll-down">En savoir plus</a>
    			</div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

</div>

<!--Bienvenue chez Dubai Tour-->
<div style="margin-top: 50px;" class="container col-md-12">
  <div class="row col-md-12">
    <div class="texte col-md-6">
  					<h1><?php the_title(); ?></h1>
  	    	      <?php the_content();?>
    </div>
  	        	<img class="imageh1 col-md-6" src=<?php the_post_thumbnail(); ?>
  </div>

</div>
<!--Bienvenue chez Dubai Tour-->

<!-- Block 2 présentation Page d'accueil -->
<div style="margin-top: 20px;" class="container">
  <div class="row col-md-12" >
          <h2 id="nouveautes">Découvrez la ville de Dubai !</h2>
          <h3><a style="text-decoration:none; color:#168C8F;" href="<?php bloginfo('url'); ?>/hotels/">Hôtels</a></h3>
<div class="col-md-4">

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
  <?php the_excerpt(); ?>

</div>

<div class="col-md-4">

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
    <?php the_excerpt(); ?>

</div>

<div class="col-md-4">

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
    <?php the_excerpt(); ?>

</div>
</div>
</div>

<div class="container">
  <div class="row col-md-12" >
          <h3><a style="text-decoration:none; color:#168C8F;" href="<?php bloginfo('url'); ?>/restaurants/">Restaurants</a></h3>
<div class="col-md-4">

  <?php
  $id=186; // identifiant de la page
  $post = get_post($id);
  $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
  $content = apply_filters('the_content', $post->post_content);
  echo $post_thumbnail;
  ?>

  <a href="<?php the_permalink(); ?>"class="post__link">
    <img class="img-fluid" src=<?php the_post_thumbnail();?>
  </a>
    <?php the_excerpt(); ?>

</div>

<div class="col-md-4">

  <?php
  $id=193; // identifiant de la page
  $post = get_post($id);
  $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
  $content = apply_filters('the_content', $post->post_content);
  echo $post_thumbnail;
  ?>

  <a href="<?php the_permalink(); ?>"class="post__link">
    <img class="img-fluid" src=<?php the_post_thumbnail();?>
  </a>
    <?php the_excerpt(); ?>

</div>

<div class="col-md-4">

  <?php
  $id=26; // identifiant de la page
  $post = get_post($id);
  $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
  $content = apply_filters('the_content', $post->post_content);
  echo $post_thumbnail;
  ?>

  <a href="<?php the_permalink(); ?>" class="post__link">
    <img class="img-fluid" src=<?php the_post_thumbnail();?>
  </a>
    <?php the_excerpt(); ?>
</div>
</div>
</div>



<div class="container">
  <div class="row col-md-12" >
          <h3><a style="text-decoration:none; color:#168C8F;" href="<?php bloginfo('url'); ?>/restaurants/">Activités / Loisirs</a></h3>
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
    <?php the_excerpt(); ?>

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
    <?php the_excerpt(); ?>

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
    <?php the_excerpt(); ?>

</div>
</div>
</div>
<!-- Block 2 présentation Page d'accueil -->
<section>
  <div><i class="fa fa-angle-down fa-5x"></i></div>
  <div><i class="fa fa-arrow-down fa-4x"></i></div>
  <div><i class="fa fa-arrows-v fa-3x"></i></div>
  <div><i class="fa fa-angle-up fa-3x"></i></div>
</section>
<!-- Button ScrollTop -->
<div id="top">
<i class="fa fa-angle-double-up"></i>
</div>


<!--Repost les articles selon les catégories-->
<script type="text/javascript">
(function($){
'use stricte';
// Variables
var $winHeight    = $(window).height(),
    $scrollTopBtn = $('#top'),
    $icon         = $('section > div  i');
// Section Width
$('section div').height($winHeight);
// Resize Window function
$(window).resize(function(){
  $('section div').height($winHeight);
    $icon.css('marginTop', $winHeight - $(this).height() / 2 );
  $icon.css('marginLeft', $(window).width() - $(this).width() / 2 );
});
// Scrolling
$(window).scroll(function(){
//  console.log($(this).scrollTop());
  if ( $(this).scrollTop() >= 450 ){
    $scrollTopBtn.fadeIn();
  }else{
    $scrollTopBtn.fadeOut();
  }
});
  $scrollTopBtn.click(function(){
    $('html,body').animate({scrollTop: 0},2000);
  });
// Center icon inside section
  $icon.css('marginTop', $winHeight - $(this).height() / 2 );
  $icon.css('marginLeft', $(window).width() - $(this).width() / 2 );
}(jQuery));
</script>
<!--Repost les articles selon les catégories-->

<?php get_footer(); ?>
