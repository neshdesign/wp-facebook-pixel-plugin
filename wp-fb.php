<?php
/**
 * Plugin Name: Facebook Pixel Plugin v1.0
 * Plugin URI: http://prstart.co.uk
 * Description: This plugin adds the option to include Facebook Pixel tracking code easily.
 * Version: 1.0.0
 * Author: neshdesign
 * Author URI: http://prstart.co.uk
 * License: GPL2
 */

 // preventing direct accesss
if( !defined('ABSPATH') ) : exit; endif; 

 // Plugin contstants
 define( 'WPFB_PATH', trailingslashit (plugin_dir_path(__FILE__)));
 define( 'WPFB_URL', trailingslashit( plugins_url( '/', __FILE__)));

 // include admin.php and public.php
if(is_admin()) {
    require_once WPFB_PATH . '/admin/admin.php';
 }
if(!is_admin()) {
    require_once WPFB_PATH . '/public/public.php';
}