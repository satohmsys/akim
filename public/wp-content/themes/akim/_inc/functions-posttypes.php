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
        'name' => __( '製品情報','textdomain' ),
        'singular_name' => __( '製品','textdomain' )
      ),
      'public' => true,
      'publicly_queryable' => true,	  
      'has_archive' => true,
      'menu_icon'   => 'dashicons-pressthis',      
      'show_ui' => true,
      'meun_position' => 0,
      'supports' => array( 'title'),
      'rewrite' => array('slug' => 'products'),
    )
  );
 register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'お知らせ' ),
        'singular_name' => __( 'お知らせ事項' )
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



/**
 * 「投稿」の扱い変更
 */
  global $wp_post_types;
  $has = &$wp_post_types['post']->has_archive;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'ニュース';
  $labels->singular_name = 'ニュース';
  $labels->add_new = _x('追加', 'ニュース');
  $labels->add_new_item = 'ニュースの新規追加';
  $labels->edit_item = 'ニュースの編集';
  $labels->new_item = '新規ニュース';
  $labels->view_item = 'ニュースを表示';
  $labels->search_items = 'ニュースを検索';
  $labels->not_found = '記事が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
  $has = true;

}

add_action('init', 'createPT');


/**
 * 「投稿」の扱い変更
 */
function change_post_menu_label() {
global $menu;
global $submenu;
$menu[5][0] = 'ニュース';
$submenu['edit.php'][5][0] = 'ニュース一覧';
$submenu['edit.php'][10][0] = '新しいニュース';
$submenu['edit.php'][16][0] = 'タグ';
//echo ";
}
// add_action( 'admin_menu', 'change_post_menu_label' );
?>