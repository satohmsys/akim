<?php
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
<section class="section section--products">
	<div class="wrap">
		<?php get_template_part( '_inc/template-parts/post/productlist'); ?>		
	</div>
</section>