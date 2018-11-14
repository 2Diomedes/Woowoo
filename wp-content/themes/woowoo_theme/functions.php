<?php
// Woocommerce Function
function rawoo_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'rawoo_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


// My Steelsheets
function my_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri(), '/style.css' );
}
add_action( 'wp_enqueue_script', 'my_style' );


// NAV MENU
function register_my_menu() {
	register_nav_menu('new-menu',__( 'New Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

// POur ajouter des extrait de page
  add_post_type_support( 'page', 'excerpt' );