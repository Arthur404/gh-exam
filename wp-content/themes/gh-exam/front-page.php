<?php
/*
Home page
*/
?>

<?php get_header() ?>
<section class="services section-site">
    <div class="container">
        <div class="title">
            <?php if (get_theme_mod('title-services') != ''): ?>
                <h2><?php echo get_theme_mod('title-services'); ?></h2>
            <?php endif; ?>
            <?php if (get_theme_mod('description-services') != ''): ?>
                <p><?php echo get_theme_mod('description-services'); ?></p>
            <?php endif; ?>
        </div>
        <ul class="row services-category">

            <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => 3,

            );
            $the_query = new WP_Query($args);
            if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                <li class="col-sm-4">
                    <div class="services-title">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    </div>
                    <div class="services-icon">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                    <div class="services-content">
                        <?php the_content(); ?>
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
