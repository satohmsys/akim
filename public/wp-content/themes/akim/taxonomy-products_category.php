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
	$subpagetitle = single_term_title( false, false );		
?>
<!-- ***** mv -->
<?php include('_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
	<!-- ***** 製品一覧 -->
	<section class="section section--items">
		<div class="wrap">
			<ul class="itemList">
				<?php
				
				$arg = array(
					'post_type' => 'products',
					'tax_query' => array(
						'relation' => 'AND',
						array(
							'taxonomy' => $taxonomy,
							'terms' => $term 
						)
					)
				);
				$wpq = new WP_Query( $arg );

				if( $wpq -> have_posts() ){
					while( $wpq->have_posts() ){
						$wpq -> the_post();			

						$allCustomFields = get_post_custom( $post -> ID);		
						$productBenefit = explode( ',', $allCustomFields['Benefit'][0]);
						$productImgs = array();
						foreach( $allCustomFields['Figure'] as $figure ){
							array_push($productImgs,  wp_get_attachment_url( $figure ) );
						}
				?>
				<li class="itemList__item">
					<?php 
						if(! count( $productImgs) ){
					?>
					<figure class="itemList__item__img">
						<img src="<?php echo AKIM_IMG_URI; ?>products/productimg-.png" alt="">
					</figure>
					<?php
						} else {
					?>
					<div class="itemList__item__img">
						<style>
							.emptyImg{
								width: 210px;
								height: 210px;
								margin-right:auto;
								margin-left: auto;								
								display: flex;
								justify-content: center;
								align-items: center;
								color: #999;
								font-weight: bold;
								font-family: 'Din', sans-serif;
								background: #ddd;
							}
						</style>
						<div class="emptyImg">
							NO IMAGE
						</div>
					</div>
					<?php
						} 
					?>
					<div class="itemList__item__content">
						<h2 class="itemList__item__index">
							<?php trim( the_title() ); ?>
						</h2>
						<div class="itemList__item__detail">
							<?php 
							if( count($productBenefit) ){
							?>
							<ul class="itemList__item__benefit">
							<?php 
								foreach( $productBenefit as $benefit ){
							?>
								<li class="itemList__item__benefit__item"><?php echo $benefit; ?></li>
							<?php
								}
							?>
							</ul>
							<?php
							} 
							?>
			
						</div>
						<div class="button"><a href="<?php the_permalink(); ?>">詳細</a></div>
					</div>
				</li>
				<?php
					}
				}
				?>
			</ul>			
		</div>
	</section>
	<!-- ///// -->
		<!-- *****　リンク -->
		<section class="section section--banner">
			<div class="wrap">
				<ul class="productBanner productBanner--main">
					<li class="productBanner__item">
						<a href="/products-hightspeedline.html">
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
								<img src="<?php echo AKIM_IMG_URI; ?>products/detail-link-line.jpg" srcset="<?php echo AKIM_IMG_URI; ?>products/link-line.jpg 480w, 
								<?php echo AKIM_IMG_URI; ?>products/detail-link-line.jpg" alt="">
							</figure>
						</a>
					</li>
				</ul>
				<ul class="productBanner relatedProduct">
					<li class="productBanner__item relatedProduct__item">
						<a href="" data-fancybox>							
							<figure class="relatedProduct__item__img">
								<img src="<?php echo AKIM_IMG_URI; ?>products/detail-link-suisho.jpg" alt="">
							</figure>
							<div class="button">
								<span>水晶振動子外観・構造</span>
							</div>
						</a>
					</li>
					<li class="productBanner__item relatedProduct__item">
						<a href=""  data-fancybox>							
							<figure class="relatedProduct__item__img">
								<img src="<?php echo AKIM_IMG_URI; ?>products/detail-link-crumpcareer.jpg" alt="">
							</figure>
							<div class="button">
								<span>トレイ・クランプキャリア</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			
            <i class="triangle triangle--left"></i>
            <i class="triangle triangle--right"></i>
		</section>

		<!-- \///// -->	
  
</main>       
<?php get_footer();?>
