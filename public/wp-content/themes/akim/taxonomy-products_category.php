<?php
/**
 * 製品情報 商品一覧
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
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC',
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						'relation' => 'AND',                     //条件1,2をどのような関係で指定するか
						array(
							'taxonomy' => $taxonomy,
							'field' => 'slug',
							'terms' => array($term)             //タームをスラッグで指定('field'が'slug'なので)
						)
				  )					
				);
				$wpq = new WP_Query( $arg );
        $wpq->set( 'orderby', 'menu_order' );

				if( $wpq -> have_posts() ){
					while( $wpq->have_posts() ){
						$wpq -> the_post();			

						$allCustomFields = get_post_custom( $post -> ID);		
						$productBenefit = explode( ',', $allCustomFields['Benefit'][0]);
						$productBenefit = array_filter( $productBenefit, 'strlen');
						$productImgs = array();
            if( count($allCustomFields['Figure']) ){
              foreach( $allCustomFields['Figure'] as $figure ){
                array_push($productImgs,  wp_get_attachment_url( $figure ) );
              }
            }
				?>
				<li class="itemList__item">
					<?php 
						if( count( $productImgs) ){
					?>
					<figure class="itemList__item__img">
						<img src="<?php echo $productImgs[0]; ?>" alt="">
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
							if(! empty($productBenefit) ){
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
						<div class="button"><a href="<?php the_permalink(); ?>"><?php echo __('詳細', 'akim_tr'); ?></a></div>
					</div>
				</li>
				<?php
					}
					wp_reset_postdata();
				}
				?>
			</ul>			
		</div>
	</section>
	<!-- ///// -->
		<!-- *****　リンク -->
		<section class="section section--banner">
			<div class="wrap">
  			<?php 
				get_template_part( '_inc/template-parts/post/productbanner-highspeed');
				get_template_part( '_inc/template-parts/post/productbanner-related');
			?>
			</div>
            <i class="triangle triangle--left"></i>
            <i class="triangle triangle--right"></i>
		</section>
		<!-- \///// -->	
</main>       
<?php get_footer();?>
