<?php 

$features_header_image = get_field('features_header_image');
$features_header_title = get_field('features_header_title');

 ?>
<section id="course-features">
  <div class="container">    
    <div class="section-header">
      <?php if(!empty($features_header_image)) : ?>

        <img src="<?php echo $features_header_image['url']; ?>" alt="<?php echo $features_header_image['alt']; ?>">

      <?php endif; ?> 
      <h2><?php echo $features_header_title; ?></h2>
    </div>      
    <div class="row">  

    <?php $loop = new WP_Query(['post_type' => 'features' , 'orderby' => 'post_id' , 'order' => 'ASC']); ?> 

    <?php while($loop->have_posts()) : $loop->the_post(); ?>  

      <div class="col-sm-2">
        <i class="<?php the_field('features_icon'); ?>"></i>
        <h4><?php the_title(); ?></h4>
      </div>

    <?php endwhile; wp_reset_query(); ?>  


        
    </div>
  </div>
</section>