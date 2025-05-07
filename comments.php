<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flatlatte
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="blog-comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="comments-title">
			<?php
			$flatlatte_comment_count = get_comments_number();
			if ( '1' === $flatlatte_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Comentarios', 'flatlatte' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} 
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list comment">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'reply_text'  => false
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

	endif; // Check for have_comments().

	$comment_args = array(
    'title_reply'          => esc_html__('Deja un comentario', 'flatlatte'),
    'title_reply_before'   => '<h4 id="reply-title" class="comment-reply-title">',
    'title_reply_after'    => '</h4>',
    'comment_notes_before' => '<p class="comment-notes">' . esc_html__('Tu dirección de correo no será publicada. Campos obligatorios marcados con *', 'flatlatte') . '</p>',
    'fields'              => array(
        'author' => '<div class="comment-form col-lg-6"><label for="author">' . esc_html__('Nombre', 'flatlatte') . ' <span class="required">*</span></label>' .
                    '<input id="author" name="author" type="text" required /></div>',
        'email'  => '<div class="comment-form col-lg-6"><label for="email">' . esc_html__('Correo electrónico', 'flatlatte') . ' <span class="required">*</span></label>' .
                    '<input id="email" name="email" type="email" required /></div>',
		'cookies' => '<p class="comment-form cookies-consent my-3"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">' . esc_html__('Guardar mis datos en este navegador para la próxima vez que comente.', 'flatlatte') . '</label></p>',
    ),
    'comment_field'       => '<div class="comment-form col-lg-6"><label for="comment">' . esc_html__('Comentario', 'flatlatte') . ' <span class="required">*</span></label>' .
                             '<textarea id="comment" name="comment" rows="8" required></textarea></div>',
    'submit_button'       => '<button name="%1$s" type="submit" id="%2$s" class="%3$s blog-submit btn-get-started" value="Comentar">Comentar</button>',
    'class_submit'        => 'submit-button',
);
	echo '<div class="custom-comment-form-wrapper">';
	comment_form($comment_args);
	echo '</div>';
	?>

</div><!-- #comments -->
