<?php
/*
Plugin Name: Fast Custom Post
Plugin URI: http://enjoytripmembership.com/
Description: Fast Custom Post Allow to create fast custom post type with taxonomies.
Version: 1.0
Author: kamal kunwar
Author URI: http://enjoytripmembership.com/
License: GPLv2
*/
?>
<?php
add_action( 'init', 'register_cpt_fast_custom_post' );

function register_cpt_fast_custom_post() {

    $labels = array( 
        'name' => _x( 'Fast Custom Post', 'fastcustompost' ),
        'singular_name' => _x( 'Fast Custom Post', 'fastcustompost' ),
        'add_new' => _x( 'Add New', 'fastcustompost' ),
        'add_new_item' => _x( 'Add New Fast Custom Post', 'fastcustompost' ),
        'edit_item' => _x( 'Edit Fast Custom Post', 'fastcustompost' ),
        'new_item' => _x( 'New Fast Custom Post', 'fastcustompost' ),
        'view_item' => _x( 'View Fast Custom Post', 'fastcustompost' ),
        'search_items' => _x( 'Search Fast Custom Post', 'fastcustompost' ),
        'not_found' => _x( 'No Fast Custom Post found', 'fastcustompost' ),
        'not_found_in_trash' => _x( 'No Fast Custom Post found in Trash', 'fastcustompost' ),
        'parent_item_colon' => _x( 'Parent Fast Custom Post:', 'fastcustompost' ),
        'menu_name' => _x( 'Fast Custom Post', 'fastcustompost' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Fast Custom Post info pages',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
        //'taxonomies' => array( 'category', 'page-category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-pressthis',
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'post' ),
        'capability_type' => 'post'
    );

    register_post_type( 'fastcustompost', $args );

 $labels = array(
                'name'                       => __( 'Fast Custom Post Categories', 'taxonomy general name',fastcustompost),
                'singular_name'              => __( 'Fast Custom Post Categories', 'taxonomy singular name', fastcustompost ),
                'search_items'               => __( 'Search Fast Custom Post Categories' , fastcustompost),
                'popular_items'              => __( 'Popular Fast Custom Post Categories' , fastcustompost),
                'all_items'                  => __( 'All Fast Custom Post Categories', fastcustompost ),
                'parent_item'                => null,
                'parent_item_colon'          => null,
                'edit_item'                  => __( 'Edit Fast Custom Post Categories' , fastcustompost),
                'update_item'                => __( 'Update Fast Custom Post Categories' , fastcustompost),
                'add_new_item'               => __( 'Add New Pickup Feature', fastcustompost ),
                'new_item_name'              => __( 'New Fast Custom Post Type Name', fastcustompost ),
                'separate_items_with_commas' => __( 'Separate Fast Custom Post Categories with commas' , fastcustompost),
                'add_or_remove_items'        => __( 'Add or remove Fast Custom Post Categories', fastcustompost ),
                'choose_from_most_used'      => __( 'Choose from the most used Fast Custom Post Categories', fastcustompost),
                'not_found'                  => __( 'No Pickup Fast Custom Post Categories.', fastcustompost ),
                'menu_name'                  => __( 'Fast Custom Post Categories', fastcustompost ),
            );
 
 $args = array(
                'hierarchical'          => true,
                'labels'                => $labels,
                'show_ui'               => true,
                'show_admin_column'     => true,
                'query_var'             => true,
                'rewrite' => array(
      'slug' => 'custom-post','with_front' => false, 'hierarchical' => true ), 'has_archive' => true,
            );

            register_taxonomy( 'custom-post-fast', 'fastcustompost', $args );
        }
?>