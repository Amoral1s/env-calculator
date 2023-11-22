<?php
/**
 Template Name:  Get a quote
*/

get_header();
?>
<div class="container">

</div>
<section class="quote-page main-quote page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    <b class="title">Move Type</b>
    <div class="quote-tabs">
      <div data-id="Residential" class="item active">
        Residential
      </div>
      <div data-id="Commercial / Office" class="item">
        Commercial / Office
      </div>
      <div data-id="Fine Art" class="item">
        Fine Art
      </div>
    </div>
    <div class="quote-page-form q-main q-residential">
      <?php echo do_shortcode('[contact-form-7 id="dfeac37" title="Get a quote (Residential)"]'); ?>
    </div>
    <div class="quote-page-form q-main q-commercial" style="display: none">
      <?php echo do_shortcode('[contact-form-7 id="a1df1ea" title="Get a quote (Commercial)"]'); ?>
    </div>
    <div class="quote-page-form q-main q-art" style="display: none">
      <?php echo do_shortcode('[contact-form-7 id="571f6ef" title="Get a quote (Fine Art)"]'); ?>
    </div>
  </div>
</section>

<section class="quote-page zoom-section page-top" style="display: none">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <b class="page-title">Set up Virtual Estimate via FaceTime or Zoom
    </b>
    <p class="subtitle">If you have large scale or complicated moving project you can set up Virtual estimate with our customer representative and you will receive precise quote for your upcoming move</p>
    <?php echo do_shortcode('[contact-form-7 id="9aaf6d5" title="Set up Virtual Estimate via FaceTime or Zoom"]'); ?>
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
get_footer(); ?>





