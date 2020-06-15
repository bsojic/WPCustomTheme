<?php
/*
  Template Name: Home Page
*/

get_header();
?>
<!--hero-->
<?php get_template_part('content','hero'); ?>

<!--opt in section-->
<?php get_template_part('content','optin'); ?>

<!--boost your income-->
<?php get_template_part('content','boost'); ?>

<!--who benefits-->
<?php get_template_part('content','benefits'); ?>

<!--course features-->
<?php get_template_part('content','features'); ?>

<!--project features-->
<?php get_template_part('content','projects'); ?>

<!--video features-->
<?php get_template_part('content','video'); ?>

<!--instructor-->
<?php get_template_part('content','instructor'); ?> 

<!--testimonials-->
<?php get_template_part('content','testimonials'); ?>

<?php get_footer(); ?>