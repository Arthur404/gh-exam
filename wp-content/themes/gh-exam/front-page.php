<?php
/*
Home page
*/
?>

<?php get_header() ?>
<section class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php if (get_theme_mod('bg-welcome')): ?>
                    <img src="<?php echo get_theme_mod('bg-welcome') ?>" alt="<?php echo get_theme_mod('bg-welcome') ?>">
                <?php endif; ?>
            </div>
            <div class="col-sm-6">
                <div class="welcome-content">
                    <?php if (get_theme_mod('title-welcome') != ''): ?>
                        <h2><?php echo get_theme_mod('title-welcome'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_theme_mod('description-welcome') != ''): ?>
                        <p><?php echo get_theme_mod('description-welcome'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <div class="services-icon">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                    <div class="services-title">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    </div>
                    <div class="services-content">
                        <?php the_content(); ?>
                    </div>
                </li>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
<section class="portfolio section-site">
    <div class="container">
        <div class="title">
            <?php if (get_theme_mod('title-portfolio') != ''): ?>
                <h2><?php echo get_theme_mod('title-portfolio'); ?></h2>
            <?php endif; ?>
            <?php if (get_theme_mod('description-portfolio') != ''): ?>
                <p><?php echo get_theme_mod('description-portfolio'); ?></p>
            <?php endif; ?>
        </div>
        <div id="options">
            <ul id="filters" class="btn-filter flex-content">
                <li><button class="btn-work is-checked" data-filter="*">All</button></li>
                <li><button class="btn-work" data-filter=".Design">Design</button></li>
                <li><button class="btn-work" data-filter=".Development">Development</button></li>
                <li><button class="btn-work" data-filter=".SEO">SEO</button></li>
                <li><button class="btn-work" data-filter=".Others">Others</button></li>
            </ul>
        </div>
        <ul class="isotope our-works row">
        <?php
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6,

        );
        $the_query = new WP_Query($args);
        if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

            <?php $category = get_the_category(); ?>

            <li class="item col-sm-4 <?php echo $category[1]->cat_name ?> <?php echo $category[2]->cat_name ?> <?php echo $category[3]->cat_name ?>">
                <div class="category">
                    <div class="hover-wrap">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                ?>
            </li>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </ul>
    </div>
</section>
<?php get_footer() ?>
