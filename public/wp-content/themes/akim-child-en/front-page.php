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
            We take a holistic view <br class="-no-tab">in embracing the systems carefully <br class="-no-tab">and tailor our solutions to the <br class="-no-tab">individual needs of each customer.          
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
							For many years, AKIM Corp. has been providing customers with production equipment developed by crystal devices that enable the manufacturing of a variety of electronics devices.
						</h2>
						<div class="section__detail__content">
							We provide customers with production equipment for producing electronics components such as camera module, crystal, and sensor devices.  Our total solution systems cover inception to completion, including support from planning and development through management, leveraging our engineering capability and expert oversight.
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
							Developing new products with<br>solid technology and equipment
						</h2>
						<div class="section__detail__content">
							By consummating cutting-edge equipment which will correspond to the next generation in the new factory completed on August of 2018, we deal with any global trend.
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/facility/">Company facilities</a></div>
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
							Clear Vision and Technology<br>which will bear the next generation
						</h2>
						<div class="section__detail__content">
							Introducing electronic components, crystal, and sensor-related product lines by utilizing core technologies such as high accuracy assembly, high speed transfer, image processing, vacuum, temperature control and measurement.
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/technology/">Technology</a></div>
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
					Products information
				</h2>
				<p class="productsBlock__description">
					Introducing equipment related to crystals, sensors, camera modules and others, that have been meeting the needs of industries and demands from customers accurately and reliably in the past.
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
					Careers Information
				</h2>
			</header>
			<section class="horizontalCard">
				<figure class="horizontalCard__img">
					<img src="<?php echo AKIM_IMG_URI; ?>top/recruit-mv.jpg" alt="">
				</figure>
				<div class="horizontalCard__fill">
					<h3 class="recruitBlock__copy horizontalCard__index">
						We seek diversity on our teams, dedicated to the next generation of AKIM.
					</h3>
					<div class="recruitBlock__description">
						Let's keep advancing technologies and fulfilling career achievements together. Free lunch for employees.  Fully equipped with the gym and tennis court.

					</div>
					<div class="button"><a href="<?php echo AKIM_URI; ?>/recruit">Career</a></div>
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
        AKIM's news
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
