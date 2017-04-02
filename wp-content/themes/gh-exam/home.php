<?php
/*
Blog page
*/
?>

<?php get_header() ?>
<section class="blog">
    <div class="container section">
        <div class="title">
            <h2><?php echo wp_get_document_title(); ?><?php
                echo esc_html__(' Page', 'gh-exam');
                ?></h2>
            <?php if (get_theme_mod('blog-page-description') != ''): ?>
                <p><?php echo get_theme_mod('blog-page-description'); ?></p>
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
<?php get_footer() ?>