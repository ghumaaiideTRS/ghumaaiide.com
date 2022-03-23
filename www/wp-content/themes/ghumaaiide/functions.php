<?php
$version = wp_get_theme()->get('version');
function mystery_register_styles()
{
	wp_enqueue_style('mystery-css', get_template_directory_uri() . "/assets/css/styles.css");
}
add_action('wp_enqueue_scripts', 'mystery_register_styles');



$version = wp_get_theme()->get('version');
function mystery_register_scripts()
{
	wp_enqueue_style('mystery-js', get_template_directory_uri() . "/assets/js/main.js");
}
add_action('wp_enqueue_scripts', 'mystery_register_scripts', true);

//Adding dynamic title tag support
function mystery_theme_support()
{
	add_theme_support('title-tag');
	add_theme_support('custom-logo');

	add_theme_support('post-thumbnails');
	add_theme_support('post-thumbnails', array('post', 'page', 'facts', 'genres'));
	add_theme_support('post-formats',  array('aside', 'gallery', 'quote', 'image', 'video'));
}
add_action('after_theme_setup', 'mystery_theme_support');

function mystery_menus()
{
	$locations = array(
		'primary' => "Desktop Primary Left Sidebar",
		'footer' => "Footer Menu Items",
		'mobile' => "mobile menu items"

	);
	register_nav_menus($locations);
}
add_action('init', 'mystery_menus');



//Registering a sidebar
function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}



//load Text Domain 
load_theme_textdomain('ghumaaiide', get_template_directory() . '/languages');


//Facts

function genre_custom_post_type()
{

	$labels = array(
		'name'                  => _x('Genres', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Genre', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Genres', 'text_domain'),
		'name_admin_bar'        => __('Post Type', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Facts', 'text_domain'),
		'add_new_item'          => __('Add New Item', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Item', 'text_domain'),
		'edit_item'             => __('Edit Item', 'text_domain'),
		'update_item'           => __('Update Item', 'text_domain'),
		'view_item'             => __('View Item', 'text_domain'),
		'view_items'            => __('View Items', 'text_domain'),
		'search_items'          => __('Search Item', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Genre', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnails', 'editor'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'menu_icon'           => 'dashicons-email',
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('Genres', $args);
}
add_action('init', 'genre_custom_post_type', 0);

//Facts

function facts_custom_post_type()
{

	$labels = array(
		'name'                  => _x('Facts', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Fact', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Facts', 'text_domain'),
		'name_admin_bar'        => __('Post Type', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Facts', 'text_domain'),
		'add_new_item'          => __('Add New Item', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Item', 'text_domain'),
		'edit_item'             => __('Edit Item', 'text_domain'),
		'update_item'           => __('Update Item', 'text_domain'),
		'view_item'             => __('View Item', 'text_domain'),
		'view_items'            => __('View Items', 'text_domain'),
		'search_items'          => __('Search Item', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Fact', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnails', 'editor'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'menu_icon'           => 'dashicons-info',
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('Facts', $args);
}
add_action('init', 'facts_custom_post_type', 0);
