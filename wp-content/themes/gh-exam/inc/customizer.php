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
    $wp_customize->add_setting(
        'title-hero'
    );
    $wp_customize->add_control(
        'title-hero',
        array(
            'label' => esc_html__('Title hero', 'gh-exam'),
            'section' => 'hero-section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'title-hero-after'
    );
    $wp_customize->add_control(
        'title-hero-after',
        array(
            'label' => esc_html__('After title hero', 'gh-exam'),
            'section' => 'hero-section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'title-after-description'
    );
    $wp_customize->add_control(
        'title-after-description',
        array(
            'label' => esc_html__('After description', 'gh-exam'),
            'section' => 'hero-section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'description-hero'
    );
    $wp_customize->add_control(
        'description-hero',
        array(
            'label' => esc_html__('Description hero', 'gh-exam'),
            'section' => 'hero-section',
            'type' => 'textarea',
        )
    );
    $wp_customize->add_setting(
        'background-color-hero',
        array(
            'default' => '#ff4848'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'background-color-hero',
            array(
                'label' => esc_html__('Background color', 'gh-exam'),
                'section' => 'hero-section'
            )
        )
    );
    $section = array('services', 'portfolio');
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
                'type' => 'textarea',
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
    }
    /*--------------------------------------------------------------
    # Welcome section
    --------------------------------------------------------------*/
    $wp_customize->add_section(
        'welcome-section',
        array(
            'title' => esc_html__( 'Welcome settings', 'gh-exam' ),
            'priority' => 10,
            'panel' => 'home_page'
        )
    );
    $wp_customize->add_setting(
        'bg-welcome'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-welcome',
            array(
                'label' => esc_html__('Background image', 'gh-exam'),
                'section' => 'welcome-section'
            )
        )
    );
    $wp_customize->add_setting(
        'title-welcome'
    );
    $wp_customize->add_control(
        'title-welcome',
        array(
            'label' => esc_html__('Welcome title', 'gh-exam'),
            'section' => 'welcome-section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'description-welcome'
    );
    $wp_customize->add_control(
        'description-welcome',
        array(
            'label' => esc_html__('Welcome description', 'gh-exam'),
            'section' => 'welcome-section',
            'type' => 'textarea',
        )
    );

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
    $wp_customize->add_setting(
        'title-blog'
    );
    $wp_customize->add_control(
        'title-blog',
        array(
            'label' => esc_html__('Blog title'),
            'section' => 'hero-blog-section',
            'type' => 'text',
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
    $wp_customize->add_panel( 'footer-panel', array(
        'priority' => 1,
        'title' => esc_html__( 'Footer', 'gh-exam' ),
        'description' => esc_html__( 'Settings of footer.', 'gh-exam' ),
    ) );
    $wp_customize->add_section(
        'footer',
        array(
            'title' => esc_html__( 'Footer settings', 'gh-exam' ),
            'priority' => 20,
            'panel' => 'footer-panel'
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
    $wp_customize->add_setting(
        'bg-contact-us'
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-contact-us',
            array(
                'label' => esc_html__('Background image', 'gh-exam'),
                'section' => 'footer'
            )
        )
    );
    $wp_customize->add_section(
        'contact-us',
        array(
            'title' => esc_html__( 'Contact settings', 'gh-exam' ),
            'priority' => 20,
            'panel' => 'footer-panel'
        )
    );
    $wp_customize->add_setting(
        'title-contact-us'
    );
    $wp_customize->add_control(
        'title-contact-us',
        array(
            'label' => esc_html__('Title text'),
            'section' => 'contact-us',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'description-contact-us'
    );
    $wp_customize->add_control(
        'description-contact-us',
        array(
            'label' => esc_html__('Description text'),
            'section' => 'contact-us',
            'type' => 'textarea',
        )
    );
    $wp_customize->add_setting(
        'phone_number'
    );
    $wp_customize->add_control(
        'phone_number',
        array(
            'label' => esc_html__('Phone number'),
            'section' => 'contact-us',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'address'
    );
    $wp_customize->add_control(
        'address',
        array(
            'label' => esc_html__('Address'),
            'section' => 'contact-us',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'map'
    );
    $wp_customize->add_control(
        'map',
        array(
            'label' => esc_html__('Map iframe'),
            'section' => 'contact-us',
            'type' => 'text'
        )
    );
    $wp_customize->add_section(
        'clients-section',
        array(
            'title' => esc_html__( 'Clients settings', 'gh-exam' ),
            'priority' => 20,
            'panel' => 'footer-panel'
        )
    );
    $wp_customize->add_setting(
        'title-clients'
    );
    $wp_customize->add_control(
        'title-clients',
        array(
            'label' => esc_html__('Clients title'),
            'section' => 'clients-section',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'background-color-clients',
        array(
            'default' => '#ff4848'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'background-color-clients',
            array(
                'label' => esc_html__('Background color', 'gh-exam'),
                'section' => 'clients-section'
            )
        )
    );
}
add_action( 'customize_register', 'gh_exam_customize_register' );

function custom_style() {
    ?>
    <style type="text/css">
        .home .hero {
            background-color: <?php echo get_theme_mod('background-color-hero') ?> ;
        }
        .blog .hero, .single .hero {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo get_theme_mod('bg-hero-blog') ?>) 50% 0 /cover no-repeat;
        }
        .services {
            display: <?php if(get_theme_mod('hide-services')) echo "none"; ?>;
            background-color: <?php echo get_theme_mod('background-color-services'); ?>;
        }
        .portfolio {
            display: <?php if(get_theme_mod('hide-portfolio')) echo "none"; ?>;
            background-color: <?php echo get_theme_mod('background-color-portfolio'); ?>;
        }
        .contact-us {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php echo get_theme_mod('bg-contact-us') ?>) 50% 0 /cover no-repeat;
        }
    </style>
    <?php
}
add_action('wp_head', 'custom_style');

function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
