<?php
/**
 Template Name: Stripe coupons
*/

get_header();
?>

<section class="page-top stripe-offer">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <div class="stripe-offer-wrap">
      <div class="left">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="subtitle">
          <?php the_content(); ?>
        </div>
		  <div class="button button-accent callback-open">
              Submit
            </div>
        <div class="stripe-offer-form">
          <div class="radio">
            <?php $coup_id = 1; if(have_rows('price_coupons')) : while(have_rows('price_coupons')) : the_row(); ?>
            <input data-name="<?php the_sub_field('name'); ?>" data-old="<?php the_sub_field('old_price'); ?>" value="<?php the_sub_field('current_price'); ?>" class="hidden" type="radio" name="stripe-coupon" id="<?php echo 'coupon-' . $coup_id; ?>" <?php if ($coup_id == 1) { echo 'checked'; } ?>>
            <label class="item" for="<?php echo 'coupon-' . $coup_id; ?>">
              <div class="top">
                <b>$<?php the_sub_field('current_price'); ?></b>
                <p>$<?php the_sub_field('old_price'); ?></p>
              </div>
              <strong><?php the_sub_field('name'); ?></strong>
            </label>
            <?php $coup_id++; endwhile; endif; ?>
          </div>
			<?php // echo get_option('sert_number_meta') ?>
          <div class="submit">
            <div class="quantity" style="display: none">
              <div class="minus icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M20 12H4" stroke="white" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="quantity-input">
                <input type="number" value="1">
              </div>
              <div class="plus icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M12 4V20M20 12H4" stroke="white" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>
            <div class="button button-accent square-submit">
              Buy now
            </div>
            <div class="total">
              <small>Total</small>
              <div class="row">
                <b>$400</b>
                <p>$400</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="right">
        <img src="<?php the_field('coupons_image'); ?>" alt="<?php the_title(); ?>">
      </div>
    </div>
  </div>
</section>

<section class="stripe-hight">
  <div class="container">
    <h2 class="title title-sub"><?php the_field('hightlights_title'); ?></h2>
    <p class="subtitle"><?php the_field('hightlights_text'); ?></p>
    <div class="stripe-hight-wrap">
      <?php  if(have_rows('hightlights_feat')) : while(have_rows('hightlights_feat')) : the_row(); ?>
      <div class="item">
        <div class="icon">
          <img src="<?php the_sub_field('icon'); ?>" alt="Icon">
        </div>
        <b><?php the_sub_field('title'); ?></b>
        <p><?php the_sub_field('text'); ?></p>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="stripe-detalis">
  <div class="container">
    <h2 class="title"><?php the_field('important_title'); ?></h2>
    <div class="stripe-detalis-wrap">
      <?php  if(have_rows('important_details')) : while(have_rows('important_details')) : the_row(); ?>
      <div class="item">
        <div class="name">
          <b><?php the_sub_field('name'); ?></b>
          <div class="line"></div>
        </div>
        <p><?php the_sub_field('deatail'); ?></p>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="content">
      <?php the_field('bottom_text_content'); ?>
    </div>
  </div>
</section>



<!--Microdata organisation-->
<div itemscope itemtype="http://schema.org/Organization">
  <meta itemprop="name" content="Elate Moving | Professional Moving Services">
	<!-- <meta itemprop="priceRange" content="от 60 000 ₽"> -->
	<meta itemprop="description" content="Elate Moving is a professional moving and storage company with the most trustworthy, dedicated, expert and white glove NYC movers.">
  <meta itemprop="telephone" content="<?php the_field('phone', 'options'); ?>">
	<meta itemprop="email" content="<?php the_field('email', 'options'); ?>">
  <link itemprop="url" href="<?php echo get_permalink(); ?>">
	<link itemprop="logo image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <meta itemprop="addressCountry" content="US">
    <meta itemprop="addressLocality" content="New York">
    <meta itemprop="streetAddress" content="305 Broadway Floor 7 New York, NY 10007">
  </div>
</div>


<?php
get_footer();
