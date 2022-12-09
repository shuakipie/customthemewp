<?php 
	




// add custom post type 'Products'


add_action( 'init', 'create_product' );
function create_product() {
	register_post_type( 'product',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
		'public' => true,
		'menu_icon' => 'dashicons-cart',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes','excerpt'),
		'rewrite' => array( 'slug' => 'product' ),
		'hierarchical' => true,
		'has_archive' => true,	
		)
	);
}



add_action( 'init', 'create_product_cat' );

function create_product_cat() {
	register_taxonomy(
		'product_cat',
		'product',
		array(
			'label' => __( 'Category' ),
			'rewrite' => array( 'slug' => 'product-category' ),
			'hierarchical' => true,
		)
	);
}	
	
	
	
add_action( 'init', 'create_product_brand' );
function create_product_brand() {
	register_taxonomy(
		'product_brand',
		'product',
		array(
			'label' => __( 'Brand' ),
			'rewrite' => array( 'slug' => 'product-brand' ),
			'hierarchical' => true,
		)
	);
}	
		
	
	
	
	
	
	
	
	
	
	
	/*
	
// add custom post type 'Team'


add_action( 'init', 'create_team' );
function create_team() {
	register_post_type( 'team',
		array(
			'labels' => array(
				'name' => __( 'Team' ),
				'singular_name' => __( 'Team' )
			),
		'public' => true,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		'rewrite'   => false,
		'hierarchical' => false,
		'has_archive' => false,	
		)
	);
}	
	
	
// add custom post type 'Testimonials'


add_action( 'init', 'create_testimonials' );
function create_testimonials() {
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' )
			),
		'public' => true,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		'rewrite'   => false,
		'hierarchical' => false,
		'has_archive' => false,	
		)
	);
}




// add custom post type 'Services'


add_action( 'init', 'create_services' );
function create_services() {
	register_post_type( 'services',
		array(
			'labels' => array(
				'name' => __( 'Services' ),
				'singular_name' => __( 'Service' )
			),
		'public' => true,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		'rewrite' => array( 'slug' => 'services' ),
		'hierarchical' => true,
		'has_archive' => true,	
		)
	);
}

*/
