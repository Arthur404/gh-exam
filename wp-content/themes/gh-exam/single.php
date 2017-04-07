<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

    <section class="blog section-site">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                        get_template_part('template-parts/content', get_post_format());

                    endwhile;
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif; ?>
                    <?php if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif; ?>
                </div>
                <div class="col-sm-4">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
