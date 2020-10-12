<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');


// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Adds site styles to the WordPress editor
require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');
// require_once(get_template_directory().'/assets/functions/editable-page.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php');

// Disable editor from specific Pages
// require_once(get_template_directory().'/assets/functions/disable-editor.php');

// Disable visual editor!
// function clayjoints_disable_visual_editor(){
//     return false;
// }
// add_filter('user_can_richedit' , 'clayjoints_disable_visual_editor', 50);

// Remove "Add Media" Button
// function clayjoints_remove_add_media(){
//     remove_action( 'media_buttons', 'media_buttons' );
// }
// add_action('admin_head', 'clayjoints_remove_add_media');

// Tell WP to stop auto-correcting line breaks into paragraphs
// remove_filter( 'the_content', 'wpautop' );

// Add custom ACF Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Custom Settings',
		'menu_title'	=> 'Custom Settings',
		'menu_slug' 	=> 'custom-settings',
		'capability'	=> 'edit_posts',
		'position'		=> '2.2',
		'redirect'		=> false
	));
}