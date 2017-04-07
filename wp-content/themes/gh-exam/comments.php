<?php
/**
 * The template for displaying comments
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <div class="title">
            <h2><?php
                echo esc_html__('Comments', 'gh-exam');
                ?></h2>
            <p><?php
                echo esc_html__('Suggestions & feedback', 'gh-exam');
                ?></p>
        </div>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'gh-exam' ); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'gh-exam' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'gh-exam' ) ); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation. ?>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ul',
                'short_ping' => true,
                'avatar_size'=> 83,
                'callback' => 'exam_list_comment',
                'reply_text' => '<i class="fa fa-reply"></i>'
            ) );
            ?>
        </ol><!-- .comment-list -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'gh-exam' ); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'gh-exam' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'gh-exam' ) ); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-below -->
            <?php
        endif; // Check for comment navigation.

    endif; // Check for have_comments().


    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'gh-exam' ); ?></p>
        <?php
    endif; ?>
    <section class="contact-form">
        <div class="section-site">
            <?php
            $comments_arg = array(
                'fields' => array(
                    'author' => '<p class="comment-form-author"><label for="author">' . esc_html__( 'Name ', 'gh-exam' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></p>',
                    'email'  => '<p class="comment-form-email"><label for="email">' . esc_html__( 'Email Address ', 'gh-exam' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></p>',
                    'phone'  => '<p class="comment-form-phone"><label for="phone">' . esc_html__( 'Phone number ', 'gh-exam' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input id="phone" name="phone" type="tel" value="' . esc_attr(  $commenter['comment_author_phone'] ) . '" ' . $aria_req . ' /></p>'
                ),
                'class_submit' => 'btn',
                'label_submit' => 'Submit Now',
                'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Message ', 'gh-exam' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
                'title_reply' => 'Leave your comment',
                'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>'
            );

            comment_form($comments_arg);
            ?>
        </div>
    </section>
</div><!-- #comments -->