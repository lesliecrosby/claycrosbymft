<?php

// Fire all our initial functions at the start
add_action('after_setup_theme','joints_start', 16);

function joints_start() {

    // launching operation cleanup
    add_action('init', 'joints_head_cleanup');

    // remove pesky injected css for recent comments widget
    add_filter( 'wp_head', 'joints_remove_wp_widget_recent_comments_style', 1 );

    // clean up comment styles in the head
    add_action('wp_head', 'joints_remove_recent_comments_style', 1);

    // clean up gallery output in wp
    add_filter('gallery_style', 'joints_gallery_style');

    // adding sidebars to Wordpress
    add_action( 'widgets_init', 'joints_register_sidebars' );

    // cleaning up excerpt
    // add_filter('excerpt_more', 'joints_excerpt_more');

} /* end joints start */

//The default wordpress head is a mess. Let's clean it up by removing all the junk we don't need.
function joints_head_cleanup() {
	// Remove category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Remove post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );
	// Remove EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove index link
	remove_action( 'wp_head', 'index_rel_link' );
	// Remove previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Remove start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Remove links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// Remove WP version
	remove_action( 'wp_head', 'wp_generator' );
} /* end Joints head cleanup */

// Remove injected CSS for recent comments widget
function joints_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}

// Remove injected CSS from recent comments widget
function joints_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

// Remove injected CSS from gallery
function joints_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

// This removes the annoying […] to a Read More link
// function joints_excerpt_more($more) {
// 	global $post;
// 	// edit here if you like
// 	return '<a class="more-link" href="'. get_permalink($post->ID) . '" title="'. __('Read ', 'jointswp') . get_the_title($post->ID).'">'. __('Read more &raquo;', 'jointswp') .'</a>';
// }

// Change excerpt length
// function clayjoints_excerpt_length(){
// 	return 60;
// }
// add_filter('excerpt_length', 'clayjoints_excerpt_length');

//  Stop WordPress from using the sticky class (which conflicts with Foundation), and style WordPress sticky posts using the .wp-sticky class instead
function remove_sticky_class($classes) {
	if(in_array('sticky', $classes)) {
		$classes = array_diff($classes, array("sticky"));
		$classes[] = 'wp-sticky';
	}

	return $classes;
}
add_filter('post_class','remove_sticky_class');

//This is a modified the_author_posts_link() which just returns the link. This is necessary to allow usage of the usual l10n process with printf()
function joints_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s', 'jointswp' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}

// https://wordpress.stackexchange.com/a/141136
function wpse_allowedtags() {
	// Add custom tags to this string
			return '<br>,<strong>,<b>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>';
	}

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) :

	function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
	$raw_excerpt = $wpse_excerpt;
			if ( '' == $wpse_excerpt ) {

					$wpse_excerpt = get_the_content('');
					$wpse_excerpt = strip_shortcodes( $wpse_excerpt );
					$wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
					$wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
					$wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

					//Set the excerpt word count and only break after sentence is complete.
							$excerpt_word_count = 75;
							$excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
							$tokens = array();
							$excerptOutput = '';
							$count = 0;

							// Divide the string into tokens; HTML tags, or words, followed by any whitespace
							preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

							foreach ($tokens[0] as $token) {

									if ($count >= $excerpt_length && preg_match('/[\;\?\.\!]\s*$/uS', $token)) {
									// Limit reached, continue until ; ? . or ! occur at the end
											$excerptOutput .= trim($token);
											break;
									}

									// Add words to complete sentence
									$count++;

									// Append what's left of the token
									$excerptOutput .= $token;
							}

					$wpse_excerpt = trim(force_balance_tags($excerptOutput));

							$excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . sprintf(__( 'Read more &raquo;', 'wpse' ), get_the_title()) . '</a>';
							$excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

							// $pos = strrpos($wpse_excerpt, '</');
							// if ($pos !== false)
							// Inside last HTML tag
							// $wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
							//else
							// After the content
							$wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

					return $wpse_excerpt;

			}
			return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
	}

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');


// Change Admin Email without email confirmation
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );

function clayjoints_update_option_new_admin_email( $old_value, $value ) {
	update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'clayjoints_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'clayjoints_update_option_new_admin_email', 10, 2 );