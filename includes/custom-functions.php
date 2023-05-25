<?php
# =========== STYLE LOGIN =========== #
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/dist/login-style.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

add_filter( 'login_headerurl', 'codecanal_loginlogo_url' );
function codecanal_loginlogo_url($url)
{
  return home_url();
}

function custom_admin_css() {
echo '<style type="text/css">
/* Removing Editor */
.block-editor-writing-flow__click-redirect {
	display: none;
}
.edit-post-visual-editor {
	flex-basis: auto;
	flex: 0;
}
.edit-post-layout .interface-interface-skeleton__content {
	background: #FFF;
}
.php-error #adminmenuback, .php-error #adminmenuwrap {
	margin-top: 0;
}
</style>';
}
add_action('admin_head', 'custom_admin_css');

# =========== REMOVE DEFAULT WP META BOXES =========== #
add_filter('acf/settings/remove_wp_meta_box', '__return_true');


# =========== ADD ACF OPTIONS =========== #
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}