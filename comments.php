<?php
/**
 * The template for displaying comments
 *
 * @package FunLearnSmile
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        
        <h2 class="comments-title font-fredoka font-bold text-3xl md:text-4xl text-deep-blue mb-8">
            <?php
            $comment_count = get_comments_number();
            if ( '1' === $comment_count ) {
                printf(
                    esc_html__( '1 Comment', 'funlearnsmile' )
                );
            } else {
                printf(
                    esc_html( _n( '%s Comment', '%s Comments', $comment_count, 'funlearnsmile' ) ),
                    esc_html( number_format_i18n( $comment_count ) )
                );
            }
            ?>
        </h2>

        <ol class="comment-list space-y-6 mb-12">
            <?php
            wp_list_comments(
                array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 64,
                    'callback'    => 'funlearnsmile_comment',
                )
            );
            ?>
        </ol>

        <?php
        the_comments_navigation();

        if ( ! comments_open() ) :
            ?>
            <p class="no-comments bg-gray-100 p-6 rounded-2xl text-center font-nunito text-gray-600">
                <?php esc_html_e( 'Comments are closed.', 'funlearnsmile' ); ?>
            </p>
            <?php
        endif;

    endif;

    // Comment Form
    comment_form(
        array(
            'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title font-fredoka font-bold text-3xl text-deep-blue mb-6">',
            'title_reply_after'  => '</h3>',
            'class_form'         => 'comment-form bg-gradient-to-br from-sky-blue/5 to-grass-green/5 rounded-3xl p-8 md:p-10',
            'class_submit'       => 'btn btn-primary',
            'submit_button'      => '<button type="submit" class="btn btn-primary">%4$s</button>',
            'comment_field'      => '<p class="comment-form-comment mb-6"><label for="comment" class="block font-nunito font-semibold text-gray-700 mb-2">' . esc_html__( 'Comment', 'funlearnsmile' ) . ' <span class="required text-soft-coral">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" class="w-full px-4 py-3 border-2 border-gray-200 rounded-2xl focus:border-sky-blue focus:ring-4 focus:ring-sky-blue/20 transition-all duration-300 font-nunito"></textarea></p>',
            'fields'             => array(
                'author' => '<p class="comment-form-author mb-6"><label for="author" class="block font-nunito font-semibold text-gray-700 mb-2">' . esc_html__( 'Name', 'funlearnsmile' ) . ' <span class="required text-soft-coral">*</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245" required="required" class="w-full px-4 py-3 border-2 border-gray-200 rounded-2xl focus:border-sky-blue focus:ring-4 focus:ring-sky-blue/20 transition-all duration-300 font-nunito" /></p>',
                'email'  => '<p class="comment-form-email mb-6"><label for="email" class="block font-nunito font-semibold text-gray-700 mb-2">' . esc_html__( 'Email', 'funlearnsmile' ) . ' <span class="required text-soft-coral">*</span></label><input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" required="required" class="w-full px-4 py-3 border-2 border-gray-200 rounded-2xl focus:border-sky-blue focus:ring-4 focus:ring-sky-blue/20 transition-all duration-300 font-nunito" /></p>',
                'url'    => '<p class="comment-form-url mb-6"><label for="url" class="block font-nunito font-semibold text-gray-700 mb-2">' . esc_html__( 'Website', 'funlearnsmile' ) . '</label><input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" class="w-full px-4 py-3 border-2 border-gray-200 rounded-2xl focus:border-sky-blue focus:ring-4 focus:ring-sky-blue/20 transition-all duration-300 font-nunito" /></p>',
            ),
        )
    );
    ?>

</div>