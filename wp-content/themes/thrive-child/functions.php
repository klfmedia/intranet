<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* ***** REMOVE THE ADMIN BAR FOR ALL USER THAT DOES NOT HAVE PERMISSION TO DELETE_PAGES *********/
function mytheme_remove_admin_bar() {
	if ( ! current_user_can( 'delete_pages' ) ) {
		show_admin_bar( false );
	}
}
add_action( 'after_setup_theme', 'mytheme_remove_admin_bar' );

/* ****** ADD A SHORTCODE TO MODIFY THE MAIN QUESTIONS SHORTCODE TO REMOVE THE SEARCH BAR, ETC. ************/

?>