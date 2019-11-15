<?php

function university_post_types(){

	// Campus Post Type
	register_post_type('campus', array(
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'campuses'),
		'has_archive' => TRUE,
		'public' => TRUE,
		'menu_icon' => 'dashicons-location-alt',
		'labels' => array(
			// https://codex.wordpress.org/Function_Reference/register_post_type
			'name' => 'Campuses',
			'add_new_item' => 'Add New Campus',
			'edit_item' => 'Edit Campus',
			'all_items' => 'All Campuses',
			'singular_name' => 'Campus'
		)
	));

	// Event Post Type
	register_post_type('event', array(
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'events'),
		'has_archive' => TRUE,
		'public' => TRUE,
		'menu_icon' => 'dashicons-calendar',
		'labels' => array(
			// https://codex.wordpress.org/Function_Reference/register_post_type
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'
		)
	));

	// Program Post Type
	register_post_type('program', array(
		'supports' => array('title'),
		'rewrite' => array('slug' => 'programs'),
		'has_archive' => TRUE,
		'public' => TRUE,
		'menu_icon' => 'dashicons-awards',
		'labels' => array(
			// https://codex.wordpress.org/Function_Reference/register_post_type
			'name' => 'Programs',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'singular_name' => 'Program'
		)
	));

	// Professor Post Type
	register_post_type('professor', array(
		'show_in_rest' => TRUE,
		'supports' => array('title', 'editor', 'thumbnail'),
		'public' => TRUE,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'labels' => array(
			// https://codex.wordpress.org/Function_Reference/register_post_type
			'name' => 'Professors',
			'add_new_item' => 'Add New Professor',
			'edit_item' => 'Edit Professor',
			'all_items' => 'All Professors',
			'singular_name' => 'Professor'
		)
	));
}

add_action('init', 'university_post_types');