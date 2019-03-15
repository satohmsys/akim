<?php
/**
 * 他言語用URLを吐き出す
 * @return siteurl {string} サイトのURL。ドメイン
 * @return currenturl { string } 今開いているパス
 * @return url {string } 今開いているURL
 * @return lang {string} URLから判断する、選択している言語。
 *                       201903現在 日本URL：'', 英URL：'/en/', 韓URL, '/kr/', 中URL, '/ch/'
 *                        wordpressマルチサイトURL変更時にはリンク出力しているheader-main.phpに影響。
 */
function akim_lang(){
  $siteUrl = (empty($_SERVER["HTTPS"]) ? "http://" : "https://" ) . $_SERVER["HTTP_HOST"];
  $currentPageUrl = $_SERVER["REQUEST_URI"];
  $returns = array();

  preg_match("/ko|kr|en|ch/",$currentPageUrl, $result);
  $selectedLang = $result ? $result[0] : 'ja';
  
  $prefix = $selectedLang == 'ja' ? "" : '/' . $key;
  $currentPagePath = preg_replace("/\/(ko|kr|en|ch)/", "", $currentPageUrl, 1 );
  
  $returns['siteurl'] = $siteUrl;
  $returns['currenturl'] = $currentPageUrl;
  $returns['url'] = $siteUrl . $currentPageUrl;
  $returns['lang'] = $selectedLang;

  return $returns;
}

?>