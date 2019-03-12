<?php

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