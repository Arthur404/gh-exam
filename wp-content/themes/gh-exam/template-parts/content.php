<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<div class="title"><h2>', '</h2></div>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php gh_exam_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
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
