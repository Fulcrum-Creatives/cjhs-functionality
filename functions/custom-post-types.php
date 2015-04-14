<?php
/**
 * Custom Post Types
 */
add_action( 'init', 'register_awards_cpt' );
add_action( 'init', 'register_background_cpt' );
add_action( 'init', 'register_events_cpt' );
add_action( 'init', 'register_histories_cpt' );
add_action( 'init', 'register_links_cpt' );
add_action( 'init', 'register_news_cpt' );
add_action( 'init', 'register_oral_histories_cpt' );
add_action( 'init', 'register_shop_cpt' );
add_action( 'init', 'register_topy_photos_cpt' );
add_action( 'init', 'register_tout_cpt' );
add_action( 'init', 'register_web_sponsors_cpt' );
add_action( 'init', 'register_videos_cpt' );
add_action( 'init', 'register_posts_cpt' );
add_action( 'init', 'register_history_item_cpt' );
/**
 * Register Awards Custom Post Type
 */
function register_awards_cpt() {
    $labels = array( 
        'name'                  => 'Awards',
        'singular_name'         => 'Award',
        'add_new'               => 'Add New',
        'all_items'             => 'Awards',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Event',
        'new_item'              => 'New Award',
        'view_item'             => 'View Award',
        'search_items'          => 'Search Awards',
        'not_found'             => 'No Awards Found',
        'not_found_in_trash'    => 'No Awards Found in Trash',
        'parent_item_colon'     => 'Parent Award Post:',
        'menu_name'             => 'Awards',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Awards',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'show_in_menu'          => 'edit.php?post_type=custom_posts',
        'menu_icon'             => NULL, 
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug'  => 'awards' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'awards', $args );
}
/**
 * Register Background Custom Post Type
 */
function register_background_cpt() {
    $labels = array( 
        'name'                  => 'Background',
        'singular_name'         => 'Background Image',
        'add_new'               => 'Add New',
        'all_items'             => 'Background Images',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Background Image',
        'new_item'              => 'New Background Image',
        'view_item'             => 'View Background Image',
        'search_items'          => 'Search Background Images',
        'not_found'             => 'No Background Images Found',
        'not_found_in_trash'    => 'No Background Images Found in Trash',
        'parent_item_colon'     => 'Parent Background Image Post:',
        'menu_name'             => 'Background',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Background Images ',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'themes.php',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'background' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'background', $args );
}
/**
 * Register Events Custom Post Type
 */
function register_events_cpt() {
    $labels = array( 
        'name'                  => 'Events',
        'singular_name'         => 'Event',
        'add_new'               => 'Add New',
        'all_items'             => 'Events',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Event',
        'new_item'              => 'New Event',
        'view_item'             => 'View Event',
        'search_items'          => 'Search Events',
        'not_found'             => 'No Events Found',
        'not_found_in_trash'    => 'No Events Found in Trash',
        'parent_item_colon'     => 'Parent Event Post:',
        'menu_name'             => 'Events',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Events',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_posts',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                    ),
        'taxonomies'            => array('category'),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug'  => 'events' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'events', $args );
}
/**
 * Register Histories Custom Post Type
 */
function register_histories_cpt() {
    $labels = array( 
        'name'                  => 'Histories',
        'singular_name'         => 'History',
        'add_new'               => 'Add New',
        'all_items'             => 'Histories',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Event',
        'new_item'              => 'New History',
        'view_item'             => 'View History',
        'search_items'          => 'Search Histories',
        'not_found'             => 'No Histories Found',
        'not_found_in_trash'    => 'No Histories Found in Trash',
        'parent_item_colon'     => 'Parent History Post:',
        'menu_name'             => 'Histories',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Histories',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_history',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                        'comments',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug'  => 'histories' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'histories', $args );
}
/**
 * Register Links Custom Post Type
 */
function register_links_cpt() {
    $labels = array( 
        'name'                  => 'Link',
        'singular_name'         => 'Link',
        'add_new'               => 'Add New',
        'all_items'             => 'Links',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Link',
        'new_item'              => 'New Link',
        'view_item'             => 'View Link',
        'search_items'          => 'Search Links',
        'not_found'             => 'No Links Found',
        'not_found_in_trash'    => 'No Links Found in Trash',
        'parent_item_colon'     => 'Parent Link Post:',
        'menu_name'             => 'Links',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Links',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_posts',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'custom_link' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'custom_link', $args );
}
/**
 * Register News Custom Post Type
 */
function register_news_cpt() {
    $labels = array( 
        'name'                  => 'News',
        'singular_name'         => 'News',
        'add_new'               => 'Add New',
        'all_items'             => 'News',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit News',
        'new_item'              => 'New News Item',
        'view_item'             => 'View News Item',
        'search_items'          => 'Search News',
        'not_found'             => 'No News Items Found',
        'not_found_in_trash'    => 'No News Items Found in Trash',
        'parent_item_colon'     => 'Parent News Post:',
        'menu_name'             => 'News',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'News',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_posts',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                        'comments',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'site-news' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'site-news', $args );
}
/**
 * Register Oral Histories Custom Post Type
 */
function register_oral_histories_cpt() {
    $labels = array( 
        'name'                  => 'Oral Histories',
        'singular_name'         => 'Oral History',
        'add_new'               => 'Add New',
        'all_items'             => 'Oral Histories',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Oral History',
        'new_item'              => 'New Oral History',
        'view_item'             => 'View Oral History',
        'search_items'          => 'Search Oral Histories',
        'not_found'             => 'No Oral Histories Found',
        'not_found_in_trash'    => 'No Oral Histories Found in Trash',
        'parent_item_colon'     => 'Parent Oral History Post:',
        'menu_name'             => 'Oral Histories',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Oral Histories',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_history',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                        'thumbnail',
                                        'comments',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug'  => 'oral_histories' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'oral_histories', $args );
}
/**
 * Register Shop Custom Post Type
 */
function register_shop_cpt() {
    $labels = array( 
        'name'                  => 'Shop',
        'singular_name'         => 'Shop Item',
        'add_new'               => 'Add New',
        'all_items'             => 'All Shop Items',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Shop Item',
        'new_item'              => 'New Shop Item',
        'view_item'             => 'View Shop Item',
        'search_items'          => 'Search Shop Items',
        'not_found'             => 'No Shop Items Found',
        'not_found_in_trash'    => 'No Shop Items Found in Trash',
        'parent_item_colon'     => 'Parent Shop Item Post:',
        'menu_name'             => 'Shop',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Shop Items',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug'  => 'shop' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'shop', $args );
}
/**
 * Register Topy Photos Custom Post Type
 */
function register_topy_photos_cpt() {
    $labels = array( 
        'name'                  => 'Topy Photos',
        'singular_name'         => 'Topy Photo',
        'add_new'               => 'Add New',
        'all_items'             => 'Topy Photos',
        'add_new_item'          => 'Add New Topy Photo',
        'edit_item'             => 'Edit Topy Photo',
        'new_item'              => 'New Topy Photo',
        'view_item'             => 'View Topy Photo',
        'search_items'          => 'Search Topy Photos',
        'not_found'             => 'No Topy Photos Found',
        'not_found_in_trash'    => 'No Topy Photos Found in Trash',
        'parent_item_colon'     => 'Parent Topy Photo Post:',
        'menu_name'             => 'Topy Photos',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Topy Photos',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_history',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                        'comments',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'topy_photos' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'topy_photos', $args );
}
/**
 * Register Tout Custom Post Type
 */
function register_tout_cpt() {
    $labels = array( 
        'name'                  => 'Tout',
        'singular_name'         => 'Tout Item',
        'add_new'               => 'Add New',
        'all_items'             => 'Tout Items',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Tout Item',
        'new_item'              => 'New Tout Item',
        'view_item'             => 'View Tout Item',
        'search_items'          => 'Search Tout Items',
        'not_found'             => 'No Tout Items Found',
        'not_found_in_trash'    => 'No Tout Items Found in Trash',
        'parent_item_colon'     => 'Parent Tout Item Post:',
        'menu_name'             => 'Tout',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Tout Items',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_posts',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'tout' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'tout', $args );
}
/**
 * Register Web Sponsors Custom Post Type
 */
function register_web_sponsors_cpt() {
    $labels = array( 
        'name'                  => 'Web Sponors',
        'singular_name'         => 'Web Sponor',
        'add_new'               => 'Add New',
        'all_items'             => 'Web Sponors',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Web Sponor',
        'new_item'              => 'New Web Sponor',
        'view_item'             => 'View Web Sponor',
        'search_items'          => 'Search Web Sponors',
        'not_found'             => 'No Web Sponors Found',
        'not_found_in_trash'    => 'No Web Sponors Found in Trash',
        'parent_item_colon'     => 'Parent Web Sponor Post:',
        'menu_name'             => 'Web Sponors',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Web Sponors',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_posts',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'web_sponsor' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'web_sponsor', $args );
}
/**
 * Register Links Custom Post Type
 */
function register_videos_cpt() {
    $labels = array( 
        'name'                  => 'Video',
        'singular_name'         => 'Video',
        'add_new'               => 'Add New',
        'all_items'             => 'Videos',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Video',
        'new_item'              => 'New Video',
        'view_item'             => 'View Video',
        'search_items'          => 'Search Videos',
        'not_found'             => 'No Videos Found',
        'not_found_in_trash'    => 'No Videos Found in Trash',
        'parent_item_colon'     => 'Parent Video Post:',
        'menu_name'             => 'Videos',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Videos',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => null,
        'menu_icon'             => NULL,
        'show_in_menu'          => 'edit.php?post_type=custom_history',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                        'excerpt',
                                        'comments',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'videos' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'videos', $args );
}
/**
 * Register Posts Custom Post Type
 * To use as a menu Item
 */
function register_posts_cpt() {
    $labels = array( 
        'name'                  => 'Post',
        'singular_name'         => 'Post',
        'add_new'               => 'Add New',
        'all_items'             => 'Posts',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit Post',
        'new_item'              => 'New Post',
        'view_item'             => 'View Post',
        'search_items'          => 'Search Posts',
        'not_found'             => 'No Posts Found',
        'not_found_in_trash'    => 'No Posts Found in Trash',
        'parent_item_colon'     => 'Parent Post Post:',
        'menu_name'             => 'Posts',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Posts',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 4,
        'menu_icon'             => NULL,
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                        'editor',
                                        //'author',
                                        'thumbnail',
                                        'excerpt',
                                        'trackbacks',
                                        'custom-fields',
                                        'comments' ,
                                        'revisions',
                                        //'page-attributes',
                                        //'post-formats'
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'custom_posts' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'custom_posts', $args );
}
/**
 * Register Posts Custom Post Type
 * To use as a menu Item
 */
function register_history_item_cpt() {
    $labels = array( 
        'name'                  => 'History',
        'singular_name'         => 'History',
        'add_new'               => 'Add New',
        'all_items'             => 'Histories',
        'add_new_item'          => 'Add New',
        'edit_item'             => 'Edit History',
        'new_item'              => 'New History',
        'view_item'             => 'View History',
        'search_items'          => 'Search Histories',
        'not_found'             => 'No Histories Found',
        'not_found_in_trash'    => 'No Histories Found in Trash',
        'parent_item_colon'     => 'Parent History Post:',
        'menu_name'             => 'History',
    );
    $args = array( 
        'labels'                => $labels,
        'description'           => 'Histories',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-book',
        'capability_type'       => 'post',
        'capabilities'          => array(   
                                        'edit_post', 
                                        'read_post', 
                                        'delete_post',
                                        'edit_posts',
                                        'edit_others_posts',
                                        'publish_posts',
                                        'read_private_posts'
                                    ),
        'map_meta_cap'          => true,
        'hierarchical'          => true,
        'supports'              => array(   
                                        'title',
                                    ),
        'has_archive'           => false,
        'permalink_epmask'      => EP_PERMALINK,
        'rewrite'               => array( 'slug' => 'custom_history' ),
        'query_var'             => false,
        'can_export'            => true,
    );
    register_post_type( 'custom_history', $args );
}