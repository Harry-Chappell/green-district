<?php

require_once( 'library/bones.php' );


function bones_ahoy() {

  //Allow editor style.
  add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // let's get language support going, if you need it
  load_theme_textdomain( 'bonestheme', get_template_directory() . '/library/translation' );

  // launching operation cleanup
  add_action( 'init', 'bones_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'bones_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

add_action( 'after_setup_theme', 'bones_ahoy' );




// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

}





// Add browser class to body
add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
if($is_lynx) $classes[] = 'lynx';
elseif($is_gecko) $classes[] = 'gecko';
elseif($is_opera) $classes[] = 'opera';
elseif($is_NS4) $classes[] = 'ns4';
elseif($is_safari) $classes[] = 'safari';
elseif($is_chrome) $classes[] = 'chrome';
elseif($is_IE) $classes[] = 'ie';
else $classes[] = 'unknown';
if($is_iphone) $classes[] = 'iphone';
return $classes;
}





// Custom Post Type  
function cpt_stores() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Stores', 'Post Type General Name'),
			'singular_name'       => _x( 'Store', 'Post Type Singular Name'),
			'menu_name'           => __( 'Stores'),
			'parent_item_colon'   => __( 'Parent Store'),
			'all_items'           => __( 'All Stores'),
			'view_item'           => __( 'View Store'),
			'add_new_item'        => __( 'Add New Store'),
			'add_new'             => __( 'Add New'),
			'edit_item'           => __( 'Edit Store'),
			'update_item'         => __( 'Update Store'),
			'search_items'        => __( 'Search Store'),
			'not_found'           => __( 'Not Found'),
			'not_found_in_trash'  => __( 'Not found in Trash'),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'stores'),
			'description'         => __( 'Store listings'),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'stores', $args );
	  
	}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'cpt_stores', 0 );



// Custom Post Type  
function cpt_hero_slides() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Hero Slides', 'Post Type General Name'),
			'singular_name'       => _x( 'Hero Slide', 'Post Type Singular Name'),
			'menu_name'           => __( 'Hero Slides'),
			'parent_item_colon'   => __( 'Parent Hero Slide'),
			'all_items'           => __( 'All Hero Slides'),
			'view_item'           => __( 'View Hero Slide'),
			'add_new_item'        => __( 'Add New Hero Slide'),
			'add_new'             => __( 'Add New'),
			'edit_item'           => __( 'Edit Hero Slide'),
			'update_item'         => __( 'Update Hero Slide'),
			'search_items'        => __( 'Search Hero Slide'),
			'not_found'           => __( 'Not Found'),
			'not_found_in_trash'  => __( 'Not found in Trash'),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'hero-slides'),
			'description'         => __( 'Hero Slides on Homepage'),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'hero-slides', $args );
	  
	}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'cpt_hero_slides', 0 );




?>