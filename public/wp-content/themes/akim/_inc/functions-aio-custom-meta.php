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

  if( is_tax() ){
    // 閲覧中の言語をURIから判断。
    $currentPage = $_SERVER["REQUEST_URI"];
    preg_match("/ko|kr|en|ch/",$currentPage, $result);
    $selectedLang = $result ? $result[0] : 'ja';

    // AKIM株式会社の【商品名】を紹介します　の形式なので
    // 「AKIM株式会社」 / 「を紹介します」変数をそれぞれの言語で作成
      $description_prefix_before = 'AKIM株式会社の';
      $description_prefix_after = 'を紹介します。';

    if($selectedLang == 'ko'||$selectedLang == 'kr'){
      $description_prefix_before = 'AKIM주식회사의 ';
      $description_prefix_after = ' 소개합니다.';
    } elseif ($selectedLang == 'ch') {
      $description_prefix_before = '介紹AKIM株式会社的';
      $description_prefix_after = '';
    } elseif ($selectedLang == 'en') {
      $description_prefix_before = 'Introduction to ';
      $description_prefix_after = ' of AKIM Corporation.';
    }    
    $description = $description_prefix_before . single_term_title( false, false ) . $description_prefix_after;
  }


  return $description;
}
add_filter('aioseop_description', 'my_description');

?>