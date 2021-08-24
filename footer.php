<?php wp_footer(); ?>

  <form style="margin-bottom: 0px; padding-top: 20px;" class="formulaire">
  <div style="margin-bottom: 0px;" class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <p style="text-align: center;"> <strong>Abonnez-vous à notre newsletter, afin de suivre toute l'actualité sur Dubai</strong> </p>
      </div>
      <div class="col-md-4 col-sm-12">
        <input style="  border-radius: 50px; width: 100%; margin-bottom: 25px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse e-mail">
      </div>
      <button style="background-color:#168C8F;  border: none; padding-bottom: 15px; margin-bottom: 25px; margin-right: 0px; color: #ffffff;" type="submit" name="button" class="btn-warning col-md-4 col-sm-12">S'abonner</button>
  </div>
    </div>
  </form>


<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <div style=" width:100%; height: 300px; text-align: center;">
          <img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
          <div style="justify-content: center;" class="social-link">
            <a href="https://icons8.com/icon/118502/facebook"><img class="img-fluid " src="https://img.icons8.com/android/48/000000/facebook-new.png"/></a>
            <a href="https://icons8.com/icon/85154/instagram"><img class="img-fluid" src="https://img.icons8.com/ios-filled/50/000000/instagram-new.png"/></a>
            <a href="https://icons8.com/icon/3861/twitter"><img class="img-fluid" src="https://img.icons8.com/android/48/000000/twitter.png"/></a>
          </div>
        </div>
      </div>

      <div style="justify-content: center; text-align: center;" class="col-md-3 col-sm-12">
        <div class="social-link">
          <p><strong>DUBAI TOUR</strong></p>
          <p>12 Mail ATLANTIS</p>
          <p>91300 MASSY</p>
          <p>FRANCE</p>
        </div>
      </div>


      <div class="col-md-3 col-sm-12">
        <div style="justify-content: center; text-align: center;" class="social-link">
          <p><strong>Informations</strong></p>
          <p><a href="<?php bloginfo('url'); ?>/contact/">Nous contacter</a></p>
          <p><a href="<?php bloginfo('url'); ?>/faq/">FAQ</a></p>
          <p><a href="<?php bloginfo('url'); ?>/rgpd/">RGPD</a></p>
          <p><a href="<?php bloginfo('url'); ?>/mentions-legales/">Mentions légales</a></p>
        </div>
      </div>


      <div class="col-md-3 col-sm-12">
        <div style="justify-content: center; align-items: center;" class="social-link">
              <button style="background-color:#168C8F; border: none; width: 100%; padding-bottom: 20px; padding-top: 20px; text-align: center; color: #ffffff;" type="submit" name="button" class="btn-warning">Evaluez-nous</button>
        </div>
      </div>

    </div>
  </div>

</footer>
</body>
</html>
