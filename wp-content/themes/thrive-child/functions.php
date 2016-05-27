<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function mytheme_remove_admin_bar() {
	if ( ! current_user_can( 'delete_pages' ) ) {
		show_admin_bar( false );
	}
}
add_action( 'after_setup_theme', 'mytheme_remove_admin_bar' );


?>