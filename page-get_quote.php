<?php
/**
 Template Name:  Get a quote
*/

get_header();
?>

<section class="quote-page main-quote page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    <a href="<?php echo get_permalink(6517); ?>" class="crypto-big">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
          <g clip-path="url(#clip0_1076_8674)">
            <path d="M12.6562 15H17.3438M17.3438 15C18.6381 15 19.6875 16.0494 19.6875 17.3438C19.6875 18.6381 18.6381 19.6875 17.3438 19.6875M17.3438 15C18.6381 15 19.6875 13.9506 19.6875 12.6562C19.6875 11.3619 18.6381 10.3125 17.3438 10.3125M17.3438 19.6875H12.6562M17.3438 19.6875V22.0312M12.6562 19.6875V10.3125M12.6562 19.6875H10.3125M12.6562 19.6875V22.0312M12.6562 10.3125H17.3438M12.6562 10.3125V7.96875M12.6562 10.3125H10.3125M17.3438 10.3125V7.96875" stroke="#FE7300" stroke-width="2.34375" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M26.4265 7.13754C27.9925 9.45557 28.8281 12.1757 28.8281 15C28.8281 22.7674 22.7674 28.8281 15 28.8281C7.19396 28.8281 1.17188 22.7303 1.17188 15C1.17188 7.23258 7.23258 1.17188 15 1.17188C17.889 1.17188 20.598 2.04375 22.8625 3.57352" stroke="white" stroke-width="2.34375" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </g>
          <defs>
            <clipPath id="clip0_1076_8674">
              <rect width="30" height="30" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class="crypto-meta">
        <b>We accept cryptocurrencies as payment</b>
        <p>Bitcoin, Ethereum, Solana, Bitcoin Cash, Lite Coin, Ripple and others on request</p>
      </div>
    </a>
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





