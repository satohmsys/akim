<?php
/**
 * enqueue scripts
 */
function enqueueScripts(){

	$postType =  get_post_type( );
	/**
	 * js
	 */
	wp_enqueue_script( 'jq', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), false, true );
	wp_enqueue_script( 'com', AKIM_JS_URI. 'common.js', array( 'jq' ), 1, true );

	if ( $postType == 'products'  ){
		wp_enqueue_script( 'slick', AKIM_JS_URI. 'slick/slick.min.js', array( 'jq', 'com' ), 1, true );
		wp_enqueue_script( 'products', AKIM_JS_URI. 'productdetail.js', array( 'slick' ), 1, true );
	}
	
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
		} else if ( is_page( 'company') || is_page( 'facility') || is_page( 'mind') || is_page( 'technology') ){
			wp_enqueue_style( 'company', AKIM_CSS_URI. 'company.min.css', array('com'), 1, false );
		} else if ( is_page( 'contact') ){
			wp_enqueue_style( 'contact', AKIM_CSS_URI. 'contact.min.css', array('com'), 1, false );
		} else if ( is_page( 'product-category') ){
			wp_enqueue_style( 'product', AKIM_CSS_URI. 'products.min.css', array('com'), 1, false );
		} else {
			wp_enqueue_style( 'page', AKIM_CSS_URI. 'page-basic.min.css', array('com'), 1, false );
		}
	} else if ( $postType == 'news'  ){
		wp_enqueue_style( 'news', AKIM_CSS_URI. 'news.min.css', array('com'), 1, false );
	} else if ( $postType == 'products' || get_query_var('taxonomy') == 'products_category'  ){
		wp_enqueue_style( 'product', AKIM_CSS_URI. 'products.min.css', array('com'), 1, false );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueueScripts' );


function adminStyle(){
    wp_enqueue_style( 'adminStyle', get_template_directory_uri().'/_inc/css/admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'adminStyle' );
?>