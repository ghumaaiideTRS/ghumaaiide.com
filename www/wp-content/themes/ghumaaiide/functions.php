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


/**
 * ACF
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Facts Settings',
		'menu_title'	=> 'Facts Settings',
		'parent_slug'	=> 'edit.php?post_type=facts',
	));
}


function fed_field($meta_type = "post", $object_id, $meta_key = '', $single = false)
{
    return  get_metadata($meta_type, $object_id, $meta_key, $single);
}
function acf_field($meta_key = null, $post_id = null, $meta_type = null)
{
    global $wp_query;
    $meta_type = $meta_type ? $meta_type : "post";
    $single = "true";

    if ($meta_type == 'post') {
        $object_id = $post_id ? $post_id : get_the_ID();
    } elseif ($meta_type == 'term') {
        $object_id = $post_id ? $post_id : $wp_query->get_queried_object()->term_id;
    }

    return fed_field($meta_type, $object_id, $meta_key, $single);
}

function acf_repeater($repeater_key, $post_id = null,  $sub_repeatkey = null, $meta_type = null)
{
    global $wp_query;
    $meta_type = $meta_type ? $meta_type : "post";
    $single = "true";
    if ($sub_repeatkey != null) {
        $sub_repeater = $repeater_key . '_' . $sub_repeatkey;
    } else {
        $sub_repeater = $repeater_key;
    }

    if ($meta_type == 'post') {
        $object_id = $post_id ? $post_id : get_the_ID();
    } elseif ($meta_type == 'term') {
        $object_id = $post_id ? $post_id : $wp_query->get_queried_object()->term_id;
    }

    $repeats = fed_field($meta_type, $object_id, $sub_repeater, $single);
    $repeat_fields = array();
    if (!empty($repeats)) {
        $i = 0;
        while ($i < $repeats) {
            array_push($repeat_fields, $sub_repeater . '_' . $i);
            $i++;
        }
    }
    return $repeat_fields;
}


function acf_subfield($repeater_key,  $subfield_key, $post_id = null)
{

    $object_id = $post_id ? $post_id : get_the_ID();
    $key = $repeater_key . '_' . $subfield_key;

    return acf_field($key, $object_id);
}


function acf_option($field_key,  $sub_field = null,  $acf = true)
{
    if ($sub_field != null) {
        $field = $field_key . '_' . $sub_field;
        // $acf=false;
    } else {
        if ($acf == true) {
            $field = 'options_' . $field_key;
            // var_dump($field);
        } else {
            $field = $field_key;
        }
    }
    return get_option($field);
}
function acf_option_repeater($repeater_key = null,  $repeater_field, $acf = true)
{
    if ($repeater_key != null) {
        $sub_repeater = $repeater_key . '_' . $repeater_field;
        $acfu = false;
    } else {
        $sub_repeater = 'options_' . $repeater_field;
        $acfu = false;
    }

    $repeats = acf_option($sub_repeater, null, $acfu);

    $repeat_fields = array();
    if (!empty($repeats)) {
        $i = 0;
        while ($i < $repeats) {
            array_push($repeat_fields, $sub_repeater . '_' . $i);
            $i++;
        }
    }
    return $repeat_fields;
}
function acf_flexible(string $repeater_key, $post_id = null, string $sub_repeatkey = null, $meta_type = null)
{
    global $wp_query;
    $meta_type = $meta_type ? $meta_type : "post";
    $single = "true";
    if ($sub_repeatkey != null) {
        $sub_repeater = $sub_repeatkey . '_' . $repeater_key;
    } else {
        $sub_repeater = $repeater_key;
    }

    if ($meta_type == 'post') {
        $object_id = $post_id ? $post_id : get_the_ID();
    } elseif ($meta_type == 'term') {
        $object_id = $post_id ? $post_id : $wp_query->get_queried_object()->term_id;
    }
    $repeats = fed_field($meta_type, $object_id, $sub_repeater, $single);
    $repeat_fields = array();

    if (!empty($repeats)) {
        foreach ($repeats as $cnt => $repeat) {
            $repeat_fields[$repeat] = $sub_repeater . '_' . $cnt;
        }
    }
    return $repeat_fields;
}

function acf_flexible_option($repeater_key, $post_id = null,  $sub_repeatkey = null, $meta_type = null, $acf = true)
{

    if ($sub_repeatkey != null) {
        $sub_repeater = $sub_repeatkey . '_' . $repeater_key;
        $acfu = false;
    } else {
        $sub_repeater = 'options_' . $repeater_key;
        $acfu = false;
    }

    $repeats = acf_option($sub_repeater, null, $acfu);
    $repeat_fields = array();
    if (!empty($repeats)) {
        foreach ($repeats as $cnt => $repeat) {
            $repeat_fields[$repeat] = $sub_repeater . '_' . $cnt;
        }
    }
    return $repeat_fields;
}


/*******************************************************
 * Function to return the ACF Link field array object **
 *******************************************************/
function ss_get_btn_link_title_and_target($button)
{
    if (!is_array($button)) return;
    if (class_exists('ACF')) {
        $btn_title = $button['title'];
        $btn_link = $button['url'];
        $btn_target = $button['target'] ? $button['target'] : '_self';
        $btn_details = array(
            'title' => $btn_title,
            'url' => $btn_link,
            'target' => $btn_target
        );
        return $btn_details;
    }
}

/********************************
 * Function that returns posts **
 ********************************/
function ss_get_custom_post_type($number_of_post = -1, $post_slug = '', $order = 'DESC', $order_by = 'menu_order', $post_parent = 0, $category_slug = '', $taxonomy = '')
{
    if ($post_slug == '') return;
    $tax_query = array();
    if ('' != $category_slug && '' != $taxonomy) {
        $tax_query = array(
            array(
                'taxonomy' => $taxonomy,
                'field'    => 'slug',
                'terms'    => $category_slug,
            ),
        );
    }
    $args = array(
        'post_type'      => $post_slug,
        'posts_per_page' => $number_of_post,
        'orderby' => $order_by,
        'order' => $order,
        'post_parent' => $post_parent,
        'tax_query' => $tax_query,
        'post_status' => 'publish',
    );
    $post_type_qry  = new WP_Query($args);
    wp_reset_postdata();
    return $post_type_qry->posts;
}
/***************************************/

/****************************************
 * Returns value if field is not empty **
 ****************************************/
function check_if_exists($value, $html_tag, $class = '')
{
    $get_content = '';
    if (!is_string($html_tag)) return $get_content;
    $add_class = $class != '' ? 'class="' . $class . '"' : '';
    switch ($html_tag) {
        case 'h1':
            if ($value) {
                $get_content .= '<h1 ' . $add_class . '>' . $value . '</h1>';
            }
            break;
        case 'h2':
            if ($value) {
                $get_content .= '<h2 ' . $add_class . '>' . $value . '</h2>';
            }
            break;
        case 'h3':
            if ($value) {
                $get_content .= '<h3 ' . $add_class . '>' . $value . '</h3>';
            }
            break;
        case 'h4':
            if ($value) {
                $get_content .= '<h4 ' . $add_class . '>' . $value . '</h4>';
            }
            break;
        case 'h5':
            if ($value) {
                $get_content .= '<h5 ' . $add_class . '>' . $value . '</h5>';
            }
            break;
        case 'h6':
            if ($value) {
                $get_content .= '<h6 ' . $add_class . '>' . $value . '</h6>';
            }
            break;
        case 'p':
            if ($value) {
                $get_content .= '<p ' . $add_class . '>' . mb_strimwidth($value, 0, 600, '...') . '</p>';
            }
            break;
        case 'small':
            if ($value) {
                $get_content .= '<small ' . $add_class . '>' . $value . '</small>';
            }
            break;
        case 'strong':
            if ($value) {
                $get_content .= '<strong ' . $add_class . '>' . $value . '</strong>';
            }
            break;
        case 'span':
            if ($value) {
                $get_content .= '<span ' . $add_class . '>' . $value . '</span>';
            }
            break;
        case 'em':
            if ($value) {
                $get_content .= '<em ' . $add_class . '>' . $value . '</em>';
            }
            break;
        default:
            return $get_content;
    }
    return $get_content;
}
add_filter( 'paginate_links', function($link){

    //Remove link page/1/ from the first element and prev element
    
    if(is_paged()){
        $link= str_replace('page/1/', '', $link);
    }

    return $link;
} );

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

/***********************************************
 ************* Return Banner Detail *************
 ***********************************************/
function ss_get_banner_details()
{
    global $post;
    $banner_image = null;
    $desc = null;

    if (is_page() || is_singular()) {
        // $fields = get_fields($post->ID);
        // $banner_image = !empty($fields['ss_global_banner_img']) ? $fields['ss_global_banner_img'] : null;
        $desc = get_the_title();
       
    }

    if (is_archive() || is_category()) {
        // $banner_details = get_field($post_type . '_setting', 'options');
        // $banner_image = $banner_details['ss_global_banner_img'];
        // $banner_desc = $banner_details['ss_global_banner_description'];
        $desc = get_the_archive_title();
    }

    if (is_home()) {
        $blog_page = get_page_by_path('blog');
        $fields = get_fields($blog_page->ID);
        // $banner_image = $fields['ss_global_banner_img'];
       $desc = get_the_title($fields);
    }

    if (is_search()) {
        $desc = 'Search Results For: ' . get_search_query();
    }
    if (is_404()) {
        $desc = "404 Error";
    }
    // $banner_image_url = $banner_image ? $banner_image['url'] : '';
    // $alt = $banner_image ? $banner_image['alt'] : 'Banner Image';
    return $banner_details = array(
        // 'banner_image_url' => $banner_image_url,
        'desc' => $desc,
        // 'image_alt' => $alt
        

    );
}

if ( ! function_exists( 'pagination' ) ) :

    function pagination( $paged = '', $max_page = '' ) {
        $big = 999999999; // need an unlikely integer
        if( ! $paged ) {
            $paged = get_query_var('paged');
        }

        if( ! $max_page ) {
            global $wp_query;
            $max_page = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
        }

        echo paginate_links( array(
            'base'       => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'     => '?paged=%#%',
            'current'    => max( 1, $paged ),
            'total'      => $max_page,

            'prev_text' => sprintf('<i class="icon-chevron-left"></i>'),
            'next_text' => sprintf('<i class="icon-chevron-left"></i>'),
            'type'       => 'plain'
        ) );
    }
endif;