<?php
/**
 * The template for displaying the footer
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
            <div class="row">
                <div class="footer-logo col-sm-4">
                    <div class="footer-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <span class="copy">
                        <?= date('Y ') ?>&copy; <?php echo get_theme_mod('copy'); ?>
                    </span>
                    <?php get_template_part( 'template-parts/content', 'social' ); ?>
                </div>
                <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-footer' ); ?>
                <?php endif; ?>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
