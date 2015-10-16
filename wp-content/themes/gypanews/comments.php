<?php

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h1><?php echo get_comments_number() ?> Comentário(s)</h1>
        <ul class="comment-list">
            <li>
                <p class="title">Nome | 12/12/2015</p>
                <p>Lorem ipsum dolor sit amet, cum diceret noluisse apeirian et, paulo choro aliquam id vim. Ea his fastidii menandri, novum abhorreant vel in, dico oblique quaeque at sed. An vitae impedit ius. Facer epicuri nec no, ludus quidam consequuntur no vix.</p>
            </li>
            <?php
            wp_list_comments( array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 100,
            ) );
            ?>
        </ul><!-- .comment-list -->

        <?php twentyfifteen_comment_nav(); ?>

    <?php endif; // have_comments() ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
    <?php endif; ?>

    <?php

    $args = array(
        'fields' => apply_filters(
            'comment_form_default_fields', array(
                'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="seu nome*" name="author" type="text" value="' .
                    esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                    '</p>'
            ,
                'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="seu e-mail*" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' />'  .
                    '</p>',
                'url'    => '<p class="comment-form-url">' .
                    '<input id="url" name="url" placeholder="website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .

                    '</p>'
            )
        ),
        'comment_field' => '<p class="comment-form-comment">' .
            '<textarea id="comment" name="comment" placeholder="seu comentário" aria-required="true"></textarea>' .
            '</p>',
        'comment_notes_after' => '',
        'title_reply' => '<h2>Deixe um comentário</h2>    '
    );

    ?>

    <?php comment_form($args); ?>

</div><!-- .comments-area -->