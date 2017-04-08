<?php
/*
Blog page
*/
?>

<?php get_header() ?>
<section class="blog section-site">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                        <div class="col-sm-6">
                <?php get_template_part('template-parts/content', get_post_format());?>
                        </div>
                <?php endwhile;
                    else :
                        get_template_part( 'template-parts/content', 'none' );?>
                    <?php endif; ?>
                    <?php /*Pagination*/
                    if (function_exists("custom_numeric_posts_nav")) {
                        custom_numeric_posts_nav();
                    } ?>
                </div>
            </div>
            <div class="col-sm-4">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>