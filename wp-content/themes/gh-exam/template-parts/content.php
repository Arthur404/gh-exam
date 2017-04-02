<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article row'); ?>>
    <div class="avatar-blog col-xs-2 col-md-1">
        <?php echo get_avatar( $email, 70, '', $name ); ?>
    </div>
    <div class="col-sm-10 col-md-11 blog-heading">
        <a href="<?php the_permalink(); ?>"><h3><?php the_title() ?></h3></a>
        <div class="date">
                        <span><?php
                            echo esc_html__('Posted by:', 'gh-exam');
                            ?><span class="author"><?php the_author(); ?></span>,
                            <time>
                            <?= get_the_date('F-j-Y'); ?>
                            </time>
                        </span>
        </div>
        <div class="cover">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
            ?>
        </div>
        <?php the_excerpt() ?>
        <span><?php
            echo esc_html__('Share: ', 'gh-exam');
            ?></span>
        <ul class="share">
            <li class="fb">
                <a href="<?php echo get_theme_mod('url_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="google">
                <a href="<?php echo get_theme_mod('url_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
            </li>
            <li class="tw">
                <a href="<?php echo get_theme_mod('url_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
        </ul>
        <a href="<?php the_permalink(); ?>" class="btn"><?php
            echo esc_html__('Read more', 'gh-exam');
            ?></a>
    </div>
</article><!-- #post-## -->
