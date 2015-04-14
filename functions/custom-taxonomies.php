<?php
/**
 * Custom Taxonomies
 */
add_action( 'init', 'register_awards_type_tax' );
add_action( 'init', 'register_web_sponsor_tax' );
/**
 * Register Awards Taxonomy
 */
function register_awards_type_tax() {
    $labels = array(
        'name'                       => _x( 'Award Types', 'taxonomy general name' ),
        'singular_name'              => _x( 'Award Type', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Award Types' ),
        'popular_items'              => __( 'Popular Award Types' ),
        'all_items'                  => __( 'All Award Types' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Award Type' ),
        'update_item'                => __( 'Update Award Type' ),
        'add_new_item'               => __( 'Add New Award Type' ),
        'new_item_name'              => __( 'New Award Type Name' ),
        'separate_items_with_commas' => __( 'Separate Award Types with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Award Types' ),
        'choose_from_most_used'      => __( 'Choose from the most used Award Types' ),
        'not_found'                  => __( 'No Award Types found.' ),
        'menu_name'                  => __( 'Award Type' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'award_type' ),
    );

    register_taxonomy( 'award_type', 'awards', $args );
}
/**
 * Register Web Sponsor Taxonomy
 */
function register_web_sponsor_tax() {
    $labels = array(
        'name'                       => _x( 'Sponsor Levels', 'taxonomy general name' ),
        'singular_name'              => _x( 'Sponsor Level', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Sponsor Levels' ),
        'popular_items'              => __( 'Popular Sponsor Levels' ),
        'all_items'                  => __( 'All Sponsor Levels' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Sponsor Level' ),
        'update_item'                => __( 'Update Sponsor Level' ),
        'add_new_item'               => __( 'Add New Sponsor Level' ),
        'new_item_name'              => __( 'New Sponsor Level Name' ),
        'separate_items_with_commas' => __( 'Separate Sponsor Levels with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Sponsor Levels' ),
        'choose_from_most_used'      => __( 'Choose from the most used Sponsor Levels' ),
        'not_found'                  => __( 'No Sponsor Levels found.' ),
        'menu_name'                  => __( 'Sponsor Level' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'sponsor_level' ),
    );

    register_taxonomy( 'sponsor_level', 'web_sponsor', $args );
}