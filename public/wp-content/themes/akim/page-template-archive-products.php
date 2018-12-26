<?php
/*
 * Template Name: 製品カテゴリ一覧ページテンプレート
 */
/**
 * 製品カテゴリ一覧
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Akim corpolate
 */

get_header(); ?>
<!-- ***** mv -->
<?php include('_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
	<?php get_template_part( '_inc/template-base/page-productCat'); ?>
</main>       
<?php get_footer();?>
