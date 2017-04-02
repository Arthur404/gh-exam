<?php
/**
 * gh-exam Theme Customizer
 */

function gh_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /*--------------------------------------------------------------
    # Home page panel
    --------------------------------------------------------------*/
    $wp_customize->add_panel( 'home_page', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Home page', 'gh-exam' ),
        'description' => __( 'Settings of home page.', 'gh-exam' ),
    ) );

    /*--------------------------------------------------------------
    # Hero section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'hero-section',
        array(
            'title' => esc_html__( 'Hero settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'phone_number'
    );
    $wp_customize->add_control(
        'phone_number',
        array(
            'label' => esc_html__( 'Phone', 'gh-exam' ),
            'section' => 'hero-section',
            'type' => 'tel'
        )
    );
    $wp_customize->add_setting(
        'bg-hero'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-hero',
            array(
                'label' => esc_html__('Background image', 'gh-exam'),
                'section' => 'hero-section'
            )
        )
    );

    /*--------------------------------------------------------------
    # About section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'about-section',
        array(
            'title' => esc_html__( 'About settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'about-title'
    );
    $wp_customize->add_control(
        'about-title',
        array(
            'label' => esc_html__( 'About title', 'gh-exam' ),
            'section' => 'about-section'
        )
    );
    $wp_customize->add_setting(
        'about-description'
    );
    $wp_customize->add_control(
        'about-description',
        array(
            'label' => esc_html__( 'About description', 'gh-exam' ),
            'section' => 'about-section'
        )
    );
    $wp_customize->add_setting(
        'about-content'
    );
    $wp_customize->add_control(
        'about-content',
        array(
            'label' => esc_html__( 'About content', 'gh-exam' ),
            'section' => 'about-section',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'btn-url-about'
    );
    $wp_customize->add_control(
        'btn-url-about',
        array(
            'label' => esc_html__('Button URL'),
            'section' => 'about-section',
            'type' => 'dropdown-pages'
        )
    );
    $wp_customize->add_setting(
        'btn-text-about'
    );
    $wp_customize->add_control(
        'btn-text-about',
        array(
            'label' => esc_html__('Button text'),
            'section' => 'about-section'
        )
    );
    $wp_customize->add_setting(
        'bg-about',
        array(
                'default' => '#fff'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bg-about',
            array(
                'label' => esc_html__('Background color'),
                'section' => 'about-section'
            )
        )
    );
    $wp_customize->add_setting(
        'hide_about'
    );
    $wp_customize->add_control(
        'hide_about',
        array(
            'label' => esc_html__('Hide section'),
            'section' => 'about-section',
            'type' => 'checkbox'
        )
    );
    /*--------------------------------------------------------------
    # Services section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'services-section',
        array(
            'title' => esc_html__( 'Services settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'services-title'
    );
    $wp_customize->add_control(
        'services-title',
        array(
            'label' => esc_html__( 'Services title', 'gh-exam' ),
            'section' => 'services-section'
        )
    );
    $wp_customize->add_setting(
        'services-description'
    );
    $wp_customize->add_control(
        'services-description',
        array(
            'label' => esc_html__( 'Services description', 'gh-exam' ),
            'section' => 'services-section'
        )
    );
    $wp_customize->add_setting(
        'bg-services',
        array(
            'default' => '#eaeff3'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bg-services',
            array(
                'label' => esc_html__('Background color'),
                'section' => 'services-section'
            )
        )
    );
    $wp_customize->add_setting(
        'btn-url-services'
    );
    $wp_customize->add_control(
        'btn-url-services',
        array(
            'label' => esc_html__('Button URL'),
            'section' => 'services-section',
            'type' => 'dropdown-pages'
        )
    );
    $wp_customize->add_setting(
        'btn-text-services'
    );
    $wp_customize->add_control(
        'btn-text-services',
        array(
            'label' => esc_html__('Button text'),
            'section' => 'services-section'
        )
    );
    $wp_customize->add_setting(
        'hide_services'
    );
    $wp_customize->add_control(
        'hide_services',
        array(
            'label' => esc_html__('Hide section'),
            'section' => 'services-section',
            'type' => 'checkbox'
        )
    );
    /*--------------------------------------------------------------
    # Clients section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'clients-section',
        array(
            'title' => esc_html__( 'Clients settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'clients-title'
    );
    $wp_customize->add_control(
        'clients-title',
        array(
            'label' => esc_html__( 'Clients title', 'gh-exam' ),
            'section' => 'clients-section'
        )
    );
    $wp_customize->add_setting(
        'clients-description'
    );
    $wp_customize->add_control(
        'clients-description',
        array(
            'label' => esc_html__( 'Clients description', 'gh-exam' ),
            'section' => 'clients-section'
        )
    );
    $wp_customize->add_setting(
        'bg-clients',
        array(
            'default' => '#fff'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bg-clients',
            array(
                'label' => esc_html__('Background color'),
                'section' => 'clients-section'
            )
        )
    );
    $wp_customize->add_setting(
        'hide_clients'
    );
    $wp_customize->add_control(
        'hide_clients',
        array(
            'label' => esc_html__('Hide section'),
            'section' => 'clients-section',
            'type' => 'checkbox'
        )
    );
    /*--------------------------------------------------------------
    # News section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'news-section',
        array(
            'title' => esc_html__( 'News settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'home_page',
        )
    );
    $wp_customize->add_setting(
        'news-title'
    );
    $wp_customize->add_control(
        'news-title',
        array(
            'label' => esc_html__( 'Clients title', 'gh-exam' ),
            'section' => 'news-section'
        )
    );
    $wp_customize->add_setting(
        'news-description'
    );
    $wp_customize->add_control(
        'news-description',
        array(
            'label' => esc_html__( 'News description', 'gh-exam' ),
            'section' => 'news-section'
        )
    );
    $wp_customize->add_setting(
        'bg-news',
        array(
            'default' => '#eaeff3'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bg-news',
            array(
                'label' => esc_html__('Background color'),
                'section' => 'news-section'
            )
        )
    );
    $wp_customize->add_setting(
        'btn-url-news'
    );
    $wp_customize->add_control(
        'btn-url-news',
        array(
            'label' => esc_html__('Button URL'),
            'section' => 'news-section',
            'type' => 'dropdown-pages'
        )
    );
    $wp_customize->add_setting(
        'btn-text-news'
    );
    $wp_customize->add_control(
        'btn-text-news',
        array(
            'label' => esc_html__('Button text'),
            'section' => 'news-section'
        )
    );
    $wp_customize->add_setting(
        'hide_news'
    );
    $wp_customize->add_control(
        'hide_news',
        array(
            'label' => esc_html__('Hide section'),
            'section' => 'news-section',
            'type' => 'checkbox'
        )
    );
    /*--------------------------------------------------------------
    # Blog page panel
    --------------------------------------------------------------*/
    $wp_customize->add_panel( 'blog_page', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Blog page', 'gh-exam' ),
        'description' => __( 'Settings of blog page.', 'gh-exam' ),
    ) );

    /*--------------------------------------------------------------
    # Hero blog section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'hero-blog-section',
        array(
            'title' => esc_html__( 'Hero blog settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'blog_page',
        )
    );
    $wp_customize->add_setting(
        'bg-hero-blog'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-hero-blog',
            array(
                'label' => esc_html__('Background image', 'gh-exam'),
                'section' => 'hero-blog-section'
            )
        )
    );
    $wp_customize->add_setting(
        'blog-page-title'
    );
    $wp_customize->add_control(
        'blog-page-title',
        array(
            'label' => esc_html__('Blog post title'),
            'section' => 'hero-blog-section'
        )
    );
    $wp_customize->add_setting(
        'blog-page-description'
    );
    $wp_customize->add_control(
        'blog-page-description',
        array(
            'label' => esc_html__('Blog description'),
            'section' => 'hero-blog-section'
        )
    );

    /*--------------------------------------------------------------
    # Footer section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'footer',
        array(
            'title' => esc_html__( 'Footer settings', 'gh-exam' ),
            'priority' => 10
        )
    );
    $social = array("facebook", "google", "twitter", "linkedin");
    for ($i=0; $i<count($social); $i++) {
        $wp_customize->add_setting(
            'url_'.$social[$i]
        );
        $wp_customize->add_control(
            'url_'.$social[$i],
            array(
                'label' => esc_html__('URL '.$social[$i]),
                'section' => 'footer',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'hide_'.$social[$i]
        );
        $wp_customize->add_control(
            'hide_'.$social[$i],
            array(
                'label' => esc_html__('Hide '.$social[$i]),
                'section' => 'footer',
                'type' => 'checkbox'
            )
        );
    }
    $wp_customize->add_setting(
        'copy'
    );
    $wp_customize->add_control(
        'copy',
        array(
            'label' => esc_html__('Copyright text'),
            'section' => 'footer'
        )
    );

}
add_action( 'customize_register', 'gh_exam_customize_register' );

function custom_style() {
    ?>
    <style type="text/css">
        .home .hero {
            background: url(<?php echo get_theme_mod('bg-hero') ?>) 50% 0 /cover no-repeat, #000;
        }
        .blog .hero, .single .hero {
            background: url(<?php echo get_theme_mod('bg-hero-blog') ?>) 50% 0 /cover no-repeat, #000;
        }
        .about {
            display: <?php if(get_theme_mod('hide_about'))
                        echo "none"; ?>;
            background-color: <?php echo get_theme_mod('bg-about') ?>;
        }
        . ices {
            display: <?php if(get_theme_mod('hide_services'))
                        echo "none"; ?>;
            background-color: <?php echo get_theme_mod('bg-services') ?>;
        }
        .fb {
            display: <?php
                    if(get_theme_mod('hide_facebook') == true)
                        echo "none";
                    ?>;
        }
        .google {
            display: <?php
                    if(get_theme_mod('hide_google') == true)
                        echo "none";
                    ?>;
        }
        .tw {
            display: <?php
                    if(get_theme_mod('hide_twitter') == true)
                        echo "none";
                    ?>;
        }
        .in {
            display: <?php
                    if(get_theme_mod('hide_linkedin') == true)
                        echo "none";
                    ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'custom_style');

function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
