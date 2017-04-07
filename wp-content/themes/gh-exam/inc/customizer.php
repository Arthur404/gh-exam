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
        'priority' => 1,
        'title' => esc_html__( 'Home page', 'gh-exam' ),
        'description' => esc_html__( 'Settings of home page.', 'gh-exam' ),
    ) );

    /*--------------------------------------------------------------
    # Hero section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'hero-section',
        array(
            'title' => esc_html__( 'Hero settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'home_page'
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
    $section = array('about-us', 'services', 'portfolio');
    for ($i=0; $i<count($section); $i++) {
        $wp_customize->add_section(
            $section[$i].'section',
            array(
                'title' => esc_html__( 'Settings '.$section[$i], 'gh-exam' ),
                'priority' => 11,
                'panel' => 'home_page'
            )
        );
        $wp_customize->add_setting(
            'title-'.$section[$i]
        );
        $wp_customize->add_control(
            'title-'.$section[$i],
            array(
                'label' => esc_html__('Title '.$section[$i], 'gh-exam'),
                'section' => $section[$i].'section',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'description-'.$section[$i]
        );
        $wp_customize->add_control(
            'description-'.$section[$i],
            array(
                'label' => esc_html__('Description '.$section[$i], 'gh-exam'),
                'section' => $section[$i].'section',
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            'background-color-'.$section[$i],
            array(
                'default' => '#fff'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'background-color-'.$section[$i],
                array(
                    'label' => esc_html__('Background color', 'gh-exam'),
                    'section' => $section[$i].'section'
                )
            )
        );
        $wp_customize->add_setting(
            'hide-'.$section[$i]
        );
        $wp_customize->add_control(
            'hide-'.$section[$i],
            array(
                'label' => esc_html__('Hide section', 'gh-exam'),
                'section' => $section[$i].'section',
                'type' => 'checkbox'
            )
        );
        $wp_customize->add_setting(
            'btn-url-'.$section[$i]
        );
        $wp_customize->add_control(
            'btn-url-'.$section[$i],
            array(
                'label' => esc_html__('Button URL', 'gh-exam'),
                'section' => $section[$i].'section',
                'type'     => 'dropdown-pages'
            )
        );
        $wp_customize->add_setting(
            'btn-text-'.$section[$i]
        );
        $wp_customize->add_control(
            'btn-text-'.$section[$i],
            array(
                'label' => esc_html__('Button text', 'gh-exam'),
                'section' => $section[$i].'section',
                'type' => 'text'
            )
        );
    }

    /*--------------------------------------------------------------
    # Blog page panel
    --------------------------------------------------------------*/
    $wp_customize->add_panel( 'blog_page', array(
        'priority' => 2,
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

    /*--------------------------------------------------------------
    # Social section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'social',
        array(
            'title' => esc_html__( 'Social button settings', 'gh-exam' ),
            'priority' => 3
        )
    );
    $social = array("facebook", "google", "twitter", "linkedin", "pinterest", "instagram", "dribbble", "youtube");
    for ($i=0; $i<count($social); $i++) {
        $wp_customize->add_setting(
            'url_'.$social[$i]
        );
        $wp_customize->add_control(
            'url_'.$social[$i],
            array(
                'label' => esc_html__('URL '.$social[$i]),
                'section' => 'social',
                'type' => 'text',
            )
        );
    }

    /*--------------------------------------------------------------
    # Footer section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'footer',
        array(
            'title' => esc_html__( 'Footer settings', 'gh-exam' ),
            'priority' => 20
        )
    );
    $wp_customize->add_setting(
        'copy'
    );
    $wp_customize->add_control(
        'copy',
        array(
            'label' => esc_html__('Copyright text'),
            'section' => 'footer',
            'type' => 'text',
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
        .blog .hero {
            background: url(<?php echo get_theme_mod('bg-hero-blog') ?>) 50% 0 /cover no-repeat, #000;
        }
        .services {
            display: <?php if(get_theme_mod('hide-services')) echo "none"; ?>;
            background-color: <?php echo get_theme_mod('background-color-services'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'custom_style');

function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
