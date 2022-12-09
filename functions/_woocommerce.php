<?php

add_theme_support('woocommerce');



// Remove Default Wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


// Create new Wrappers
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section class="container product-archive padding"><div class="row"><div class="col-xs-12">';
}

function my_theme_wrapper_end() {
  echo '</div></div></section>';
}


// Remove the additional information tab
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
 
 	unset( $tabs['description'] ); 
    unset( $tabs['additional_information'] ); 
    // unset( $tabs['reviews'] );   
 
    return $tabs;
}



add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );
function iconic_cart_count_fragments( $fragments ) { 
    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';
    return $fragments;
    
}





// Update WooCommerce Flexslider options

add_filter( 'woocommerce_single_product_carousel_options', 'ud_update_woo_flexslider_options' );

function ud_update_woo_flexslider_options( $options ) {

    $options['controlNav'] = true;

    $options['prevText'] = '<i class="far fa-arrow-circle-left"></i>';
    $options['nextText'] = '<i class="far fa-arrow-circle-right"></i>';

    return $options;
}		


add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}


remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );




// Remove product category/tag meta from its original position
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
  // Add product meta in new position
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5 );




  // Remove product title from its original position
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
  // Add product title in new position
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );


  
  // Remove product price from its original position
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
  // Add product price in new position
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 13 );
  
  
  
  
// Remove product title from its original position
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
  // Add product title in new position
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 14 );


  
    
// Remove product category/tag meta from its original position
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating',10 );
  // Add product meta in new position
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating',15 );




// excerpt position change
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 31 );




/**
 * Remove Woocommerce Select2 - Woocommerce 3.2.1+
 */
function woo_dequeue_select2() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'selectWoo');
        wp_deregister_script('selectWoo');
    } 
}
add_action( 'wp_enqueue_scripts', 'woo_dequeue_select2', 100 );



// Remove shipping calculator areas
add_filter( 'woocommerce_shipping_calculator_enable_city', '__return_false' );
add_filter( 'woocommerce_shipping_calculator_enable_state', '__return_false' ); 






// ADD ATTRIBUTE DESCRIPTION TAB

add_filter( 'woocommerce_product_tabs', 'woo_attrib_desc_tab' );
function woo_attrib_desc_tab( $tabs ) {
$tabs['attrib_desc_tab'] = array(
        'title'     => __( 'Description', 'woocommerce' ),
        'priority'  => 1,
        'callback'  => 'woo_attrib_desc_tab_content'
    );
    return $tabs;
}
function woo_attrib_desc_tab_content() { ?>


	        		<div>
		        		<div class="span_12"><?php the_content();?></div>    
	        		</div>
	        		
	        		
	        		
	        		<?php if( have_rows('technical_specs') ): ?>
	        		
	        			<div>
		        		<div class="span_12"> 
			        		
			        		<h3 style="margin-top:2rem;">Technical Specs</h3>
			        		
			        		<table class="specs-table">
				        		<tbody>
					        	
	        							 	<?php while ( have_rows('technical_specs') ) : the_row(); ?>
	        								<tr>
	        				
	        							        <td><?php the_sub_field('technical_specs_title'); ?></td><td><?php the_sub_field('technical_specs_description'); ?></td>
	        								</tr>
	        							
	        							    <?php endwhile; ?> 
				        		</tbody>
			        		</table>
		        		</div>
	        			</div>
	        							    
	        							<?php endif; ?>
	        		
	        		
	
	    

<?php }


// ADD ATTRIBUTE FEATURES TAB

add_filter( 'woocommerce_product_tabs', 'woo_attrib_features_tab' );
function woo_attrib_features_tab( $tabs ) {
$tabs['attrib_features_tab'] = array(
        'title'     => __( 'Features', 'woocommerce' ),
        'priority'  => 2,
        'callback'  => 'woo_attrib_features_tab_content'
    );
    return $tabs;
}
// ADD CUSTOM TAB DESCRIPTIONS
function woo_attrib_features_tab_content() { ?>
	
	
	
	        		<div>
		        		<div class="span_12"><?php the_field('product_features'); ?></div>    
	        		</div>
	
 <?php }




