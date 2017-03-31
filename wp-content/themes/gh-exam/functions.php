<?php
/**
 * gh-exam functions and definitions
 */

if ( ! function_exists( 'gh_exam_setup' ) ) :

function gh_exam_setup() {

	load_theme_textdomain( 'gh-exam', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'gh-exam' ),
	) );

    add_theme_support('custom-logo', array(
        'height' => 34,
        'width' => 164,
        'flex-height' => true
    ));

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'gh_exam_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gh_exam_setup' );

function gh_exam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gh-exam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gh-exam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gh_exam_widgets_init' );

function gh_exam_scripts() {

    /*Add styles*/
	wp_enqueue_style( 'style_css', get_stylesheet_uri(), ['vendor_css'] );

    wp_enqueue_style('vendor_css', get_template_directory_uri() . '/css/vendor.css');

    /*Add scripts*/
    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', get_template_directory_uri() . '/vendors/jquery/dist/jquery.min.js', '', '', true);

    wp_enqueue_script('jquery');

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/vendors/bootstrap-sass/assets/javascripts/bootstrap.min.js', ['jquery'], '', true );

    wp_enqueue_script('bootstrap');

    wp_register_script('slider', get_template_directory_uri() . '/vendors/slick-carousel/slick/slick.min.js', ['jquery'], '', true);

    wp_enqueue_script('slider');

    wp_register_script('main_js', get_template_directory_uri() . '/js/main.js', ['jquery'], '', true);

    wp_enqueue_script('main_js');

}
add_action( 'wp_enqueue_scripts', 'gh_exam_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom post types file.
 */
require get_template_directory() . '/inc/custom-post-types.php';
