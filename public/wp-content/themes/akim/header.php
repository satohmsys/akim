<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Akim corpolate
 * @since 1.0
 * @version 1.0
 */
$akimLang = akim_lang();
if( $akimLang['lang'] == 'ch' ) $akimLang['lang'] = 'zh';
?><!DOCTYPE html>
<html <?php //language_attributes(); ?> lang="<?php echo $akimLang['lang'] ?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php get_template_part( '_inc/template-parts/meta/ogp'); ?>
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<link rel="alternate" hreflang="<?php echo $akimLang['lang'] ?>" href="<?php echo $akimLang['url']; ?>">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131371877-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-131371877-1');
</script>
</head>
<body <?php body_class(); ?>>
<?php get_template_part( '_inc/template-parts/header/header-main' ); ?>