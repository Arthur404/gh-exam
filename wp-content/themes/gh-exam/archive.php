<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

    <section class="blog section-site">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="title">
                        <?php
                        the_archive_title( '<h3 class="page-title">', '</h3>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </div>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif; ?>
                    <?php /*Pagination*/
                    if (function_exists("custom_numeric_posts_nav")) {
                        custom_numeric_posts_nav();
                    } ?>
                </div>
                <div class="col-sm-4">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
