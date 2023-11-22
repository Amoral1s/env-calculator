<?php 


//Enqueue Ajax Scripts
function enqueue_genre_ajax_scripts() {
  wp_register_script( 'genre-ajax-js', get_bloginfo('template_url') . '/js/ajax_query.js', array( 'jquery' ), '', true );
  wp_localize_script( 'genre-ajax-js', 'ajax_genre_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
  wp_enqueue_script( 'genre-ajax-js' );
}
add_action('wp_enqueue_scripts', 'enqueue_genre_ajax_scripts');


//Add Ajax Actions
add_action('wp_ajax_genre_filter', 'ajax_genre_filter');
add_action('wp_ajax_nopriv_genre_filter', 'ajax_genre_filter');

//Construct Loop & Results
function ajax_genre_filter()
{
    $query_data = $_GET;
    $genre_terms = ($query_data['genres']) ? explode(',',$query_data['genres']) : false;
    $tax_query = ($genre_terms) ? array( array(
      'taxonomy' => 'our_cases',
      'field' => 'id',
      'terms' => $genre_terms
  ) ) : false;
  $search_value = ($query_data['search']) ? $query_data['search'] : false;
  $paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;
  $book_args = array(
    'post_type' => 'cases',
    's' => $search_value,
    'posts_per_page' => -1,
    'tax_query' => $tax_query,
    'paged' => $paged
  );
  $book_loop = new WP_Query($book_args);
 
    if( $book_loop->have_posts() ):
        while( $book_loop->have_posts() ): $book_loop->the_post(); ?>
            <div class="item">
              <?php the_title(); ?>
            </div>
        <?php
            
        endwhile;
        
    else: echo 'none post';
        
    endif;
    wp_reset_postdata();
 
    die();
}