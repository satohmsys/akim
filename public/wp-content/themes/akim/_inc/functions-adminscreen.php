<?php
/**
 * 管理画面メニュー
 * @link https://qiita.com/konweb/items/5483efbe87087eff5cc8
 */
function remove_menus () {
    global $menu;
    if (!current_user_can('level_10')) { //level10以下のユーザーの場合
      unset($menu[80]); // 設定
      unset($menu[65]); // プラグイン
      unset($menu[60]); // テーマ
    }    
    unset($menu[2]);  // ダッシュボード
      unset($menu[4]);  // メニューの線1
    unset($menu[5]);  // 投稿
    // unset($menu[10]); // メディア
    // unset($menu[15]); // リンク
    // unset($menu[20]); // ページ
    unset($menu[25]); // コメント
    // unset($menu[59]); // メニューの線2
    // unset($menu[70]); // プロフィール
    // unset($menu[75]); // ツール
    // unset($menu[80]); // 設定
    // unset($menu[90]); // メニューの線3
}
add_action('admin_menu', 'remove_menus');
?>