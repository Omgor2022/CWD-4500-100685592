<?php
/**
 * Functions which enhance the theme by creating custom post types
 *
 * @package Herbal_Beauty
 */

function herbalbeauty_post_types() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'herbalbeauty' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'herbalbeauty' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'herbalbeauty' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'herbalbeauty' ),
        'add_new'               => __( 'Add New', 'herbalbeauty' ),
        'add_new_item'          => __( 'Add New recipe', 'herbalbeauty' ),
        'new_item'              => __( 'New recipe', 'herbalbeauty' ),
        'edit_item'             => __( 'Edit recipe', 'herbalbeauty' ),
        'view_item'             => __( 'View recipe', 'herbalbeauty' ),
        'all_items'             => __( 'All recipes', 'herbalbeauty' ),
        'search_items'          => __( 'Search recipes', 'herbalbeauty' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'herbalbeauty' ),
        'not_found'             => __( 'No recipes found.', 'herbalbeauty' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'herbalbeauty' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'herbalbeauty' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'herbalbeauty' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'herbalbeauty' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'herbalbeauty' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'herbalbeauty' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'herbalbeauty' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'herbalbeauty' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'herbalbeauty' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'herbalbeauty' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'herbalbeauty' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'herbalbeauty_recipe', $args );
}
add_action( 'init', 'herbalbeauty_post_types' );