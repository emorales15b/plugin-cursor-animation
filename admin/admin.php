<?php
add_action( 'admin_menu', 'myplugin_admin' );

function myplugin_admin()
{
    add_menu_page(
        'MyPlugin',     // page title
        'MyPlugin',     // menu title
        'manage_options',   // capability
        'myplugin',     // menu slug
        'myplugin_function_main', // callback function
        'dashicons-twitter'
    );

    add_submenu_page(
		"myplugin",
		"myplugin",
		"About us",
		'edit_posts',
		'myplugin-about',
		'about_myplugin_admin'
    );


}

function myplugin_function_main(){

  if (!current_user_can('manage_options')) {
		wp_die('No permission to access');
	}

	$file = plugin_dir_path( __FILE__ ) . "includes/dashboard.php";

		require $file;

}


function about_myplugin_admin()
{

  if (!current_user_can('manage_options')) {
		wp_die('No permission to access');
	}

	$file = plugin_dir_path( __FILE__ ) . "includes/aboutus.php";

		require $file;

}




?>