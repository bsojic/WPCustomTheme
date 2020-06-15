<?php 

// Custom fields
$prelaunch_price  = get_post_meta(11, 'prelaunch_price', true);
$launch_price     = get_post_meta(11, 'launch_price', true);  
$final_price      = get_post_meta(11, 'final_price', true);
$btn_txt          = get_post_meta(11, 'btn_txt', true);

 ?>
<!--hero-->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">
        <div class="col-sm-5">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="badge">
        </div>
        <div class="col-sm-7 hero-text">
          <h1><?php bloginfo('name'); ?></h1>
          <p class="lead"><?php bloginfo('description'); ?></p>
          <div id="price-timeline">
            <div class="price active">
              <h4>Pre-Launch Price <small>Ends soon</small></h4>
              <span><?php echo $prelaunch_price; ?></span>
            </div>
            <div class="price">
              <h4>Launch Price <small>Coming soon</small></h4>
              <span><?php echo $launch_price; ?></span>
            </div>
            <div class="price">
              <h4>Final Price <small>Coming soon</small></h4>
              <span><?php echo $final_price; ?></span>
            </div>
          </div>
          <p><a href="#" class="btn btn-lg btn-danger" role="button"><?php echo $btn_txt; ?></a></p>
        </div>
      </div>
    </div>
  </article>
</section>