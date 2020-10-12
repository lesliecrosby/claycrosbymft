<?php
// Comment Layout
function joints_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<div class="media-object">
			<div class="media-object-section">
			    <?php echo get_avatar( $comment, 75 ); ?>
			  </div>
			<div class="media-object-section">
				<article id="comment-<?php comment_ID(); ?>">
					<header class="comment-author">
						<?php
							// create variable
							$bgauthemail = get_comment_author_email();
						?>
						<?php printf(__('%s', 'jointswp'), get_comment_author_link()) ?> on
						<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jointswp')); ?> </a></time>
						<?php edit_comment_link(__('(Edit)', 'jointswp'),'  ','') ?>
					</header>
					<?php if ($comment->comment_approved == '0') : ?>
						<div class="alert alert-info">
							<p><?php _e('Your comment is awaiting moderation.', 'jointswp') ?></p>
						</div>
					<?php endif; ?>
					<section class="comment_content clearfix">
						<?php comment_text() ?>
					</section>
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</article>
			</div>
		</div>
	<!-- </li> is added by WordPress automatically -->
<?php
}

/**
 * Filter default comment form fields
 *
 * 1. Remove "website" field
 * 2. Make cookie checkbox text editable
 *
 */
function clayjoints_filter_comment_fields( $fields ) {

	unset( $fields['url'] );

	// only proceed if comments cookies opt-in checkbox is set to display
	if ( has_action( 'set_comment_cookies', 'wp_set_comment_cookies' ) && get_option( 'show_comments_cookies_opt_in' ) ) {

		// only proceed if ACF is activated
		if ( function_exists( 'acf_add_options_page' ) ) {

			// get new cookie text from ACF Custom Options page
			$comment_cookie_text = get_field( 'comment_cookie_text', 'option', false );

			// only proceed if cookie text field is filled out
			if ( $comment_cookie_text ) {

				$commenter = wp_get_current_commenter();
				$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

				$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent" style="display:inline;">' . $comment_cookie_text . '</label></p>';

			}
		}
	}

	return $fields;
}
add_filter( 'comment_form_fields', 'clayjoints_filter_comment_fields' );