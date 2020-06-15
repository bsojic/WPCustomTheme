<section id="kudos">
  <div class="container">
    
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>What people are saying about Brad</h2>

        <?php $loop = new WP_Query(['post_type' => 'testimonials' , 'orderby' => 'post_id' , 'order' => 'ASC']); ?> 

        <?php while($loop->have_posts()) : $loop->the_post(); ?> 

        <div class="row testimonial">
          <div class="col-sm-4">
            <?php 

              if(has_post_thumbnail()) {
                the_post_thumbnail([200, 200]);
              }

             ?>
          </div>
          <div class="col-sm-8"> 
            <blockquote>
                  <?php the_content(); ?>
                  <cite>&mdash;<?php the_title(); ?></cite>
            </blockquote>
          </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>

      </div>        
    </div>
  </div>   
</section>