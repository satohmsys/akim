<?php
/**
 * All in one seoを上書きして独自ディスクリプションを入れる
 */
function my_description($description){
  if(is_post_type_archive('news') ){
    $description = __('AKIM株式会社のお知らせ（一覧）のページです。', 'akim_tr');
  }
  if(is_post_type_archive('products') ){
    $description = __('AKIM株式会社の製品紹介ページです。', 'akim_tr');
  }
  return $description;
}
add_filter('aioseop_description', 'my_description');

?>