<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>

    <section class="blog section-site">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="title">
                        <h3><?php printf( esc_html__( 'Search Results for: %s', 'gh-exam' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
                    </div>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'search' );

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
