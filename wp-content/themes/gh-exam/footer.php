<?php
/**
 * The template for displaying the footer
 */

?>

	</div><!-- #content -->
    <section class="clients section-site">
        <div class="container">
            <div class="title">
                <?php if (get_theme_mod('title-clients') != ''): ?>
                    <h2><?php echo get_theme_mod('title-clients'); ?></h2>
                <?php endif; ?>
            </div>
            <ul class="slider-clients">
                <?php
                $args = array(
                    'post_type' => 'clients',
                    'posts_per_page' => 10
                );
                $the_query = new WP_Query($args);
                if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

                    <li class="slide">
                        <div class="logo-clients">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                    </li>

                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="title">
                        <?php if (get_theme_mod('title-contact-us') != ''): ?>
                            <h2><?php echo get_theme_mod('title-contact-us'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_theme_mod('description-contact-us') != ''): ?>
                            <p><?php echo get_theme_mod('description-contact-us'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="tel">
                        <?php if (get_theme_mod('phone_number') != ''): ?>
                        <a href="tel:<?php echo get_theme_mod('phone_number'); ?>"><?php echo get_theme_mod('phone_number'); ?></a>
                        <?php endif; ?>
                    </div>
                    <address class="adr">
                        <?php if (get_theme_mod('address') != ''): ?>
                            <?php echo get_theme_mod('address'); ?>
                        <?php endif; ?>
                    </address>
                    <div class="map">
                        <?php if (get_theme_mod('map')): ?>
                            <?php echo get_theme_mod('map'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-footer' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
            <div class="footer-logo">
                <?php the_custom_logo(); ?>
            </div>
            <span class="copy">
                <?= date('Y ') ?>&copy; <?php echo get_theme_mod('copy'); ?>
            </span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
