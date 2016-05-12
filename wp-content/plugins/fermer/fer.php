<?php
/*
Plugin Name: fermer
Plugin URI:
Description: Добавить фермера
Version: 1.0
Author: sanin25
Author URI:
License:
 */

add_action( 'init', 'create_fermer' );

function create_fermer() {
	$arg = array(
		'labels' => array(
			'name' => 'Д/фермер',
			'singular_name' => 'Movie Review',
			'add_new' => 'Добавить фермера',
			'add_new_item' => 'Добавление нового участника',
			'edit' => 'Edit',
			'edit_item' => 'Edit Movie Review',
			'new_item' => 'New Movie Review',
			'view' => 'View',
			'view_item' => 'View Movie Review',
			'search_items' => 'Search Movie Reviews',
			'not_found' => 'No Movie Reviews found',
			'not_found_in_trash' => 'No Movie Reviews found in Trash',
			'parent' => 'Parent Movie Review'
		),
		'public' => true,
		'menu_position' => 15,
		'supports' => array( 'title','editor', 'thumbnail' ),
		'taxonomies' => array( '' ),
		'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
		'has_archive' => true

	);
	register_post_type( 'fermer',$arg );
}

?>