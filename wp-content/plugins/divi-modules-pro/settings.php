<?php 
require_once plugin_dir_path(__FILE__) . 'admin/admin.php';
require_once plugin_dir_path(__FILE__) . 'public/public.php';
function dmpro_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviModulesPro.php';
}
add_action( 'divi_extensions_init', 'dmpro_initialize_extension' );
function dmpro_divi_menu() {
    add_submenu_page('et_divi_options', __( 'Divi Modules Pro', 'dmpro-divi-modules-pro' ), __( 'Divi Modules Pro', 'dmpro-divi-modules-pro' ), 'manage_options', 'divi_modules_pro', 'divi_modules_pro' );	  
}
add_action('admin_menu','dmpro_divi_menu', 30);
function smpl_deregister_styles() {
	wp_dequeue_style( 'divi-modules-pro-styles' );
}
add_action('init', function() {
	if (!is_user_logged_in()) {
		add_action( 'wp_enqueue_scripts', 'smpl_deregister_styles', 15 ); 
	}
});