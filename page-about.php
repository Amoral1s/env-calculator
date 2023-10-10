<?php
/**
 Template Name: О нас
*/

get_header();
?>

<section class="about-offer">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="woocommerce-breadcrumb">', '</p>'); }
    ?>
    <h1>
      <?php the_field('offer_title'); ?>
    </h1>
    <?php the_field('offer_subtitle'); ?>
  </div>
  <?php if (get_field('offer_video')) { ?>
  <div class="about-offer-wrap video-about">
    <div class="hidden link"><?php the_field('offer_video'); ?></div>
    <img src="<?php the_field('offer_img'); ?>" data-link="" alt="img">
  </div>
  <?php } ?>
</section>



<?php
get_footer();
