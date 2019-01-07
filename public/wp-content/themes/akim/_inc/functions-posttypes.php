<?php
/**
 * post type
 */

function createPT(){

  register_taxonomy(
    'products_category',// 新規カスタムタクソノミー名
    'products',// 新規カスタムタクソノミーを反映させる投稿タイプの定義名
    array(
      'label' => __( '製品カテゴリ' ),// 表示するカスタムタクソノミー名
      'rewrite' => array( 'slug' => 'products_category' ),// カスタムタクソノミースラッグ名
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true,
      'hierarchical' => true,
      'show_admin_column' => true
      // 'capabilities' => array(
      // 	'assign_terms' => 'edit_guides',
      // 	'edit_terms' => 'publish_guides'
      // )
    )
  );

  register_post_type( 'products',
    array(
      'labels' => array(
        'name' => __( '製品情報',null ),
        'singular_name' => __( '製品',null )
      ),
      'public' => true,
      'publicly_queryable' => true,	  
      'has_archive' => true,
      'menu_icon'   => 'dashicons-pressthis',      
      'show_ui' => true,
      'meun_position' => 0,
      'supports' => array( 'title', 'page-attributes'),
      'rewrite' => array('slug' => 'products'),
    )
  );
 register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'お知らせ', null ),
        'singular_name' => __( 'お知らせ事項', null )
      ),
      'public' => true,
	  'publicly_queryable' => true,	  
    'has_archive' => true,
    'menu_icon'   => 'dashicons-testimonial',
	  'show_ui' => true,
	  'meun_position' => 0,
	  'supports' => array( 'title', 'editor', 'page-attributes','thumbnail'),
      'rewrite' => array('slug' => 'news'),
    )
  );  


}

add_action('init', 'createPT');

// add_action( 'admin_menu', 'change_post_menu_label' );
?>