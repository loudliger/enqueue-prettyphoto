<?php
/* 
 * Plugin Name: Enqueue PrettyPhoto
 */

function lets_enqueue_prettyPhoto(){
	wp_enqueue_script( 'prettyPhoto-js',  plugin_dir_url( __FILE__ ) . 'js/jquery.prettyPhoto.js' );
	wp_enqueue_style( 'prettyPhoto-css',  plugin_dir_url( __FILE__ ) . 'css/prettyPhoto.css' );
	wp_enqueue_style('prettyPhoto-custom', plugin_dir_url(__FILE__) . 'custom.js');
}

add_action('wp_enqueue_scripts', 'lets_enqueue_prettyPhoto');