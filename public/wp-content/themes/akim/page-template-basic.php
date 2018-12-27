<?php
/*
 * Template Name: 通常コンテンツテンプレート
 */
/**
 * 固定ページベース  template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Akim corpolate
 */

get_header(); ?>
<?php
	if( have_posts() ){
		while( have_posts() ){
			the_post();			
			remove_filter ('the_content', 'wpautop');　
?>
<!-- ***** mv -->
<?php 
	get_template_part('_inc/template-parts/header/subpage-mv');
?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
	<?php the_content(); ?>
</main>       
<?php
		}
	}
?>
<?php get_footer();?>
