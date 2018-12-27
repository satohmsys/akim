<?php

/**
* set up content
*/
function akimtheme_setup() {
	/**
	 * 翻訳ファイル
	 * @link https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/load_theme_textdomain
	 */
	// load_theme_textdomain( 'twentyseventeen' );

	// add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5');

	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );
	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'Header'    => __( 'Top Menu', 'akim' )
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( '_inc/css/editor-style.css' ) );



	/**
	 * sidebar
	 */
	function wigetsInit(){
		register_sidebar( array(
			'name' => '製品情報サイドバー',
			'id' => 'sidebar-product',
			'description' => '製品情報',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
		/***
		 * nav menu
		 */
		function registerMyMenu() {
			register_nav_menu( 'header' );
		}
	}
	add_action( 'widgets_init', 'wigetsInit' );	

	// // Define and register starter content to showcase the theme on new sites.
	// $starter_content = array(
	// 	'widgets' => array(
	// 		// Place three core-defined widgets in the sidebar area.
	// 		'sidebar-1' => array(
	// 			'text_business_info',
	// 			'search',
	// 			'text_about',
	// 		),

	// 		// Add the core-defined business info widget to the footer 1 area.
	// 		'sidebar-2' => array(
	// 			'text_business_info',
	// 		),

	// 		// Put two core-defined widgets in the footer 2 area.
	// 		'sidebar-3' => array(
	// 			'text_about',
	// 			'search',
	// 		),
	// 	),


	// 	// Default to a static front page and assign the front and posts pages.
	// 	'options' => array(
	// 		'show_on_front' => 'page',
	// 		'page_on_front' => '{{home}}',
	// 		'page_for_posts' => '{{blog}}',
	// 	),

	// 	// Set the front page section theme mods to the IDs of the core-registered pages.
	// 	'theme_mods' => array(
	// 		'panel_1' => '{{homepage-section}}',
	// 		'panel_2' => '{{about}}',
	// 		'panel_3' => '{{blog}}',
	// 		'panel_4' => '{{contact}}',
	// 	),

	// 	// Set up nav menus for each of the two areas registered in the theme.
	// 	'nav_menus' => array(
	// 		// Assign a menu to the "top" location.
	// 		'top' => array(
	// 			'name' => __( 'mainnav', 'akimcorpolate' ),
	// 			'items' => array(
	// 				'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
	// 				'page_about',
	// 				'page_blog',
	// 				'page_contact',
	// 			),
	// 		),

	// 		// Assign a menu to the "social" location.
	// 		'social' => array(
	// 			'name' => __( 'Social Links Menu', 'twentyseventeen' ),
	// 			'items' => array(
	// 				'link_yelp',
	// 				'link_facebook',
	// 				'link_twitter',
	// 				'link_instagram',
	// 				'link_email',
	// 			),
	// 		),
	// 	),
	// );

	// /**
	//  * Filters Twenty Seventeen array of starter content.
	//  *
	//  * @since Twenty Seventeen 1.1
	//  *
	//  * @param array $starter_content Array of starter content.
	//  */
	// $starter_content = apply_filters( 'twentyseventeen_starter_content', $starter_content );

	// add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'akimtheme_setup' );



/**
 * 関数操作：get_the_archive_title
 * @link: http://shintaro-kawase.hatenablog.com/entry/20160620/1466351239
 */
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_archive() ) {       
            $title = post_type_archive_title( '', false );   
        } elseif (  is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>';
        }
    return $title;
});


/**
 * サムネイル生成の制限
 * @link https://www.nxworld.net/wordpress/wp-remove-image-sizes.html
*/
function remove_image_sizes($sizes) {
  unset( $sizes['thumbnail'] );
  unset( $sizes['medium'] );
  unset( $sizes['large'] );
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_image_sizes' );
?>