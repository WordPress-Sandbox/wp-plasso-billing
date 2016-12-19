<?php

/* Theme Support: Titles, etc.
---------------------------------------------------------------------------------------------------- */

add_theme_support('title-tag');

/* Get the Billing Class
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/assets/works/plasso-billing.php');

/* Plasso Protected Page
---------------------------------------------------------------------------------------------------- */

function plasso_protect_pages() {
	$options = get_theme_mod('plasso');
	$protected = $options['space_page'];

	// If we are on a protected page.
  if(is_page($protected)) {
    $plassoBilling = new PlassoBilling((isset($_GET['__logout']))?'logout':(isset($_GET['_plasso_token'])?$_GET['_plasso_token']:NULL));
	}
}
add_action('template_redirect','plasso_protect_pages');

/* Include Works: Customizer, etc.
---------------------------------------------------------------------------------------------------- */

require_once(get_template_directory() . '/assets/works/customizer.php');

/* Kirki: Including Kirki in this theme.
---------------------------------------------------------------------------------------------------- */

// Including Kirki
require_once(get_template_directory() . '/assets/works/vendor/kirki/kirki.php');

// Config Kirki to work from the theme.
function plasso_kirki_configuration() {
  return array('url_path' => get_stylesheet_directory_uri() . '/assets/works/vendor/kirki/');
}
add_filter('kirki/config', 'plasso_kirki_configuration');

/* Remove Menus: Removing unused WordPress menu items and taxonomy features.
---------------------------------------------------------------------------------------------------- */

function plasso_remove_menus() {

	// Removes unused top level menus.
	remove_menu_page('edit.php');
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'plasso_remove_menus');

function plasso_remove_customizer_settings($wp_customize){

	// Remove nav menus from the customizer.
	$wp_customize->remove_panel('nav_menus');
	$wp_customize->remove_section('custom_css');
}
add_action('customize_register', 'plasso_remove_customizer_settings', 20);

/* Enqueue: Adding styles and scripts.
---------------------------------------------------------------------------------------------------- */

function plasso_enqueue() {

	// Loads Google Fonts
	$query_args = array(
		'family' => 'Poppins:300,400,600'
	);
	wp_register_style('plasso_fonts', add_query_arg($query_args, 'https://fonts.googleapis.com/css'), array(), null);
	wp_enqueue_style('plasso_fonts');

	// Loads site styles
	wp_enqueue_style('plasso_site', get_template_directory_uri() . '/assets/styles/site-min.css');

	// Loads site scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('plasso_site', get_template_directory_uri() . '/assets/scripts/site-min.js', array('jquery'), '1.0', 'in-footer');
	wp_enqueue_script('plasso_overlay', 'https://plasso.com/embed/v3/e.js', array(), null, 'in-footer');

	// Localizes scripts
	wp_localize_script('plasso_site', 'plassoAjax', array(
		'ajaxUrl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('plasso-nonce')
	));
}
add_action('wp_enqueue_scripts', 'plasso_enqueue');
