<?php

$optin_txt        = get_post_meta(11, 'optin_txt', true);  
$optin_btn_txt    = get_post_meta(11, 'optin_btn_txt', true); 


?>

<section id="optin">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <p class="lead"><?php echo $optin_txt ?></p>
      </div>
      <div class="col-sm-5">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_btn_txt; ?></button>
      </div>
    </div>
  </div>
</section>



