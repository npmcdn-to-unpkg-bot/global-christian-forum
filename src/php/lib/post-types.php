<?php
// Register Block Post Type
function blocks_post_type() {
	$labels = array(
		'name'                  => _x( 'Blocks', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Block', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Blocks', 'text_domain' ),
		'name_admin_bar'        => __( 'Block', 'text_domain' ),
		'archives'              => __( 'Block Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Block:', 'text_domain' ),
		'all_items'             => __( 'All Blocks', 'text_domain' ),
		'add_new_item'          => __( 'Add New Blocks', 'text_domain' ),
		'add_new'               => __( 'New Block', 'text_domain' ),
		'new_item'              => __( 'New Block', 'text_domain' ),
		'edit_item'             => __( 'Edit Block', 'text_domain' ),
		'update_item'           => __( 'Update Block', 'text_domain' ),
		'view_item'             => __( 'View Block', 'text_domain' ),
		'search_items'          => __( 'Search Blocks', 'text_domain' ),
		'not_found'             => __( 'No block found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No block found in trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Block', 'text_domain' ),
		'description'           => __( 'Custom post type for blocks', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'taxonomies'            => array( 'block_type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-screenoptions',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'block', $args );
}
add_action( 'init', 'blocks_post_type', 0 );

// Register Resource Post Type
function resources_post_type() {
	$labels = array(
		'name'                  => _x( 'Resources', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Resources', 'text_domain' ),
		'name_admin_bar'        => __( 'Resource', 'text_domain' ),
		'archives'              => __( 'Resource Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Resource:', 'text_domain' ),
		'all_items'             => __( 'All Resources', 'text_domain' ),
		'add_new_item'          => __( 'Add New Resources', 'text_domain' ),
		'add_new'               => __( 'New Resource', 'text_domain' ),
		'new_item'              => __( 'New Resource', 'text_domain' ),
		'edit_item'             => __( 'Edit Resource', 'text_domain' ),
		'update_item'           => __( 'Update Resource', 'text_domain' ),
		'view_item'             => __( 'View Resource', 'text_domain' ),
		'search_items'          => __( 'Search Resources', 'text_domain' ),
		'not_found'             => __( 'No resource found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No resource found in trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'resources',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Resource', 'text_domain' ),
		'description'           => __( 'Custom post type for resources', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions' ),
		'taxonomies'            => array( 'resource_type', 'resource_topic' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 100,
		'menu_icon'             => 'dashicons-category',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'resource', $args );
}
add_action( 'init', 'resources_post_type', 0 );
