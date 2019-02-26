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
          저희는, <br>
          넓은 시야로 시스템을 구축하여,<br>
          고객의 각각의 니즈에 대응합니다. <br>
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
							수정 디바이스 생산 설비 개발로 키운 고도의 기술로, 다양한 전자 디바이스의 생산 설비를 제공합니다.
						</h2>
						<div class="section__detail__content">
							카메라 모듈・수정 디바이스・센서 디바이스 등 전자 부품의 생산 설비를 복합 기술과 시야로, 설계부터 개발・운용 서포트까지 솔루션형 제품을 제공하고 있습니다.
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/profile/">회사 개요</a></div>
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
							확실한 기술,<br>확실한 설비로 신제품을 개발
						</h2>
						<div class="section__detail__content">
							2018년 8월에 준공한 신공장은 앞으로의 시대를 대비한 최신 설비를 완비함으로서 글로벌한 안건에 대응합니다.
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/facility/">회사 시설</a></div>
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
							차세대를 담당할<br>명확한 비전과 테크놀러지
						</h2>
						<div class="section__detail__content">
							고정도조립기술・고속반송기술・화상처리기술・진공기술・온도제어기술・계측기술을 핵심기술로서 전자부품관련 장비를 개발하고 있습니다.
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/technology/">테크놀러지</a></div>
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
					제품정보
				</h2>
				<p class="productsBlock__description">
					사회의 니즈와 고객의 요구를 정확하게 구현화한, 수정관련장비・센서관련장비・카메라모듈관련장비・그외 장비를 소개합니다.
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
					채용정보
				</h2>
			</header>
			<section class="horizontalCard">
				<figure class="horizontalCard__img">
					<img src="<?php echo AKIM_IMG_URI; ?>top/recruit-mv.jpg" alt="">
				</figure>
				<div class="horizontalCard__fill">
					<h3 class="recruitBlock__copy horizontalCard__index">
						AKIM의 미래를 담당할 인재를 <br>폭넓게 모집하고 있습니다.
					</h3>
					<div class="recruitBlock__description">
						저희와 함께 고도의 기술과 커리어를 축적해가지 않으시겠습니까. 사원은 중식이 무료, 헬스장과 테니스코드를 완비하였습니다.
					</div>
					<div class="button"><a href="<?php echo AKIM_URI; ?>/recruit">채용정보</a></div>
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
        공지사항
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
