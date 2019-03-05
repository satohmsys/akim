<?php


/**
 * CSS読み込み
*/
  function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
  }
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


/**
 * 言語ファイル読み込み（kr）
 * @link ： http://kwski.net/wordpress/1075/
 * @link ： http://affinote.net/wordpress/1965/
 * @link 翻訳関数について：https://php1st.com/1972
 */
add_action( 'after_setup_theme', 'akim_multilang_kr' );
function akim_multilang_kr(){
    load_child_theme_textdomain( 'akim_tr', get_stylesheet_directory() . '/lang' );
}
?>