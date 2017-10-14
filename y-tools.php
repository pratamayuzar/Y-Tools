<?php
/*
Plugin Name: Y Tools
Plugin URI: http://y-stuff.com
Description: a plugin to create awesomeness and spread joy
Version: 1.0
Author: Mr. Y
Author URI: http://mry.com
License: YLic
*/


add_action('admin_menu', 'y_plugin_setup_menu');
 
function y_plugin_setup_menu(){
    add_menu_page( 'Y Tools', 'Y Tools', 'manage_options', 'y-Tutorial', 'y_init' );
}

function y_init(){
    include_once('template/tutorial.php');
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'my_plugin_action_links' );
function my_plugin_action_links( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'admin.php?page=y-Tutorial') ) .'">Tutorial</a>';
   return $links;
}

add_action( 'wp_enqueue_scripts', 'my_admin_scripts' );
function my_admin_scripts() {
    wp_enqueue_script( 'y-script', plugin_dir_url( __FILE__ ) . '/js/y-script.js', array( 'jquery' ) );
}

function y_button_func( $atts ) {
	$tidio = (isset($atts['tidio']) ? "onclick='tidioChatApi.open();'" : '');
	$text = (isset($atts['text']) ? $atts['text'] : 'Open Chat' );
	$class = (isset($atts['class']) ? $atts['class'] : '' );
	$message = (isset($atts['message']) ? $atts['message'] : null );
	$add_attribute = '';
	if ($tidio){
		$class .= " y-tidio hide";
	}
	if ($message and $message != ''){
		$add_attribute = "message='$message'";
	}

	if (isset($atts['link']) or $tidio != ''){
		$link = (isset($atts['link']) ? $atts['link'] : '#' );
		$btn = "<a href='$link' class='$class' $add_attribute><button>$text</button></a>";
	} else {
		$btn = "<button class='$class'>$text</button>";
	}
	return $btn;
}
add_shortcode( 'y_button', 'y_button_func' );
?>