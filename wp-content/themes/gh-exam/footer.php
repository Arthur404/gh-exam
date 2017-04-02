<?php
/**
 * The template for displaying the footer
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
                <div class="footer-logo col-sm-3">
                    <div class="footer-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <span class="copy">
                        <?= date('Y ') ?><?php echo get_theme_mod('copy'); ?>
                    </span>
                    <ul class="social flex-content">
                        <li class="fb">
                            <a href="<?php echo get_theme_mod('url_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="google">
                            <a href="<?php echo get_theme_mod('url_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="tw">
                            <a href="<?php echo get_theme_mod('url_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="in">
                            <a href="<?php echo get_theme_mod('url_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 col-md-offset-1">
                    <h3><?php
                        echo esc_html__('Navigation', 'gh-exam');
                        ?></h3>
                    <?php wp_nav_menu(array('them_location' => 'menu', 'container' => false, 'menu_class' => 'navigation')) ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
