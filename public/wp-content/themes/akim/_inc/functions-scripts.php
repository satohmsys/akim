<?php
/**
 * enqueue scripts
 */
function enqueueScripts(){
	/**
	 * js
	 */
	wp_enqueue_script( 'jq', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), false, true );
	wp_enqueue_script( 'com', AKIM_JS_URI. 'common.min.css', array( 'jq'), 1, true );
	
	// if( is_home() ){
	// 	wp_enqueue_script( 'top', AKIM_CSS_URI. 'top.min.css', array('com'), 1, false );
	// }


	/**
	 * css
	 */
	wp_enqueue_style( 'com', AKIM_CSS_URI. 'common.min.css', array(), 1, false );
	
	if( is_home() ){
		wp_enqueue_style( 'top', AKIM_CSS_URI. 'top.min.css', array('com'), 1, false );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueueScripts' );

?>