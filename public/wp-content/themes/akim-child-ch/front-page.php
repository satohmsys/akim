<?php
/**
 * The front page template file ( KOREAN )
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Akim corpolate
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<?php
  global $wp_post_types;
  $supports = &$wp_post_types['post']->supports;
//   var_dump($wp_post_types['post'] );
?>
	<!-- ***** mv -->
	<section class="mv">
		<div class="mv__img">
    <?php for($i=1;$i<8;$i++ ) { ?>
      <div class="mv__img__slide">
			  <img src="<?php echo AKIM_IMG_URI; ?>top/_sp/mv-<?php echo $i ;?>.jpg" alt="">
      </div>
    <?php } ?>
			<!-- <img src="<?php echo AKIM_IMG_URI; ?>top/mv.jpg" srcset="<?php echo AKIM_IMG_URI; ?>top/_sp/mv.jpg 768w, <?php echo AKIM_IMG_URI; ?>top/mv.jpg" width="1050" alt=""> -->
		</div>  
		<div class="wrap">
			<section class="mv__copy">
				<p class="mv__copy__en">
					<img src="<?php echo AKIM_IMG_URI; ?>top/mv-copy.svg" srcset="<?php echo AKIM_IMG_URI; ?>top/_sp/mv-copy.svg 480w, <?php echo AKIM_IMG_URI; ?>top/mv-copy.svg" width="838" alt="DEVELOPING TECHNOLOGY INTO THE FUTURE">
				</p>
				<h1 class="mv__copy__ja">
          我們以全面的視角通過完善系統<br>
          來回應客護的個別所有定制需求。
				</h1>
			</section>
		</div>
		<div class="mv__movie">
			<div class="mv__movieArea">
        <video src="<?php echo AKIM_IMG_URI; ?>/top/mv.mp4" autoplay muted loop></video>
      </div>
		</div>
		<i class="mv__scroll"></i>
	</section>
	<!-- ///// -->
	<!-- ***** company -->
	<section class="section section--company section--maintopic">
		<header class="section__index">
			<img src="<?php echo AKIM_IMG_URI; ?>top/company-index.svg" alt="COMPANY">
		</header>
		<div class="section__content">
			<section class="section__main">
				<div class="wrap">
					<figure class="section__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/company-mv.jpg" width="700" alt="">
					</figure>
					<div class="section__detail">
						<h2 class="section__detail__index">
							我們通過石英晶體器件生產設備所開發培養的先進技術、提供各種電子器件的生產設備。
						</h2>
						<div class="section__detail__content">
							我們從提供微型相機模組，石英晶體器件，傳感器器件等電子零件的生產設備所擁有多種技術和觀點，來提供規劃到開發・運營支持的解抉方案類型的產品。
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/profile/">公司簡介</a></div>
					</div>
				</div>
				<i class="triangle"></i>
			</section>
			<section class="section__gallery">
				<div class="inner">
					<figure class="section__gallery__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/company-li-1.jpg" width="300" alt="">
					</figure>
					<figure class="section__gallery__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/company-li-2.jpg" width="300" alt="">
					</figure>
				</div>
			</section>
			</div>
	</section>
	<!-- ///// -->
	<!-- ***** company -->
	<section class="section section--facility section--maintopic">
		<header class="section__index">
			<img src="<?php echo AKIM_IMG_URI; ?>top/facility-index.svg" alt="FACILIITY">
		</header>
		<div class="section__content">
			<section class="section__main">
				<div class="wrap">
					<figure class="section__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/facility-mv.jpg" width="700" alt="">
					</figure>
					<div class="section__detail">
						<h2 class="section__detail__index">
							用可靠先進的技術，<br>可靠先進的設備進行新產品的開發
						</h2>
						<div class="section__detail__content">
							2018年8月新工廠竣工建成了響應未來時代的最新裝備可對應全球的各種案例。
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/facility/">公司設施</a></div>
					</div>
				</div>
				<i class="triangle"></i>
			</section>
			<section class="section__gallery">
				<div class="inner">
					<figure class="section__gallery__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/facility-li-1.jpg" width="300" alt="">
					</figure>
					<figure class="section__gallery__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/facility-li-2.jpg" width="300" alt="">
					</figure>
				</div>
			</section>
		</div>
	</section>
	<!-- ///// -->
	<!-- ***** tech -->
	<section class="section section--technology section--maintopic">
		<header class="section__index">
			<img src="<?php echo AKIM_IMG_URI; ?>top/technology-index.svg" alt="TECHNOLOGY">
		</header>
		<div class="section__content">
			<section class="section__main">
				<div class="wrap">
					<figure class="section__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/technology-mv.jpg" width="700" alt="">
					</figure>
					<div class="section__detail">
						<h2 class="section__detail__index">
							為下一時代提供明確的願景和技術
						</h2>
						<div class="section__detail__content">
							我們擁有高精度裝配技術，高速搬送技術，圖像處理技術，真空技術，溫控技術，測量技術為核心技術開發，發展電子零件相關產品業務·石英晶體器件相關業務·傳感器相關業務 。
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/technology/">技術</a></div>
					</div>
				</div>
				<i class="triangle"></i>
			</section>
			<section class="section__gallery">
				<div class="inner">
					<figure class="section__gallery__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/technology-li-1.jpg" width="300" alt="">
					</figure>
					<figure class="section__gallery__img">
						<img src="<?php echo AKIM_IMG_URI; ?>top/technology-li-2.jpg" width="300" alt="">
					</figure>
				</div>
			</section>
		</div>
	</section>
	<!-- ///// -->
	<!-- ***** products -->
	<section class="productsBlock section--sub">
		<div class="wrap">
			<header class="section--sub__heading productsBlock__heading">
				<h2 class="section--sub__index productsBlock__index">
					產品信息
				</h2>
				<p class="productsBlock__description">
					介紹我們根據社會需求和客護要求準確可靠地體現所實現的石英晶體器件設備，傳感器相關設備以及其他相關設備。
				</p>
			</header>
			<!-- *** products -->
			<div class="productsSection">				
				<?php get_template_part( '_inc/template-parts/post/productlist'); ?>
			</div>
			<!-- /// -->
		</div>
	</section>
	<!-- ///// -->
	<!-- ***** recruit -->
	<section class="recruitBlock section--sub">
		<div class="wrap">
			<header class="section--sub__heading recruitBlock__heading">
				<h2 class="section--sub__index recruitBlock__index">
					招聘信息
				</h2>
			</header>
			<section class="horizontalCard">
				<figure class="horizontalCard__img">
					<img src="<?php echo AKIM_IMG_URI; ?>top/recruit-mv.jpg" alt="">
				</figure>
				<div class="horizontalCard__fill">
					<h3 class="recruitBlock__copy horizontalCard__index">
						我們正在廣泛招募擔起AKIM未來的人才。
					</h3>
					<div class="recruitBlock__description">
						讓我們一起來積累先進的技術和經驗。 員工可免費享用午餐，並配有健身房和網球場。
					</div>
					<div class="button"><a href="<?php echo AKIM_URI; ?>/recruit">招聘</a></div>
				</div>
			</section>
		</div>
		<i class="triangle triangle--left"></i>
	</section>
	<!-- ///// -->
	<!-- ***** news -->
	<section class="section newsBlock section--sub">
		<div class="wrap">
			<header class="section--sub__heading newsBlock__heading">
				<h2 class="section--sub__index newsBlock__index">
        通知
				</h2>
			</header>
			<!-- *** products -->
			<div class="newsList">
				<ul class="news">
					<?php
					$arg = array(
						'post_type' => 'news',
						'posts_per_page' => 5
					);
					$wpq = new WP_Query( $arg );

					if( $wpq -> have_posts() ){
						while( $wpq -> have_posts() ){
							$wpq -> the_post();
					?>
					<li class="news__item">
						<a href="<?php the_permalink(); ?>">
							<div class="newsTable">
								<span class="newsTable__time">
									<?php the_time( 'Y.m.d'); ?>
								</span>
								<span class="newsTable__index">
									<?php echo the_title(); ?>
								</span>
							</div>
						</a>
					</li>
					<?php
							}
						}
						wp_reset_postdata();
					?>
				</ul>
			</div>
			<!-- /// -->
		</div>
	</section>
<?php get_footer();?>
