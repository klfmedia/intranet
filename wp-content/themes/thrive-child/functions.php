<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* ***** REMOVE THE ADMIN BAR FOR ALL USERS THAT DO NOT HAVE PERMISSION TO DELETE_PAGES *********/
function mytheme_remove_admin_bar() {
	if ( ! current_user_can( 'delete_pages' ) ) {
		show_admin_bar( false );
	}
}
add_action( 'after_setup_theme', 'mytheme_remove_admin_bar' );

/* ***********make categories required for event submission***************************/
function my_em_validate($result,$EM_Event){
  if( empty($EM_Event->get_categories()->categories) ){
     $EM_Event->add_error( __("category is required.", "dbem") );
     return false;
  }
  return $result;
}
add_filter('em_event_validate_meta','my_em_validate',10,2);

/* *********** hide the wordpress standard roles ***************************/

function exclude_role($roles) {
	//Hide Defualt Roles
	if (isset($roles['author'])) {
		unset($roles['author']);
	}
	if (isset($roles['editor'])) {
		unset($roles['editor']);
	}
	if (isset($roles['subscriber'])) {
		unset($roles['subscriber']);
	}
	if (isset($roles['contributor'])) {
		unset($roles['contributor']);
	}
	return $roles;
}
add_filter('editable_roles', 'exclude_role' );

?>