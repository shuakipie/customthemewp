<?php
	
	function custom_admin_css() {
	global $current_user;
	wp_get_current_user() ;
	if ($current_user->ID != 1) {
           echo '<style type="text/css">.plugin-count, .update-count, .countval {display: none!important; }</style>';
	}
}

add_action('admin_head','custom_admin_css');
add_action('admin_init', 'epic_lock_panels');
function epic_lock_panels() {
    global $submenu, $userdata;
    wp_get_current_user();
    if ($userdata->ID != 1) {
        unset($submenu['index.php'][10]);
    }
}	
	
	
// Remove default emojis	
function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

// filter the Gravity Forms button type
add_filter("gform_submit_button", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
    return "<button class='button clear white' id='gform_submit_button_{$form["id"]}'>{$form["button"]["text"]}</button>";
}
		
add_filter("gform_init_scripts_footer", "init_scripts");
function init_scripts() {
return true;
}	
	
// Stop comment spam on media files
add_filter( 'comments_open', 'noMediaComments', 10, 2 );
 
function noMediaComments( $open, $post_id ) {
$post = get_post( $post_id );
if ( 'attachment' == $post->post_type )
$open = false;
return $open;
}




function filter_ptags_on_images($content) {
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images', 9999);
add_filter('the_content', 'filter_ptags_on_images', 9999);




// Remover the admin bar
show_admin_bar(false);


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
function twentyten_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );	
