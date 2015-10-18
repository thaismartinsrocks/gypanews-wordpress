<div class="comments col-xs-12">
    <div class="col-xs-12">
    <a name="comments"></a>
    <?php if ( have_comments() ) : ?>
        <h2><?php echo get_comments_number() ?> Comentário(s)</h2>
        <ul>
            <?php
                wp_list_comments( array(
                    'callback' => 'custom_comment',
                    'avatar_size' => 100,
                ));
            ?>
        </ul>
    <?php endif; ?>

    <?php
    $args = array(
        'fields' => apply_filters(
            'comment_form_default_fields', array(
                'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Seu Nome*" name="author" type="text" value="' .
                    esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                    '</p>'
            ,
                'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="Seu Email*" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' />'  .
                    '</p>',
                'url'    => '<p class="comment-form-url">' .
                    '<input id="url" name="url" placeholder="Seu Site" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
                    '</p>'
            )
        ),
        'comment_field' => '<p class="comment-form-comment">' .
            '<textarea id="comment" name="comment" placeholder="Seu Mensagem" aria-required="true" rows="5"></textarea>' .
            '</p>',
        'comment_notes_after' => '',
        'title_reply' => '<h2>Deixe seu recado</h2>    '
    );
    ?>

    <?php comment_form($args); ?>
</div>