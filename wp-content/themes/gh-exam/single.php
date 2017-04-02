<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

    <section class="blog-post">
        <div class="container section">
            <div class="title">
                <?php if (get_theme_mod('blog-page-title') != ''): ?>
                    <h2><?php echo get_theme_mod('blog-page-title'); ?></h2>
                <?php endif; ?>
                <?php if (get_theme_mod('blog-page-description') != ''): ?>
                    <p><?php echo get_theme_mod('blog-page-description'); ?></p>
                <?php endif; ?>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part('template-parts/content', 'single');

            endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif; ?>

        </div>
    </section>
    <?php if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif; ?>

<?php
get_footer();
