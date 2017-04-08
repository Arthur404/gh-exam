<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <div class="entry-post">
            <div class="height-block">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="cover">
                        <?php the_post_thumbnail(); ?>
                        <?php if ( is_home() ) : ?>
                            <div class="link-more">
                                <a href=""><?php get_permalink(); ?><i class="fa fa-share"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="entry-content">
                    <?php if ( is_single() ) :
                        the_title( '<div class="title"><h2>', '</h2></div>' );
                        the_content();
                    else :
                        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        the_excerpt();
                    endif; ?>
                </div>
            </div>
            <?php if ( is_home() ) : ?>
            <div class="date">
                <time><?php echo get_the_date('d,m,Y'); ?></time>
            </div>
            <?php endif; ?>

        </div>

</article><!-- #post-## -->
