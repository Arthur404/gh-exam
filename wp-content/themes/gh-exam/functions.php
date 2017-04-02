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
		'name'          => esc_html__( 'Widget footer', 'gh-exam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gh-exam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
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

add_filter('document_title_parts', function( $parts ){
    if( isset($parts['site']) ) unset($parts['site']);
    return $parts;
});

add_filter('excerpt_more', function($more) {
    return '';
});

add_filter('comment_form_fields', 'exam_reorder_comment_fields' );
function exam_reorder_comment_fields( $fields ){
    // die(print_r( $fields )); // посмотрим какие поля есть

    $new_fields = array(); // сюда соберем поля в новом порядке

    $myorder = array('author','email','phone','comment'); // нужный порядок

    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }

    // если остались еще какие-то поля добавим их в конец
    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;

    return $new_fields;
}

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

/**
 * Load custom Pagination file.
 */
require get_template_directory() . '/inc/custom-pagination.php';

/**
 * Custom list comments.
 */
function exam_list_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="row">
        <div class="comment-author vcard col-xs-2">
            <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </div>
        <div class="comments-text col-xs-10">
            <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                    <?php printf( __( '<cite class="author">%s</cite>' ), get_comment_author_link() ); ?>
                    <?php
                    /* translators: 1: date, 2: time */
                    printf( __('<time>%s</time>'), get_comment_date('F-j-Y') ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
                ?>
            </div>
            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </div>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
        <br />
    <?php endif; ?>
    <?php if ( 'div' != $args['style'] ) : ?>
        </div>
    <?php endif; ?>
    <?php
}
