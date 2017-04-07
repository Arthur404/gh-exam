<?php
/**
 * Created by PhpStorm
 */
?>

<ul class="social-btn">
    <?php if (get_theme_mod('url_facebook')) :?>
    <li class="fb">
        <a href="<?php echo get_theme_mod('url_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
    </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_google')) :?>
    <li class="google">
        <a href="<?php echo get_theme_mod('url_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
    </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_twitter')) :?>
    <li class="tw">
        <a href="<?php echo get_theme_mod('url_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
    </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_linkedin')) :?>
    <li class="in">
        <a href="<?php echo get_theme_mod('url_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
    </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_pinterest')) :?>
        <li class="pin">
            <a href="<?php echo get_theme_mod('url_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_instagram')) :?>
        <li class="inst">
            <a href="<?php echo get_theme_mod('url_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_dribbble')) :?>
        <li class="drib">
            <a href="<?php echo get_theme_mod('url_dribbble'); ?>" target="_blank"><i class="fa fa-dribbble"></i></a>
        </li>
    <?php endif; ?>
    <?php if (get_theme_mod('url_youtube')) :?>
        <li class="you">
            <a href="<?php echo get_theme_mod('url_youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
        </li>
    <?php endif; ?>
</ul>
