<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Услуги.
	 */

	$labels = [
		"name" => esc_html__( "Услуги", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Услуги", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Услуги", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Услуги", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Услуги", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Услуги", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Услуги", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Услуги", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Услуги", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Услуги", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Услуги found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Услуги found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Услуги:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Услуги", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Услуги", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Услуги", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Услуги", "custom-post-type-ui" ),
		"archives" => esc_html__( "Услуги archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Услуги", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Услуги", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Услуги list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Услуги list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Услуги list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Услуги attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Услуги", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Услуги published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Услуги published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Услуги reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Услуги scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Услуги updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Услуги:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Услуги", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "service", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-tools",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "service", $args );

	/**
	 * Post Type: Портфолио.
	 */

	$labels = [
		"name" => esc_html__( "Портфолио", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Портфолио", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Портфолио", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Портфолио", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Портфолио", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Портфолио", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Портфолио", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Портфолио", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Портфолио", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Портфолио", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Портфолио found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Портфолио found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Портфолио:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Портфолио", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Портфолио", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Портфолио", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Портфолио", "custom-post-type-ui" ),
		"archives" => esc_html__( "Портфолио archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Портфолио", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Портфолио", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Портфолио list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Портфолио list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Портфолио list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Портфолио attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Портфолио", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Портфолио published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Портфолио published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Портфолио reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Портфолио scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Портфолио updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Портфолио:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Портфолио", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: категория услуги.
	 */

	$labels = [
		"name" => esc_html__( "категория услуги", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "категория услуги", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "категория услуги", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All категория услуги", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit категория услуги", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View категория услуги", "custom-post-type-ui" ),
		"update_item" => esc_html__( "Update категория услуги name", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new категория услуги", "custom-post-type-ui" ),
		"new_item_name" => esc_html__( "New категория услуги name", "custom-post-type-ui" ),
		"parent_item" => esc_html__( "Parent категория услуги", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent категория услуги:", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search категория услуги", "custom-post-type-ui" ),
		"popular_items" => esc_html__( "Popular категория услуги", "custom-post-type-ui" ),
		"separate_items_with_commas" => esc_html__( "Separate категория услуги with commas", "custom-post-type-ui" ),
		"add_or_remove_items" => esc_html__( "Add or remove категория услуги", "custom-post-type-ui" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used категория услуги", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No категория услуги found", "custom-post-type-ui" ),
		"no_terms" => esc_html__( "No категория услуги", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "категория услуги list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "категория услуги list", "custom-post-type-ui" ),
		"back_to_items" => esc_html__( "Back to категория услуги", "custom-post-type-ui" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "custom-post-type-ui" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "custom-post-type-ui" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "custom-post-type-ui" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "категория услуги", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'service-category', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "service-category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "service-category", [ "portfolio" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );