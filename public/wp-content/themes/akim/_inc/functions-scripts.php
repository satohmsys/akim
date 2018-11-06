<?php
/**
 * enqueue scripts
 */
function enqueueScripts(){
	/**
	 * js
	 */
	wp_enqueue_script( 'jq', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), false, true );
	wp_enqueue_script( 'com', AKIM_JS_URI. 'common.js', array( 'jq' ), 1, true );
	
	// if( is_home() ){
	// 	wp_enqueue_script( 'top', AKIM_CSS_URI. 'top.min.css', array('com'), 1, false );
	// }


	/**
	 * css
	 */
	wp_enqueue_style( 'com', AKIM_CSS_URI. 'common.min.css', array(), 1, false );
	
	if( is_home() ){
		wp_enqueue_style( 'top', AKIM_CSS_URI. 'top.min.css', array('com'), 1, false );
	} else if ( is_page() ){
		if( is_page( 'recruit') ){
			wp_enqueue_style( 'recruit', AKIM_CSS_URI. 'recruit.min.css', array('com'), 1, false );
		} else if ( is_page( 'privacypolicy') ){
			wp_enqueue_style( 'privacypolicy', AKIM_CSS_URI. 'privacypolicy.min.css', array('com'), 1, false );
		}else if ( is_page( 'company') || is_page( 'facility') || is_page( 'mind') || is_page( 'technology') ){
			wp_enqueue_style( 'company', AKIM_CSS_URI. 'company.min.css', array('com'), 1, false );
		} else {
			wp_enqueue_style( 'page', AKIM_CSS_URI. 'page-basic.min.css', array('com'), 1, false );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'enqueueScripts' );

?>