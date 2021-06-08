<?php
/**
 * Init styles and scripts
 * 
 * @return void
 */
function wp_fb_admin_styles_scripts() {
    wp_enqueue_style( 'admin-style', WPFB_URL . '/admin/css/admin.css', '', rand() ); // CSS file from admin folder
    wp_enqueue_script( 'admin-script', WPFB_URL . '/admin/js/admin.js', array('jquery'), rand(), true ); // JS file from admin folder
}
add_action( 'admin_enqueue_scripts','wp_fb_admin_styles_scripts' );