<?php
/**
 Template Name: Контакты
*/

get_header();
?>

<section class="contacts">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="woocommerce-breadcrumb">', '</p>'); }
    ?>
    <h1>
      <?php the_title(); ?>
    </h1>
    <div class="contacts-wrap">
      <div class="phone contacts-wrap-item">
        <a href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a>
        <div class="btn callback">
          Перезвоните мне
        </div>
      </div>
      <div class="adress contacts-wrap-item">
        <b><?php the_field('adress', 'options'); ?></b>
        <p><?php the_field('time', 'options'); ?></p>
      </div>
      <div class="email contacts-wrap-item">
        <a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
        <div class="social">
          <a href="<?php the_field('telegram', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/social/tg-w.svg" alt="icon"></a>
          <a href="<?php the_field('vk', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/social/vk-w.svg" alt="icon"></a>
          <a href="<?php the_field('whatsapp', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/social/wa-w.svg" alt="icon"></a>
        </div>
      </div>
    </div>

    <div class="contacts-map">
      <img src="<?php the_field('map'); ?>" alt="map">
    </div>

    <div class="contacts-text">
      <div class="contacts-text-left">
        <b><?php the_field('how'); ?></b>
        <p><?php the_field('how_text'); ?></p>
      </div>
      <div class="contacts-text-right">
        <a target="blank" href="<?php the_field('postroit_marshrut'); ?>" class="contacts-text-right-item maps">
          Построить маршрут
        </a>
        <a target="blank" href="<?php the_field('vyzvat_taksi'); ?>" class="contacts-text-right-item taxi">
          Заказать такси
        </a>
      </div>
    </div>

    <div class="contacts-form">
      <div class="contacts-form-left">
        <b><?php the_field('contacts_title'); ?></b>
        <p><?php the_field('contacts_text'); ?></p>
      </div>
      <div class="contacts-form-right s-form">
        <?php echo do_shortcode('[contact-form-7 id="509" title="Свяжитесь с нами"]'); ?>
      </div>
    </div>
    <?php if (get_field('req_title')) { ?>
    <div class="contacts-req">
      <h2 class="title">
        <?php the_field('req_title'); ?>
        <?php if (get_field('pdf')) { ?>
          <a href="<?php the_field('pdf'); ?>" target="blank" download>Скачать в формате pdf</a>
        <?php } ?>
      </h2>
      <div class="contacts-req-wrap">
        <?php if( have_rows('req') ): while( have_rows('req') ): the_row(); ?>
        <div class="contacts-req-wrap-item">
          <b><?php echo get_sub_field('naimenovanie'); ?></b>
          <p><?php echo get_sub_field('tekst'); ?></p>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <?php } ?>

    <?php if (get_field('otv_name')) { ?>
    <div class="site">
      <div class="site-left">
        <img src="<?php the_field('otv_photo'); ?>" alt="img">
        <div>
          <b><?php the_field('otv_text'); ?></b>
          <p><?php the_field('otv_name'); ?></p>
        </div>
      </div>
      <div class="site-center">
        <a href="mailto:<?php the_field('otv_email'); ?>"><?php the_field('otv_email'); ?></a>
      </div>
      <div class="site-right">
        <a href="tel:<?php the_field('otv_phone'); ?>"><?php the_field('otv_phone'); ?></a>
      </div>
    </div>
    <?php } ?>

  </div>
</section>



<?php
get_footer();
