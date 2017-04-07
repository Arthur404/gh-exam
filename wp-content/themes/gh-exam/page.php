<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

get_header(); ?>

    <section class="blog section-site">
        <div class="container">
            <div class="title">
                <h2><?php echo wp_get_document_title(); ?></h2>
                <?php if (get_theme_mod('blog-page-description') != ''): ?>
                <?php endif; ?>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part('template-parts/content', get_post_format());

            endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif; ?>
            <?php /*Pagination*/
            if (function_exists("custom_numeric_posts_nav")) {
                custom_numeric_posts_nav();
            } ?>
        </div>
    </section>

<?php
get_footer();
