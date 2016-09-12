<?php
// Package
function fim_package_posts() 
{
  $labels = array(
    'name' => _x('Packages', 'post type general name'),
    'singular_name' => _x('Package', 'post type singular name'),
    'add_new' => _x('Add New', 'Package'),
    'add_new_item' => __('Add New Package'),
    'edit_item' => __('Edit Package'),
    'new_item' => __('New Package'),
    'all_items' => __('All Packages'),
    'view_item' => __('View Package'),
    'search_items' => __('Search Packages'),
    'not_found' =>  __('No galleries found'),
    'not_found_in_trash' => __('No galleries found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Packages'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 4,
	'menu_icon' => SITEURL . '/package.png',
    'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  ); 
  register_post_type('package',$args);
  

  $labels = array(
    'name' => _x( 'Package Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Package Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Packages Type' ),
    'all_items' => __( 'All Packages Type' ),
    'parent_item' => __( 'Parent Package Type' ),
    'parent_item_colon' => __( 'Parent Package Type:' ),
    'edit_item' => __( 'Edit Package Type' ), 
    'update_item' => __( 'Update Package Type' ),
    'add_new_item' => __( 'Add New Package Type' ),
    'new_item_name' => __( 'New Package Type Name' ),
    'menu_name' => __( 'Package Type' ),
  ); 	
  register_taxonomy('package-type', 'package', array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'package' ),
  ));
  
  flush_rewrite_rules();
}


function fim_gallery_posts() 
{
  $labels = array(
    'name' => _x('Galleries', 'post type general name'),
    'singular_name' => _x('Gallery', 'post type singular name'),
    'add_new' => _x('Add New', 'Gallery'),
    'add_new_item' => __('Add New Gallery'),
    'edit_item' => __('Edit Gallery'),
    'new_item' => __('New Gallery'),
    'all_items' => __('All Galleries'),
    'view_item' => __('View Gallery'),
    'search_items' => __('Search Galleries'),
    'not_found' =>  __('No galleries found'),
    'not_found_in_trash' => __('No galleries found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Galleries'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 4,
	'menu_icon' => SITEURL . '/gallery.png',
    'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  ); 
  register_post_type('gallery',$args);
  

  $labels = array(
    'name' => _x( 'Gallery Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Gallery Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Galleries Type' ),
    'all_items' => __( 'All Galleries Type' ),
    'parent_item' => __( 'Parent Gallery Type' ),
    'parent_item_colon' => __( 'Parent Gallery Type:' ),
    'edit_item' => __( 'Edit Gallery Type' ), 
    'update_item' => __( 'Update Gallery Type' ),
    'add_new_item' => __( 'Add New Gallery Type' ),
    'new_item_name' => __( 'New Gallery Type Name' ),
    'menu_name' => __( 'Gallery Type' ),
  ); 	
  register_taxonomy('gallery-type', 'gallery', array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'gallery' ),
  ));
  
  flush_rewrite_rules();
}
?>