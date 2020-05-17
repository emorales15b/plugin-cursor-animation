<?php
/*
Plugin Name: MyPlugin
Plugin URI:
Description: Es mi primer plugin
Version: 1.1
Author: Erick Giovanny Morales Bustamante
Author URI: http://adrenalinalabs.online
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: EGMB
*/

/* Request Ajax */
require_once "admin/includes/ajax/ajax.php";

/* Request Admin */
require_once plugin_dir_path(__FILE__) . 'admin/admin.php';




add_action('wp_head', 'mypluginhead');

function mypluginhead(){
    echo get_option('myeffect');
}


?>