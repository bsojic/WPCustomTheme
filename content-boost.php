<?php 

$income_image = get_field('income_image'); 
$income_title = get_field('income_title');
$income_description = get_field('income_description'); 
$reason_1_title = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');  
$reason_2_title = get_field('reason_2_title');
$reason_2_description = get_field('reason_2_description'); 

 ?>

<section id="boost-income">
  <div class="container">
    <div class="section-header">
      <?php if(!empty($income_image)) : ?>

        <img src="<?php echo $income_image['url']; ?>" alt="<?php echo $income_image['alt']; ?>">

      <?php endif; ?>  
      
      <h2><?php echo $income_title; ?></h2>
    </div>
  

  <p class="lead"><?php echo $income_description; ?></p>
    <div class="row">
      <div class="col-sm-6">
        <h3><?php echo $reason_1_title ?></h3>
        <p><?php echo $reason_1_description ?></p>
      </div>
      
      <div class="col-sm-6">
        <h3><?php echo $reason_2_title ?></h3>
        <p><?php echo $reason_2_description ?></p>
      </div>
    </div>
  </div>
</section>