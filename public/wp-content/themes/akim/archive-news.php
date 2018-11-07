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
	$subpagetitle = 'お知らせ';		
?>
<!-- ***** mv -->
<?php include('_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
	<section class="section section--archive">
		<div class="wrap">
			<?php
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$arg = array(
					'post_type' => 'news',
					'posts_per_page' > -1,
					'orderby' => 'post_date',
					'orderdesc' => 'date',
					'paged' => $paged
				);
				$wpq = new WP_Query( $arg );
				if( $wpq->have_posts() ){

					
			?>
			<ul class="news">
			<?php
				while( $wpq->have_posts() ){
					$wpq->the_post();
			?>
			<li class="news__item">
				<article>
					<header class="news__item__index">
						<h2 class="news__item__index__text">
							<?php the_title(); ?>
						</h2>
						<div class="news__item__index__date">
							<time><?php the_time( 'Y.m.d' ); ?></time>
						</div>
					</header>
					<div class="news__item__description">
						<?php the_excerpt(); ?>
					</div>
					<div class="button"><a href="<?php the_permalink(); ?>">お知らせを読む</a></div>
				</article>
			</li>			
			<?php
				}
			?>

			</ul>
			<?php 		
				}
			?>
			<nav class="pager">
				<ul class="pagerlist">
					<?php
						$big = 999999999;

						$pagelinks =  paginate_links(array(
							'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'show_all' => true,
							'type' => 'array',
							'format' => '?paged=%#%',
							'current' => max(1, get_query_var('paged')),
							'total' => $wpq->max_num_pages,
							'prev_text' => '<i class="prevIcon"></i>',
							'next_text' => '<i class="nextIcon"></i>',
						));			
						foreach( $pagelinks as $pagelink ){
					?>
					<li class="pagerlist__item"><?php echo $pagelink; ?></li>
					<?php		
						}	
					?>
					<!-- <li class="pagerlist__item pagerlist__item--prev">
						<a href=""><i class="prevIcon"></i></a>
					</li>
					<li class="pagerlist__item">
						<a href="">1</a>
					</li>
					<li class="pagerlist__item">
						<a href="">2</a>
					</li>
					<li class="pagerlist__item">
						<a href="">3</a>
					</li>
					<li class="pagerlist__item">
						<a href="">4</a>
					</li>
					<li class="pagerlist__item">
						<a href="">5</a>
					</li>
					<li class="pagerlist__item pagerlist__item--next">
						<a href=""><i class="nextIcon"></i></a>
					</li> -->

				</ul>
			</nav>			
		</div>
	</section>
</main>       
<?php get_footer();?>
