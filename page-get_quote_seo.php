<?php
/**
 Template Name:  Get a quote for SEO
*/

get_header();
?>

<section class="quote-page main-quote page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    <div class="crypto-big">
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
    </div>
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

<section class="how wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title  title-sub"><?php the_field('how_title', 'options'); ?></h2>
    <p class="subtitle"><?php the_field('how_subtitle', 'options'); ?></p>
    <div class="how-wrap swiper-nav">
      <div class="arrows">
        <div class="arr arr-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5303 5.46967C15.8232 5.76256 15.8232 6.23744 15.5303 6.53033L10.0607 12L15.5303 17.4697C15.8232 17.7626 15.8232 18.2374 15.5303 18.5303C15.2374 18.8232 14.7626 18.8232 14.4697 18.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697L14.4697 5.46967C14.7626 5.17678 15.2374 5.17678 15.5303 5.46967Z" fill="white"/>
          </svg>
        </div>
        <div class="arr arr-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 5.46967C8.17678 5.76256 8.17678 6.23744 8.46967 6.53033L13.9393 12L8.46967 17.4697C8.17678 17.7626 8.17678 18.2374 8.46967 18.5303C8.76256 18.8232 9.23744 18.8232 9.53033 18.5303L15.5303 12.5303C15.8232 12.2374 15.8232 11.7626 15.5303 11.4697L9.53033 5.46967C9.23744 5.17678 8.76256 5.17678 8.46967 5.46967Z" fill="white"/>
          </svg>
        </div>
      </div>
      <div class="how-wrap-slider wow animate__animated animate__fadeInUp swiper">
        <div class="swiper-wrapper">
          <?php if(have_rows('how_slider', 'options')) : while(have_rows('how_slider', 'options')) : the_row(); ?>
          <div class="swiper-slide item">
            <img src="<?php the_sub_field('image'); ?>" alt="step image">
            <small><?php the_sub_field('step'); ?></small>
            <b><?php the_sub_field('text'); ?></b>
          </div> 
          <?php endwhile; endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('seo_title')) { ?>
<section class="seo wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title "><?php the_field('seo_title'); ?></h2>
    <div class="content ">
      <?php the_field('seo_content'); ?>
    </div>
  </div>
</section>
<?php } ?>

<section class="question container wow animate__animated animate__fadeInUp">
  <div class="question-wrap ">
    <div class="left">
      <b>Got a question?</b>
      <p>We're here to help and answer any question you might have</p>
    </div>
    <div class="right">
      <?php echo do_shortcode('[contact-form-7 id="4a616eb" title="Got a question"]'); ?>
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
get_footer(); ?>





