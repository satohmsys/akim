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
  
</main>       
<?php get_footer();?>
