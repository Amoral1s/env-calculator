<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="single container">
	<div class="single-top">
		<?php
			if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="woocommerce-breadcrumb">', '</p>'); }
		?>
		<div class="date"><?php echo get_the_date('d M Y') ?></div>
		<h1><?php the_title(); ?></h1>
		<?php if (get_field('kratkoe_opisanie_stati')) { ?>
		<div class="excerpt">
			<?php the_field('kratkoe_opisanie_stati'); ?>
		</div>
		<?php } ?>
		<div class="meta">
			<div class="meta-name">
				<?php the_field('avtor'); ?>
			</div>
			<div class="meta-time">
				<?php the_field('vremya_chteniya'); ?>
			</div>
			<div class="meta-views">
				<span><?php echo do_shortcode('[post-views]'); ?></span>
				<span>просмотра</span>
			</div>
			<div class="meta-rating">
				<div>Рейтинг:</div> <?php echo do_shortcode('[stars]'); ?>
			</div>
		</div>
		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="img" class="thumb">
	</div>
	<div class="single-nav-wrap">
		<b>Содержание статьи</b>
		<div class="single-nav"></div>
	</div>
	<div class="content">
		<?php the_content(); ?>
	</div>
	<div class="comments">
		<?php comments_template(); ?>
	</div>
</section>

<section class="news container">
  <h2 class="title">
    Читайте так же
  </h2>
  <p class="subtitle">
		Наши интересные статьи и последние новости 
  </p>
  <div class="news-wrap">
  <?php 
    $my_posts = get_posts('numberposts=4&orderby=rand');
    foreach ($my_posts as $post) :
    setup_postdata($post);
  ?>
  <a href="<?php the_permalink(); ?>" class="news-wrap-item">
    <img src="<?php the_post_thumbnail_url() ?>" alt="news">
    <b><?php the_title(); ?></b>
    <p><?php the_excerpt(); ?></p>
  </a>
  <?php endforeach; ?>
  </div>
</section>




<?php endwhile; ?>

<?php get_footer();