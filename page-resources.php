<?php 
/*
  Template Name: Resources Page
*/
get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

 ?>

<!-- FEATURE IMAGE -->
<?php if(has_post_thumbnail()) { ?>

<section class="feature-image feature-image-default" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
  <h1><?php the_title(); ?></h1>
</section>

<?php } else { ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
  <h1><?php the_title(); ?></h1>
</section>

<?php } ?>  

<!-- MAIN CONTENT -->
<div class="container">
  <div class="row" id="primary">
  
    <div id="content" class="col-sm-12">
      
      <section class="main-content">
        
        <?php while(have_posts()) : the_post(); ?>
          
          <?php the_content(); ?>

        <?php endwhile; ?> 

        <?php $loop = new WP_Query(['post_type' => 'resource' , 'orderby' => 'post_id' , 'order' => 'ASC']); ?> 
        
        <hr>
        
        <div class="resource-row clearfix">

          <?php while($loop->have_posts()) : $loop->the_post(); ?> 

            <?php 

        $resource_image = get_field('resource_image');
        $resource_url = get_field('resource_url');
        $btn_txt = get_field('btn_txt');


         ?>

          <div class="resource">
            <img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>">
            <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
            <p><?php the_content(); ?></p>
            <?php if(!empty($btn_txt)) : ?>
            <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $btn_txt; ?></a>
            <?php endif; ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </section>
      
    </div><!-- content -->
          
  </div><!-- primary -->
</div><!-- container --> 
<?php get_footer(); ?>  