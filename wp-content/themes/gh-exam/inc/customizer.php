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
}
add_action( 'customize_register', 'gh_exam_customize_register' );

function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
