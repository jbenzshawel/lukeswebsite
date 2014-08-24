<?php
/*
 Functions file for Luke's Website
*/

// set up menus
function RegisterNavMenus() {
  register_nav_menu('nav-menu', __('Navigation Menu'));
}
add_action( 'init', 'RegisterNavMenus' );

// enable post thumbnails
add_theme_support( 'post-thumbnails' ); 
