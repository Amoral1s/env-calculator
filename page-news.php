<?php
/**
 Template Name: Блог
 */

get_header();
?>

<main class="page news container">
  <section class="vac-offer feedback ">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="woocommerce-breadcrumb">', '</p>'); }
    ?>
    <h1>Новости и статьи</h1>
    <?php echo get_search_form(); ?>
    <div class="news-cats">
      <?php
        $args = array(
          'show_option_all'    => '',
          'show_option_none'   => __('No categories'),
          'orderby'            => 'name',
          'order'              => 'ASC',
          'style'              => 'list',
          'show_count'         => 0,
          'hide_empty'         => 1,
          'use_desc_for_title' => 0,
          'child_of'           => 0,
          'feed'               => '',
          'feed_type'          => '',
          'feed_image'         => '',
          'exclude'            => '',
          'exclude_tree'       => '',
          'include'            => '',
          'hierarchical'       => false,
          'title_li'           => __( 'Categories' ),
          'number'             => NULL,
          'echo'               => 1,
          'depth'              => 0,
          'current_category'   => 0,
          'pad_counts'         => 0,
          'taxonomy'           => 'category',
          'walker'             => 'Walker_Category',
          'hide_title_if_empty' => false,
          'separator'          => '',
        );
        
        echo '<ul>';
          wp_list_categories( $args );
        echo '</ul>';
      ?>
    </div>
  </section>
  <div class="news-wrap">
    <?php
      $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
      $args = array(
        'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
        'paged'          => $current_page, // текущая страница
        'post_type'      => 'post'
      );
      query_posts( $args );
      
      $wp_query->is_archive = true;
      $wp_query->is_home = false;
      
      while(have_posts()): the_post();
    ?>

    <a href="<?php the_permalink(); ?>" class="news-wrap-item">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
      <div class="page-wrap-item-title">
        <b><?php the_title(); ?></b> 
        <p><?php the_excerpt(); ?></p>
        <div class="date">
          <span><?php echo get_the_date('d M Y') ?></span>
          <div class="link">
            Подробнее
          </div>
        </div>
      </div>
      
    </a>
      <!-- /.page-wrap-item -->


    <?php endwhile; ?>
   </div>
   <?php if( function_exists('wp_pagenavi') ) wp_pagenavi();?>
</main>

<?php
get_footer();
