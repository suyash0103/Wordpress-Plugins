<?php 
    /*
    Plugin Name: Name Plug
    Plugin URI: http://localhost/wp-vs-352/wordpress/wp-admin/nameplug
    Description: Plugin for showing name
    Author: Suyash Ghuge
    Version: 1.0
    Author URI: http://localhost/wp-vs-352/wordpress/wp-admin/
    */
    add_action( 'the_content', 'display_name' );
    
    add_action('admin_menu', 'addName');
	function addName() {
	  add_menu_page('Name', 'Name', 'manage_options' ,__FILE__, 'display_name', 'dashicons-wordpress');
	}

	function display_name ( $content ) {
		global $current_user; wp_get_current_user(); 

		if ( is_user_logged_in() ) 
		{ 
			echo 'Hello ' . $current_user->user_login . "\n"; 
			echo "<br>";
			echo 'Hello ' . $current_user->display_name . "\n"; 
		} 
		else 
		{ 
			wp_loginout(); 
		}
	}
?>

