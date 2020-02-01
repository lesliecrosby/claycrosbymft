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


// Add Custom Meta Boxes - CMB2
// IN THE FUTURE - PLACE THIS IN SEPARATE FUNCTION FILE!!


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



/**
 * Include and setup custom metaboxes and fields.
 *
 * @category Clay-JointsWP
 * @package  Clay-JointsWP
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object.
 *
 * @return bool             True if metabox should show
 */
function clayjoints_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

/**
 * Template tag function for outputting a CMB2 group
 *
 * @param  string  $group_meta_key The field meta key. ('_clayjoints_abouttherapy_repeat_group')
 */
function cmb2_output_link_list( $group_meta_key ) {
	// Get the list of links
	$links = get_post_meta( get_the_ID(), $group_meta_key, true );
	echo '<ul class="link-list-wrap">';
	foreach ( (array) $links as $key => $link ) {
		echo '<li class="link-list-item"><a href="';
    echo esc_html( $link['link_url']);
		echo '" target="_blank" rel="noopener noreferrer">';
    echo esc_html( $link['title']);
    echo '</a></li>';
	}
	echo '</ul>';
}

/**
 * Template tag function for outputting a CMB2 group
 *
 * @param  string  $group_meta_key The field meta key. ('_clayjoints_bio_repeat_group')
 */
function cmb2_output_unordered_list( $group_meta_key ) {
  $list_items = get_post_meta( get_the_ID(), $group_meta_key, true );
  echo '<ul class="unordered-list-wrap">';
  foreach( (array) $list_items as $key => $list_item ) {
    echo '<li class="unordered-list-item">';
    echo esc_html( $list_item['list_item']);
    echo '</li>';
  }
}

// HOME PAGE METABOXES
add_action( 'cmb2_admin_init', 'clayjoints_register_home_page_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'Home' page
 */
function clayjoints_register_home_page_metabox() {
	$prefix = '_clayjoints_home_';

  /**
   * Metabox to be displayed on a single page ID - - 1702 for localhost, 99 for in-progress site, tbd for live
   */
  $cmb_home_page = new_cmb2_box( array(
    'id'           => $prefix . 'metabox',
    'title'        => esc_html__( 'Home Page Editable Fields', 'cmb2' ),
    'object_types' => array( 'page', ), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'show_on'      => array( 'id' => array( 99, 6 ) ), // Specific post ID(s) to display this metabox
  ) );

  $cmb_home_page->add_field( array(
    'name' => esc_html__( 'Hero Section', 'cmb2' ),
    'id'   => $prefix . 'hero-title1',
    'type' => 'title',
  ) );
  $cmb_home_page->add_field( array(
		'name' => esc_html__( 'Hero Text', 'cmb2' ),
		'id'   => $prefix . 'hero',
		'type' => 'textarea',
	) );

  $cmb_home_page->add_field( array(
    'name' => esc_html__( 'Body Section 1', 'cmb2' ),
    'id'   => $prefix . 'title1',
    'type' => 'title',
  ) );
  $cmb_home_page->add_field( array(
		'name' => esc_html__( 'Body Text 1', 'cmb2' ),
		'id'   => $prefix . 'body1',
		'type' => 'textarea',
	) );

  $cmb_home_page->add_field( array(
    'name' => esc_html__( 'Body Section 2', 'cmb2' ),
    'id'   => $prefix . 'title2',
    'type' => 'title',
  ) );
  $cmb_home_page->add_field( array(
		'name' => esc_html__( 'Body Text 2', 'cmb2' ),
		'id'   => $prefix . 'body2',
		'type' => 'textarea',
	) );
  $list_group_1 = $cmb_home_page->add_field( array(
	'id'          => $prefix . 'repeat_group_1',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Left Column List Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  $cmb_home_page->add_group_field( $list_group_1, array(
  	'name' => 'List Item',
  	'id'   => 'list_item',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  $list_group_2 = $cmb_home_page->add_field( array(
	'id'          => $prefix . 'repeat_group_2',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Right Column List Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  $cmb_home_page->add_group_field( $list_group_2, array(
  	'name' => 'List Item',
  	'id'   => 'list_item',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb_home_page->add_field( array(
    'name' => esc_html__( 'Body Section 3', 'cmb2' ),
    'id'   => $prefix . 'title3',
    'type' => 'title',
  ) );
  $cmb_home_page->add_field( array(
		'name' => esc_html__( 'Body Text 3', 'cmb2' ),
		'id'   => $prefix . 'body3',
		'type' => 'textarea',
	) );
  $link_group_1 = $cmb_home_page->add_field( array(
	'id'          => $prefix . 'repeat_group_3',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Link {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  $cmb_home_page->add_group_field( $link_group_1, array(
  	'name' => 'Link Display Text',
  	'id'   => 'title',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  $cmb_home_page->add_group_field( $link_group_1, array(
  	'name' => 'URL',
  	'description' => 'Please include full URL, including http or https',
  	'id'   => 'link_url',
  	'type' => 'text_url',
  ) );
}

// AREAS OF FOCUS PAGE METABOXES
add_action( 'cmb2_admin_init', 'clayjoints_register_areasoffocus_page_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'Home' page
 */
function clayjoints_register_areasoffocus_page_metabox() {
	$prefix = '_clayjoints_areasoffocus_';

  /**
   * Metabox to be displayed on a single page ID - - 1813 for localhost, 159 for in-progress site, tbd for live
   */
  $cmb_areasoffocus_page = new_cmb2_box( array(
    'id'           => $prefix . 'metabox',
    'title'        => esc_html__( 'Areas of Focus Page Editable Fields', 'cmb2' ),
    'object_types' => array( 'page', ), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'show_on'      => array( 'id' => array( 159, 11 ) ), // Specific post ID(s) to display this metabox
  ) );

  $cmb_areasoffocus_page->add_field( array(
    'name' => esc_html__( 'Section 1', 'cmb2' ),
    'id'   => $prefix . 'title1',
    'type' => 'title'
  ) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 1 Title', 'cmb2' ),
		'id'   => $prefix . 'section1-title',
		'type' => 'text',
	) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 1 Text', 'cmb2' ),
		'id'   => $prefix . 'section1-text',
		'type' => 'textarea',
	) );

  $cmb_areasoffocus_page->add_field( array(
    'name' => esc_html__( 'Section 2', 'cmb2' ),
    'id'   => $prefix . 'title2',
    'type' => 'title'
  ) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 2 Title', 'cmb2' ),
		'id'   => $prefix . 'section2-title',
		'type' => 'text',
	) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 2 Text', 'cmb2' ),
		'id'   => $prefix . 'section2-text',
		'type' => 'textarea',
	) );

  $cmb_areasoffocus_page->add_field( array(
    'name' => esc_html__( 'Section 3', 'cmb2' ),
    'id'   => $prefix . 'title3',
    'type' => 'title'
  ) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 3 Title', 'cmb2' ),
		'id'   => $prefix . 'section3-title',
		'type' => 'text',
	) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 3 Text', 'cmb2' ),
		'id'   => $prefix . 'section3-text',
		'type' => 'textarea',
	) );
  $list_group_1 = $cmb_areasoffocus_page->add_field( array(
	'id'          => $prefix . 'repeat_group_1',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Creative Issues List Item {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  $cmb_areasoffocus_page->add_group_field( $list_group_1, array(
  	'name' => 'List Item',
  	'id'   => 'list_item',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );


  $cmb_areasoffocus_page->add_field( array(
    'name' => esc_html__( 'Section 4', 'cmb2' ),
    'id'   => $prefix . 'title4',
    'type' => 'title'
  ) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 4 Title', 'cmb2' ),
		'id'   => $prefix . 'section4-title',
		'type' => 'text',
	) );
  $cmb_areasoffocus_page->add_field( array(
		'name' => esc_html__( 'Section 4 WYSIWYG', 'cmb2' ),
		'id'   => $prefix . 'section4-wysiwyg',
		'type' => 'wysiwyg',
	) );
}

// WORKSHOPS PAGE METABOXES
add_action( 'cmb2_admin_init', 'clayjoints_register_workshops_page_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'Home' page
 */
function clayjoints_register_workshops_page_metabox() {
	$prefix = '_clayjoints_workshops_';

  /**
   * Metabox to be displayed on a single page ID - - 1740 for localhost, 131 for in-progress site, tbd for live
   */
  $cmb_workshops_page = new_cmb2_box( array(
    'id'           => $prefix . 'metabox',
    'title'        => esc_html__( 'Workshops Page Editable Fields', 'cmb2' ),
    'object_types' => array( 'page', ), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'show_on'      => array( 'id' => array( 131, 17 ) ), // Specific post ID(s) to display this metabox
  ) );

  $cmb_workshops_page->add_field( array(
    'name' => esc_html__( 'Boxes', 'cmb2' ),
    'id'   => $prefix . 'title1',
    'type' => 'title',
    'description' => __( 'Maximum word count of approximately 35 words per box', 'cmb2' ),
  ) );
  $cmb_workshops_page->add_field( array(
		'name' => esc_html__( 'Left Box', 'cmb2' ),
		'id'   => $prefix . 'left-box',
		'type' => 'textarea',
	) );
  $cmb_workshops_page->add_field( array(
		'name' => esc_html__( 'Center Box', 'cmb2' ),
		'id'   => $prefix . 'center-box',
		'type' => 'textarea',
	) );
  $cmb_workshops_page->add_field( array(
		'name' => esc_html__( 'Right Box', 'cmb2' ),
		'id'   => $prefix . 'right-box',
		'type' => 'textarea',
	) );
}


// ABOUT CLAY aka BIO PAGE METABOXES
add_action( 'cmb2_admin_init', 'clayjoints_register_bio_page_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'About Clay' page
 */
function clayjoints_register_bio_page_metabox() {
	$prefix = '_clayjoints_bio_';

  /**
   * Metabox to be displayed on a single page ID - - 1742 for localhost, 112 for in-progress site, tbd for live
   */
  $cmb_bio_page = new_cmb2_box( array(
    'id'           => $prefix . 'metabox',
    'title'        => esc_html__( 'About Clay Editable Fields', 'cmb2' ),
    'object_types' => array( 'page', ), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'show_on'      => array( 'id' => array( 112, 20 ) ), // Specific post ID(s) to display this metabox
  ) );

  $cmb_bio_page->add_field( array(
    'name' => esc_html__( 'Professional Affiliations', 'cmb2' ),
    'id'   => $prefix . 'title1',
    'type' => 'title',
  ) );

  $link_group_1 = $cmb_bio_page->add_field( array(
	'id'          => $prefix . 'repeat_group_1',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Affiliation {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  $cmb_bio_page->add_group_field( $link_group_1, array(
  	'name' => 'Link Display Text',
  	'id'   => 'title',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  $cmb_bio_page->add_group_field( $link_group_1, array(
  	'name' => 'URL',
  	'description' => 'Please include full URL, including http or https',
  	'id'   => 'link_url',
  	'type' => 'text_url',
  ) );


  $cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Contact', 'cmb2' ),
		'id'   => $prefix . 'title2',
		'type' => 'title',
	) );
  $cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Phone - Germany', 'cmb2' ),
		'id'   => $prefix . 'phone',
		'type' => 'text',
	) );
	$cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Phone - USA', 'cmb2' ),
		'id'   => $prefix . 'phone2',
		'type' => 'text',
	) );
  $cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Email', 'cmb2' ),
		'id'   => $prefix . 'email',
		'type' => 'text',
	) );
  $cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Office Location - Text', 'cmb2' ),
		'id'   => $prefix . 'location',
		'type' => 'textarea',
	) );
  $cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Office Location - Google Maps URL', 'cmb2' ),
		'id'   => $prefix . 'locationurl',
		'type' => 'text_url',
	) );
  $cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Facebook', 'cmb2' ),
		'id'   => $prefix . 'facebook',
		'type' => 'text',
	) );

  $cmb_bio_page->add_field( array(
    'name' => esc_html__( 'Selected Certificates / Advanced Trainings', 'cmb2' ),
    'id'   => $prefix . 'title3',
    'type' => 'title',
  ) );
  $list_group_1 = $cmb_bio_page->add_field( array(
	'id'          => $prefix . 'repeat_group_2',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Certificate / Advanced Training {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  $cmb_bio_page->add_group_field( $list_group_1, array(
  	'name' => 'List Item',
  	'id'   => 'list_item',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb_bio_page->add_field( array(
    'name' => esc_html__( 'Bio', 'cmb2' ),
    'id'   => $prefix . 'title4',
    'type' => 'title',
  ) );
  $cmb_bio_page->add_field( array(
		'name' => esc_html__( 'Bio Text', 'cmb2' ),
		// 'desc' => esc_html__( '', 'cmb2' ),
		'id'   => $prefix . 'bio',
		'type' => 'textarea',
	) );
}



// ABOUT THERAPY PAGE METABOXES
add_action( 'cmb2_admin_init', 'clayjoints_register_abouttherapy_page_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'About Therapy' page
 */
function clayjoints_register_abouttherapy_page_metabox() {
	$prefix = '_clayjoints_abouttherapy_';

	/**
	 * Metabox to be displayed on a single page ID - - 1738 for localhost, 107 for in-progress site, tbd for live
	 */
	$cmb_about_page = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'About Therapy Editable Fields', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 107, 14 ) ), // Specific post ID(s) to display this metabox
	) );

  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'FAQ Section', 'cmb2' ),
		'id'   => $prefix . 'title1',
		'type' => 'title',
	) );
	$cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 1', 'cmb2' ),
		'id'   => $prefix . 'subhead1',
		'type' => 'text',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 1 - Body', 'cmb2' ),
		'id'   => $prefix . 'body1',
		'type' => 'textarea',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 2', 'cmb2' ),
		'id'   => $prefix . 'subhead2',
		'type' => 'text',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 2 - Body', 'cmb2' ),
		'id'   => $prefix . 'body2',
    'type'    => 'textarea',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 3', 'cmb2' ),
		'id'   => $prefix . 'subhead3',
		'type' => 'text',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 3 - Body', 'cmb2' ),
		'id'   => $prefix . 'body3',
		'type' => 'textarea',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 4', 'cmb2' ),
		'id'   => $prefix . 'subhead4',
		'type' => 'text',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 4 - Body', 'cmb2' ),
		'id'   => $prefix . 'body4',
		'type' => 'textarea',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 5', 'cmb2' ),
		'id'   => $prefix . 'subhead5',
		'type' => 'text',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'SubHead 5 - Body', 'cmb2' ),
		'id'   => $prefix . 'body5',
		'type' => 'textarea',
	) );


  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'Contact Section', 'cmb2' ),
		'id'   => $prefix . 'title2',
		'type' => 'title',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'Phone', 'cmb2' ),
		'desc' => esc_html__( '123-456-7890', 'cmb2' ),
		'id'   => $prefix . 'phone',
		'type' => 'text',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'Email', 'cmb2' ),
		// 'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'email',
		'type' => 'text',
	) );
  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'Office Location', 'cmb2' ),
		'desc' => esc_html__( 'Editing this will only update displayed address, please contact Leslie to update Google Maps link', 'cmb2' ),
		'id'   => $prefix . 'location',
		'type' => 'textarea',
	) );


  $cmb_about_page->add_field( array(
		'name' => esc_html__( 'Links Section', 'cmb2' ),
		'id'   => $prefix . 'title3',
		'type' => 'title',
	) );

  $link_group_1 = $cmb_about_page->add_field( array(
	'id'          => $prefix . 'repeat_group_1',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'General Link {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb_about_page->add_group_field( $link_group_1, array(
  	'name' => 'Link Display Text',
  	'id'   => 'title',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  $cmb_about_page->add_group_field( $link_group_1, array(
  	'name' => 'URL',
  	'description' => 'Please include full URL, including http or https',
  	'id'   => 'link_url',
  	'type' => 'text_url',
  ) );

  $link_group_2 = $cmb_about_page->add_field( array(
	'id'          => $prefix . 'repeat_group_2',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Referral Link {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb_about_page->add_group_field( $link_group_2, array(
  	'name' => 'Link Display Text',
  	'id'   => 'title',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  $cmb_about_page->add_group_field( $link_group_2, array(
  	'name' => 'URL',
  	'description' => 'Please include full URL, including http or https',
  	'id'   => 'link_url',
  	'type' => 'text_url',
  ) );

  $link_group_3 = $cmb_about_page->add_field( array(
	'id'          => $prefix . 'repeat_group_3',
	'type'        => 'group',
	// 'description' => __( 'Generates reusable form entries', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'   => __( 'Mindfulness Link {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'    => __( 'Add Another Entry', 'cmb2' ),
		'remove_button' => __( 'Remove Entry', 'cmb2' ),
		'sortable'      => true, // beta
		'closed'     => true, // true to have the groups closed by default
  	),
  ) );
  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb_about_page->add_group_field( $link_group_3, array(
  	'name' => 'Link Display Text',
  	'id'   => 'title',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );
  $cmb_about_page->add_group_field( $link_group_3, array(
  	'name' => 'URL',
  	'description' => 'Please include full URL, including http or https',
  	'id'   => 'link_url',
  	'type' => 'text_url',
  ) );

}
