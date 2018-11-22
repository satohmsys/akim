<?php
/**
 * お知らせ一覧
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
	$subpagetitle = '製品情報';		
?>
<!-- ***** mv -->
<?php include('_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
<section class="section section--products">
	<div class="wrap">
		<section class="section__child">
			<?php get_template_part( '_inc/template-parts/post/productlist'); ?>	
		</section>	
		<section class="section__child">
			<ul class="productBanner">
				<li class="productBanner__item">
					<a href="<?php echo AKIM_PAGE_HIGHSPEEDLINE; ?>">
						<div class="button button-secondary">
							<span>
								<header class="productBanner__item__index">
									高速生産ライン
								</header>
								<p class="productBanner__item__description">
									タクト0.6secを実現
								</p>
							</span>
						</div>
						<figure class="productBanner__item__img">
							<img src="<?php echo AKIM_IMG_URI; ?>products/link-line.jpg" alt="">
						</figure>
					</a>
				</li>
				<li class="productBanner__item productBanner--movie">
					<a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-fancybox>
						<div class="button button-secondary">
							<span>
								<header class="productBanner__item__index">
									MOVIE
								</header>
								<p class="productBanner__item__description">
									Akimの機械技術を一部紹介
								</p>
							</span>
						</div>
						<figure class="productBanner__item__img">
							<img src="<?php echo AKIM_IMG_URI; ?>products/link-movie.jpg" alt="">
						</figure>
						<i class="icon--play"></i>
					</a>
				</li>
			</ul>
		</section>
	</div>
</section>
</main>       
<?php get_footer();?>
