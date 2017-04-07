<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="nav-header">
                <h1 class="logo">
                    <?php the_custom_logo(); ?>
                </h1>
            </div>
            <nav class="main-nav">
                <button class="nav-btn open-btn" id="open-nav">
                    <i class="fa fa-bars"></i>
                </button>
                <button class="nav-btn close-btn remove-btn" id="close-nav">
                    <i class="fa fa-times"></i>
                </button>
                <?php wp_nav_menu(array('them_location' => 'menu-1', 'container' => false, 'menu_class' => 'navigation')) ?>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">

            <?php if ( is_front_page() ) : ?>
                <ul class="slider-hero">
                    <?php
                    $args = array(
                        'post_type' => 'slider-hero',
                        'posts_per_page' => 10
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

                        <li class="slide">
                            <div class="intro-hero">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content( 'Read more' ); ?>
                            </div>
                        </li>

                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>

        </div>
    </section>

    <div id="content" class="site-content">
