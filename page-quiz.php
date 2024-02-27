<?php
/**
 Template Name: Quiz
*/

get_header();
?>
<section class="page-top quiz-top" style="background-image: url(<?php the_field('bg_img'); ?>);">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
  </div>
</section>

<section class="quiz container">
  <div class="quiz-start">
  <?php if (have_rows('quiz_start')) : while(have_rows('quiz_start')) : the_row(); ?>

    <div class="item">
      <div class="left">
        <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
      </div>
      <div class="right">
        <b><?php the_sub_field('name'); ?></b>
        <p><?php the_sub_field('text'); ?></p>
      </div>
    </div>
    <?php endwhile; endif; ?>

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
