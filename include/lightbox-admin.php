<?php 

// ---------------------------------------------------------------
// Admin Page
// ---------------------------------------------------------------

add_action('admin_menu','lightbox_tooltip_admin_menu');

function lightbox_tooltip_admin_menu() {
	add_menu_page(
		'Light Tooltip Info', //page title
		'Lightbox Tooltip', //menu title
		'manage_options', //capabilities
    	'lightbox_info', //menu slug
    	'lightbox_tooltip_info', //function
		'dashicons-info-outline' // icon
	);
}

// ---------------------------------------------------------------
// Display Info
// ---------------------------------------------------------------

function lightbox_tooltip_info() {

	if (!current_user_can('manage_options')) {
		wp_die('You do not have sufficient permissions!');
	}
	
  include GDX_LIGHTBOX_TOOLTIP_DIR . '/include/lightbox-instructions.php';
}
// ---------------------------------------------------------------
// CSS & JS
// ---------------------------------------------------------------

// register jquery and style on initialization
add_action('init', 'lightbox_tooltip_register_script');
function lightbox_tooltip_register_script() {
    wp_register_script('custom_jquery', plugins_url('/assets/js/jquery.min.js', __FILE__), array('jquery'), '3.5.1' );
    wp_register_script('lightbox_script', plugins_url('/assets/js/lightbox-tooltip.js', __FILE__));

    wp_register_style('lightbox_style', plugins_url('/assets/css/lightbox-tooltip.css', __FILE__), false, '1.0.0', 'all');

}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'lightbox_tooltip_register_style');
function lightbox_tooltip_register_style(){
   wp_enqueue_script('custom_jquery');
   wp_enqueue_script('lightbox_script');

   wp_enqueue_style('lightbox_style');
}

?>