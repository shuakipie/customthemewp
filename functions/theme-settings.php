<?php	
// Enque all styles and scripts	
function wpdocs_epic_scripts() {

	wp_enqueue_style( 'framework', get_template_directory_uri() . '/css/framework.css',false,time(),'all');
	wp_enqueue_style( 'desktop', get_template_directory_uri() . '/css/desktop.css',false,time(),'all');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css',false,time(),'all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome.css',false,time(),'all');
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap',false,time(),'all');

	wp_enqueue_script( 'hark-scripts', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), time(), true);
	wp_enqueue_script( 'hark-lib', get_template_directory_uri() . '/js/lib.js', array ( 'jquery' ), time(), true);
 
}

add_action( 'wp_enqueue_scripts', 'wpdocs_epic_scripts' );


function custom_rewrite_basic() {

    $prodCatArgs = ['taxonomy' => 'product_cat'];
    $wooCats = get_categories($prodCatArgs);
    $catSlugs = [];
    foreach($wooCats as $wooCat) {
        $catSlugs[] = $wooCat->slug;
    }
    add_rewrite_rule(
        '^('.implode('|', $catSlugs).')/([^/]*)/?',
        'index.php?post_type=product&category=$matches[1]&product=$matches[2]',
        'top'
    );
    flush_rewrite_rules();
}
add_action('init', 'custom_rewrite_basic');


function tailwindcss_setup_scripts(){
	wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri() . '/dist/output.css',false,time(),'all');

   
	//wp_equeue_script('tailwindcss_setup-navigation', get_template_directory_uri() . '/js/navigation.js' array(), _S_VERSION, 'true');
   
   
   
   }
   add_action( 'wp_enqueue_scripts', 'tailwindcss_setup_scripts' );



 // custom excerpt length
function epic_custom_excerpt_length( $length ) {
   return 22;
}
add_filter( 'excerpt_length', 'epic_custom_excerpt_length', 999 );

// add more link to excerpt
function epic_custom_excerpt_more($more) {
   global $post;
   return '...';
}
add_filter('excerpt_more', 'epic_custom_excerpt_more');
   
  

// Add HTML5 theme support
function prefix_setup() {
    add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
add_action( 'after_setup_theme', 'prefix_setup' );


// Remove the wordpress auto update email
add_filter( 'auto_core_update_send_email', '__return_false', 1 );


// Custom admin page
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );

// Add the custom login stylesheet
function my_login_stylesheet() { ?>
<link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/login.css?' . time(); ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'header-menu-main' 		=> __( 'Header Menu Main' ),
	'header-menu-sub' 		=> __( 'Header Menu Secondary' ),
	'header-menu-mobile' 	=> __( 'Mobile Menu' ),
	'footer-menu' 			=> __( 'Footer Menu' ),

) );


// Add thumbnail support
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
 }
 
  if ( function_exists( 'add_image_size' ) ) { 
	  
	// change all default image sizes 
	add_image_size( 'thumbnail', 180, 180, true );
	add_image_size( 'medium', 400, 300, true );
	add_image_size( 'large', 1400, 9999, false );
	add_image_size( 'product-gallery', 580, 430, true );
	add_image_size( 'page-banners', 1680, 350, true );

}

