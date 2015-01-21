<?php
/******************************************************************/
/*
	Plugin Name: iMeud Auto-hide header
	Plugin URI:  http://main53.com/wordpress/auto-hide-header/
	Author:      Kittichai
	Author URI:  http://main53.com
	Version:     1.0
	Description: Auto-hide the header bar. covers a theme within nav tag. *Effective with Theme with header tag.
*/ 
/******************************************************************/
	add_action( 'init', 'm_auto_hide_header' ); 

/******************************************************************/
	function m_auto_hide_header() {
		wp_enqueue_script('m_auto_hide_header_script', plugin_dir_url( __FILE__ ) . '/auto-hide-header.js', array('jquery'));	 
	}

/******************************************************************/ 
