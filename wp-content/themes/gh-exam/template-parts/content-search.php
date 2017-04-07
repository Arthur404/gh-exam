<?php
/**
 * Template part for displaying results in search pages
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php gh_exam_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    <div class="entry-content">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="cover">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <?php
        the_content( 'Read more' );
        ?>
    </div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gh_exam_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
