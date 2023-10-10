<?php 

if ( ! function_exists( 'main_theme_setup' ) ) :
	function main_theme_setup() {
		load_theme_textdomain( 'main-theme', get_template_directory() . '/languages' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Основное меню', 'main-theme' ),
				'menu-2' => esc_html__( 'Второстепенное меню', 'main-theme' )
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'main_theme_setup' );

function main_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар', 'main-theme' ),
			'id'            => 'sidebar-1',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар 2', 'main-theme' ),
			'id'            => 'sidebar-2',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'main_theme_widgets_init' );



//Удаление стилизации CF7
add_action( 'wpcf7_autop_or_not', '__return_false' );
add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	return $content;
});
 

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки сайта',
		'menu_title'	=> 'Настройки сайта',
		'menu_slug' 	=> 'options'
	));
}

function remove_plugin_updates_ACF($value) {
  unset($value->response['advanced-custom-fields-pro/acf.php']);
  return $value; 
}
add_filter('site_transient_update_plugins', 'remove_plugin_updates_ACF'); 

function remove_plugin_updates_DUPLICATOR($value) {
  unset($value->response['duplicator-pro/index.php']);
  return $value; 
}
add_filter('site_transient_update_plugins', 'remove_plugin_updates_DUPLICATOR'); 

add_action( 'wp_head', 'my_styles' );
function my_styles() {
		/* wp_enqueue_style( $handle, $src, $deps, $ver, $media ); */
		wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.min.css' );
		//wp_enqueue_style( 'mag', get_template_directory_uri() . '/css/magnific-popup.min.css' );
		wp_enqueue_style( 'daDataCss', 'https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css' );
		wp_enqueue_style( 'sel', get_template_directory_uri() . '/css/select2.min.css' );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
		wp_enqueue_style( 'stylecss', get_stylesheet_uri() ); 
}

add_action( 'wp_footer', 'my_scripts' );
function my_scripts() {
	wp_deregister_script( 'jquery-core' );
	//wp_register_script( 'jquery-core', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
	wp_register_script( 'jquery-core', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'daDatajs', 'https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'select', get_template_directory_uri() . '/js/select2.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'chart', get_template_directory_uri() . '/js/chart.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'data-labels', get_template_directory_uri() . '/js/data-labels.js', array('jquery'), null, true );
	wp_enqueue_script( 'data-labels-donut', get_template_directory_uri() . '/js/data-labels-donut.js', array('jquery'), null, true );
	//wp_enqueue_script( 'pdf', get_template_directory_uri() . '/js/hml2pdf.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'html2canvas', get_template_directory_uri() . '/js/html2canvas.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'jspdf', get_template_directory_uri() . '/js/jspdf.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'print', 'https://printjs-4de6.kxcdn.com/print.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );
}

@ini_set( 'upload_max_size' , '164M' );
@ini_set( 'post_max_size', '164M');
@ini_set( 'max_execution_time', '3000' );

add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){
		// разрешим
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}
