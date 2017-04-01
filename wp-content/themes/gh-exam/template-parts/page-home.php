<?php
/*
Template Name: Home page
*/
?>

<?php get_header() ?>
    <section class="about">
        <div class="container section">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <div class="title">
                        <?php if (get_theme_mod('about-title') != ''): ?>
                        <h2><?php echo get_theme_mod('about-title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_theme_mod('about-description') != ''): ?>
                        <p><?php echo get_theme_mod('about-description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <div class="about-content">
                        <?php if (get_theme_mod('about-content') != ''): ?>
                            <p><?php echo get_theme_mod('about-content'); ?></p>
                        <?php endif; ?>
                        <?php if (get_theme_mod('btn-text-about') != ''): ?>
                        <a class="more-link" href="<?php echo get_permalink(get_theme_mod('btn-url-about')); ?>"><?php echo get_theme_mod('btn-text-about'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container section pyramid">
            <div class="title">
                <?php if (get_theme_mod('services-title') != ''): ?>
                    <h2><?php echo get_theme_mod('services-title'); ?></h2>
                <?php endif; ?>
                <?php if (get_theme_mod('services-description') != ''): ?>
                    <p><?php echo get_theme_mod('services-description'); ?></p>
                <?php endif; ?>
            </div>
            <ul class="row services-category">

                <?php
                $args = array(
                    'post_type' => 'services'
                );
                $the_query = new WP_Query($args);
                if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                <li class="col-xs-12 col-sm-6">
                    <div class="row">
                        <div class="col-xs-2 services-icon">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                        <div class="col-xs-10 services-content">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <?php if (get_theme_mod('btn-text-services') != ''): ?>
                    <button class="more-link"><a href="<?php echo get_permalink(get_theme_mod('btn-url-services')); ?>"><?php echo get_theme_mod('btn-text-services'); ?></a></button>
                <?php endif; ?>
            </ul>
        </div>
    </section>
<?php get_footer() ?>
