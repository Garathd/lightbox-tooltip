<?php 

// ---------------------------------------------------------------
// Admin Page
// ---------------------------------------------------------------

add_action('admin_menu','lightbox_tooltip_admin_menu');

function lightbox_tooltip_admin_menu() {
	add_menu_page(
		'Lightbox Tooltip Info', //page title
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

// Register Jquery and Styles to frontend
add_action('wp_enqueue_scripts', 'lightbox_tooltip_register_style');
function lightbox_tooltip_register_style(){
   wp_enqueue_script('lightbox_script', plugins_url('/assets/js/lightbox-tooltip.js', __FILE__));
   wp_enqueue_style('lightbox_style', plugins_url('/assets/css/lightbox-tooltip.css', __FILE__));
}

// Register Jquery and Styles to Backend on Lightbox Tooltip Page
function add_scripts_to_menu_page() {
	$page_title = esc_html( get_admin_page_title() );
	
    if ($page_title == 'Lightbox Tooltip Info') {
		wp_enqueue_script('lightbox_script', plugins_url('/assets/js/lightbox-tooltip.js', __FILE__));
		wp_enqueue_style('lightbox_style', plugins_url('/assets/css/lightbox-tooltip.css', __FILE__));
	} 
}
add_action( 'admin_enqueue_scripts', 'add_scripts_to_menu_page' );
?>

