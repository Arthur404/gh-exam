<?php
/*
Home page
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
                'post_type' => 'services',
                'posts_per_page' => 4,

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
<section class="clients">
    <div class="container section">
        <div class="title">
            <?php if (get_theme_mod('clients-title') != ''): ?>
                <h2><?php echo get_theme_mod('clients-title'); ?></h2>
            <?php endif; ?>
            <?php if (get_theme_mod('clients-description') != ''): ?>
                <p><?php echo get_theme_mod('clients-description'); ?></p>
            <?php endif; ?>
        </div>
        <ul class="row slider-main slider-clients">

            <?php
            $args = array(
                'post_type' => 'clients',
                'posts_per_page' => 3
            );
            $the_query = new WP_Query($args);
            if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                <li class="col-xs-12 col-sm-6">
                    <?php the_content() ?>
                    <div class="row flex-content">
                        <div class="col-xs-3 client-avatar">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                        <div class="col-xp-9 client-name">
                            <h3><?php the_title() ?></h3>
                            <span><?= get_post_meta($post->ID, 'position', true) ?></span>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </ul>
    </div>
</section>

<section class="news">
    <div class="container section">
        <div class="title">
            <?php if (get_theme_mod('news-title') != ''): ?>
                <h2><?php echo get_theme_mod('news-title'); ?></h2>
            <?php endif; ?>
            <?php if (get_theme_mod('news-description') != ''): ?>
                <p><?php echo get_theme_mod('news-description'); ?></p>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 news-view">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'news'
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query -> have_posts() ) : $the_query -> the_post();
                        update_post_meta(get_the_ID(), 'visited_count', get_post_meta(get_the_ID(), 'visited_count', true)+1);
                        ?>
                        <div class="col-xs-2 info">
                            <time datetime="2015-10-30"><?= get_the_date('j'); ?><span><?= get_the_date('M-Y'); ?></span>
                            </time>
                            <div class="com">
                                <i class="progress control"></i>
                                <i class="fa fa-comments-o comment"></i>
                                <p><span class="count-com"><?php comments_number('0', '1', '%');?></span> - Com</p>
                            </div>
                            <div class="view">
                                <i class="progress control-view"></i>
                                <i class="icon-view views"></i>
                                <p><span class="count-view"><?= get_post_meta($post->ID, 'visited_count', true) ?></span> - View</p>
                            </div>
                        </div>
                        <div class="col-xs-10 posters">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
                            <?php the_content() ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 news-feed">
                <ul>

                    <?php
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 2
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                        <li>
                            <h3><?php the_title() ?></h3>
                            <time><?= get_the_date('j-M-Y'); ?></time>
                            <?php the_content() ?>
                        </li>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                </ul>
                <?php if (get_theme_mod('btn-text-news') != ''): ?>
                    <button class="more-link"><a href="<?php echo get_permalink(get_theme_mod('btn-url-news')); ?>"><?php echo get_theme_mod('btn-text-news'); ?></a></button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
