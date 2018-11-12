<?php
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
	<section class="section section--postArea postArea">
		<div class="wrap">
			<?php the_content(); ?>
		</div>
	</section>
</main>       
<?php
		}
	}
?>
<?php get_footer();?>

