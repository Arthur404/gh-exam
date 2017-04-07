<?php
/**
 * Custom list comments.
 */
function exam_list_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="row">
        <div class="comment-author vcard col-xs-2">
            <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </div>
        <div class="comments-text col-xs-10">
            <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                    <?php printf( __( '<cite class="author">%s</cite>' ), get_comment_author_link() ); ?>
                    <?php
                    /* translators: 1: date, 2: time */
                    printf( __('<time>%s</time>'), get_comment_date('F-j-Y') ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
                ?>
            </div>
            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </div>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
        <br />
    <?php endif; ?>
    <?php if ( 'div' != $args['style'] ) : ?>
        </div>
    <?php endif; ?>
    <?php
}
