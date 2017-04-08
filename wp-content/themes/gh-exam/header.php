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

                <div class="intro-hero">
                    <div class="row">
                        <div class="col-sm-6 bg-hero">
                            <?php if (get_theme_mod('bg-hero')): ?>
                                <img src="<?php echo get_theme_mod('bg-hero') ?>" alt="<?php echo get_theme_mod('bg-hero') ?>">
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-6">
                            <?php if (get_theme_mod('title-hero') != ''): ?>
                                <h2><?php echo get_theme_mod('title-hero'); ?></h2>
                            <?php endif; ?>
                            <?php if (get_theme_mod('title-hero-after') != ''): ?>
                                <h3><?php echo get_theme_mod('title-hero-after'); ?></h3>
                            <?php endif; ?>
                            <?php if (get_theme_mod('title-after-description') != ''): ?>
                                <span class="num-clients"><?php echo get_theme_mod('title-after-description'); ?></span>
                            <?php endif; ?>
                            <?php if (get_theme_mod('description-hero') != ''): ?>
                                <p><?php echo get_theme_mod('description-hero'); ?></p>
                            <?php endif; ?>
                        </div>
                        <span class="scroll"></span>
                    </div>
                </div>
            <?php else : ?>
                <div class="intro-hero">
                    <div class="title">
                        <div class="title">
                            <h2><?php echo wp_get_document_title(); ?></h2>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <div id="content" class="site-content">
