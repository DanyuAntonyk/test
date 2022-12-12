<?php

add_action( 'wp_enqueue_scripts', 
function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
});
function car_init() {
	register_post_type( 'car',
		array(
			'labels' => array(
				'name' => __( 'Cars' ),
				'singular_name'  => __( 'Car'),
				'add_new' =>'Add new car',
			),
			'supports' => array('thumbnail', 'title', 'editor'),
			'public' => true,
			'has_archive' => true,
		)
	);
}

	register_taxonomy(
		'brand',
		'car',
		array(
			'label' => ('Brand'),
			'hierarchical' => true,
			'description' => 'input car brand',
		)
	);
	register_taxonomy(
		'producing',
		'car',
		array(
			'label' => ('Producing country'),
			'hierarchical' => true,
			'description' => 'input producing country',
		)
	);
	register_taxonomy(
		'year',
		'car',
		array(
			'label' => ('Year'),
			'hierarchical' => true,
			'description' => 'input car year',
		)
	);
	register_taxonomy(
		'color',
		'car',
		array(
			'label' => ('Color'),
			'hierarchical' => true,
		)
	); 
	register_taxonomy(
		'fuel',
		'car',
		array(
			'label' => ('Fuel'),
			'hierarchical' => true,
			'description' => 'input car fuel',
		)
	); 
	register_taxonomy(
		'power',
		'car',
		array(
			'label' => ('Power'),
			'hierarchical' => true,
			'description' => 'input car power',
		)
	); 
	register_taxonomy(
		'price',
		'car',
		array(
			'label' => ('Price'),
			'hierarchical' => true,
			'description' => 'input car price',
		)
	); 

add_action('init', 'car_init');
add_theme_support( 'post-thumbnails' );
add_theme_support('title_tag');
add_theme_support('custom-logo');

?>