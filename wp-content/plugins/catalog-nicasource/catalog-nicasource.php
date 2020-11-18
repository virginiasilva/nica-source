<?php
/*
Plugin Name: Catalog-Nicasource
Plugin URI:  https://ronaldsequeira.com
Description: Nicasource Technical test
Version:     1.0
Author:      Ronald Flores
Author URI:   https://ronaldsequeira.com to your website
License:     GPL2 etc
License URI: https://ronaldsequeira.com to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : ronald@ronaldsequeira.com)

*/

// Register Custom Post Type
// Remember to update icon
function nica_brand() {

	$labels = array(
		'name'                  => _x( 'Nica Brands', 'Post Type General Name', 'nica_brand' ),
		'singular_name'         => _x( 'Nica Brand', 'Post Type Singular Name', 'nica_brand' ),
		'menu_name'             => __( 'Nica Brands', 'nica_brand' ),
		'name_admin_bar'        => __( 'Nica Brand', 'nica_brand' ),
		'archives'              => __( 'Brand Archives', 'nica_brand' ),
		'attributes'            => __( 'Brand Attributes', 'nica_brand' ),
		'parent_item_colon'     => __( 'Parent Brand:', 'nica_brand' ),
		'all_items'             => __( 'All Brands', 'nica_brand' ),
		'add_new_item'          => __( 'Add New Brand', 'nica_brand' ),
		'add_new'               => __( 'Add Brand', 'nica_brand' ),
		'new_item'              => __( 'New Brand Item', 'nica_brand' ),
		'edit_item'             => __( 'Edit Brand Item', 'nica_brand' ),
		'update_item'           => __( 'Update Brand Item', 'nica_brand' ),
		'view_item'             => __( 'View Brand', 'nica_brand' ),
		'view_items'            => __( 'View Brands', 'nica_brand' ),
		'search_items'          => __( 'Search Brand', 'nica_brand' ),
		'not_found'             => __( 'Not found', 'nica_brand' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nica_brand' ),
		'featured_image'        => __( 'Featured Image', 'nica_brand' ),
		'set_featured_image'    => __( 'Set featured image', 'nica_brand' ),
		'remove_featured_image' => __( 'Remove featured image', 'nica_brand' ),
		'use_featured_image'    => __( 'Use as featured image', 'nica_brand' ),
		'insert_into_item'      => __( 'Insert into item', 'nica_brand' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'nica_brand' ),
		'items_list'            => __( 'Items list', 'nica_brand' ),
		'items_list_navigation' => __( 'Items list navigation', 'nica_brand' ),
		'filter_items_list'     => __( 'Filter items list', 'nica_brand' ),
	);
	$args = array(
		'label'                 => __( 'Nica Brand', 'nica_brand' ),
		'description'           => __( 'Brands Nicasource', 'nica_brand' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'brands',
	);
	register_post_type( 'nica_brand', $args );

}
add_action( 'init', 'nica_brand', 0 );

// Remember to update icon
function nica_product() {

	$labels = array(
		'name'                  => _x( 'Nica Products', 'Post Type General Name', 'nica_product' ),
		'singular_name'         => _x( 'Nica Products', 'Post Type Singular Name', 'nica_product' ),
		'menu_name'             => __( 'Nica Products', 'nica_product' ),
		'name_admin_bar'        => __( 'Post Type', 'nica_product' ),
		'archives'              => __( 'Products', 'nica_product' ),
		'attributes'            => __( 'Product Attributes', 'nica_product' ),
		'parent_item_colon'     => __( 'Parent Product:', 'nica_product' ),
		'all_items'             => __( 'All Products', 'nica_product' ),
		'add_new_item'          => __( 'Add New Product', 'nica_product' ),
		'add_new'               => __( 'Add New Product', 'nica_product' ),
		'new_item'              => __( 'New Product', 'nica_product' ),
		'edit_item'             => __( 'Edit Product', 'nica_product' ),
		'update_item'           => __( 'Update Product', 'nica_product' ),
		'view_item'             => __( 'View Product', 'nica_product' ),
		'view_items'            => __( 'View Products', 'nica_product' ),
		'search_items'          => __( 'Search Product', 'nica_product' ),
		'not_found'             => __( 'Not found', 'nica_product' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nica_product' ),
		'featured_image'        => __( 'Featured Image', 'nica_product' ),
		'set_featured_image'    => __( 'Set featured image', 'nica_product' ),
		'remove_featured_image' => __( 'Remove featured image', 'nica_product' ),
		'use_featured_image'    => __( 'Use as featured image', 'nica_product' ),
		'insert_into_item'      => __( 'Insert into item', 'nica_product' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'nica_product' ),
		'items_list'            => __( 'Items list', 'nica_product' ),
		'items_list_navigation' => __( 'Items list navigation', 'nica_product' ),
		'filter_items_list'     => __( 'Filter items list', 'nica_product' ),
	);
	$args = array(
		'label'                 => __( 'Nica Products', 'nica_product' ),
		'description'           => __( 'Products Nicasource', 'nica_product' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'products',
	);
	register_post_type( 'nica_product', $args );

}
add_action( 'init', 'nica_product', 0 );

// Register Custom Taxonomy
function product_categories() {

	$labels = array(
		'name'                       => _x( 'Products Categories', 'Taxonomy General Name', 'product_categories' ),
		'singular_name'              => _x( 'Product Category', 'Taxonomy Singular Name', 'product_categories' ),
		'menu_name'                  => __( 'Products Categories', 'product_categories' ),
		'all_items'                  => __( 'All Products Categories', 'product_categories' ),
		'parent_item'                => __( 'Parent Product Category', 'product_categories' ),
		'parent_item_colon'          => __( 'Parent Product Category:', 'product_categories' ),
		'new_item_name'              => __( 'New Product Category', 'product_categories' ),
		'add_new_item'               => __( 'Add New Product Category', 'product_categories' ),
		'edit_item'                  => __( 'Edit Product Category', 'product_categories' ),
		'update_item'                => __( 'Update Product Category', 'product_categories' ),
		'view_item'                  => __( 'View Product Category', 'product_categories' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'product_categories' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'product_categories' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'product_categories' ),
		'popular_items'              => __( 'Popular Products Categories', 'product_categories' ),
		'search_items'               => __( 'Search Products Categories', 'product_categories' ),
		'not_found'                  => __( 'Not Found', 'product_categories' ),
		'no_terms'                   => __( 'No Products Categories', 'product_categories' ),
		'items_list'                 => __( 'Products Categories list', 'product_categories' ),
		'items_list_navigation'      => __( 'Products Categories list navigation', 'product_categories' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
		'rest_base'                  => 'product_categories',
	);
	register_taxonomy( 'product_categories', array( 'nica_product' ), $args );

}
add_action( 'init', 'product_categories', 0 );