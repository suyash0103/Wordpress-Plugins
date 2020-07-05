<?php 
    /*
    Plugin Name: Name Plug
    Plugin URI: http://localhost/wp-vs-352/wordpress/wp-admin/nameplug
    Description: Plugin for showing name
    Author: Suyash Ghuge
    Version: 1.0
    Author URI: http://localhost/wp-vs-352/wordpress/wp-admin/
    */
    add_action( 'the_content', 'my_thank_you_text' );

	function my_thank_you_text ( $content ) {
		global $current_user; wp_get_current_user(); 

		echo 'Following are your details:';
		echo "<br>";

		if ( is_user_logged_in() ) 
		{ 
			echo 'Username: ' . $current_user->user_login . "\n"; 
			echo "<br>";
			echo 'User display name: ' . $current_user->display_name . "\n"; 
		} 
		else 
		{ 
			wp_loginout(); 
		} 
	    // return $content .= '<p>Hello World!</p>';
	}

	// wp_get_current_user();
	// echo 'Username: ' . $current_user->user_login . "\n";
	// echo 'User display name: ' . $current_user->display_name . "\n";
	// <?php 

		

?>

