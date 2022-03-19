<?php
/*
Plugin Name:  MY-PLUGIN
Plugin URI:   https://www.myplugin.com 
Description:  This is a plugin which serches the 5 best customers of woocommerce
Version:      1.0
Author:       KAMDEM VADECE 
Author URI:   https://www.myplugin.com
License:      ---
License URI:  ---
Text Domain:  ---
Domain Path:  ---
*/

add_action('admin_menu', 'myplugin_options_page');

function myplugin_options_page() {
  add_menu_page('MY-PLUGING', 'My-Plugin-Menu', 'manage_options', 'myplugin', 'myplugin');
}

function myplugin ()	{
	include_once('View/best_customers_View.php');
}