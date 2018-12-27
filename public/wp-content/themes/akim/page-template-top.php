<?php
/*
 * Template Name:トップページ（仮
 */
get_header(); ?>
<?php
  global $wp_post_types;
  $supports = &$wp_post_types['post']->supports;

//   var_dump($wp_post_types['post'] );
?>
	<!-- ***** mv -->
	<section class="mv">
		<div class="wrap">
			<section class="mv__copy">
				<p class="mv__copy__en">
					<img src="<?php echo AKIM_IMG_URI; ?>top/mv-copy.svg" srcset="<?php echo AKIM_IMG_URI; ?>top/_sp/mv-copy.svg 480w, <?php echo AKIM_IMG_URI; ?>top/mv-copy.svg" width="838" alt="DEVELOPING TECHNOLOGY INTO THE FUTURE">
				</p>
				<h1 class="mv__copy__ja">
					<span class="-no-tab">わたしたちは、<br></span>
					トータルな視野でシステムを捉え、<br>
					お客様の個別のニーズに対応します。
				</h1>
			</section>
		</div>
		<div class="mv__movie">
			<div class="mv__movieArea">
        <div id="player"></div>
      </div>
		</div>
		<div class="mv__img">
			<img src="<?php echo AKIM_IMG_URI; ?>top/mv.jpg" srcset="<?php echo AKIM_IMG_URI; ?>top/_sp/mv.jpg 768w, <?php echo AKIM_IMG_URI; ?>top/mv.jpg" width="1050" alt="">
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
							水晶デバイス生産設備開発で培った高度な技術で、様々な電子デバイスの生産設備を提供します
						</h2>
						<div class="section__detail__content">
							カメラモジュール・水晶デバイス・センサデバイスなど電子部品の生産設備を複合的な技術と視点で、計画から開発・運用サポートまでのソリューション型製品として提供しています。
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/profile/">会社概要</a></div>
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
							確かな技術、確かな設備で<br>新製品を開発
						</h2>
						<div class="section__detail__content">
							2018年8月に竣工した新工場はこれからの時代に備えた最新設備を完備することでさまざまな案件に対応しています。
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>/company/facility/">会社施設</a></div>
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
							次世代を担う明確な<br>
							ビジョンとテクノロジー
						</h2>
						<div class="section__detail__content">
							高精度組立技術・高速搬送技術・画像処理技術・真空技術・温度制御技術・計測技術をコア技術として電子部品関連装置を開発しています。
						</div>
						<div class="button"><a href="<?php echo AKIM_URI; ?>//technology.html">テクノロジー</a></div>
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
					製品情報
				</h2>
				<p class="productsBlock__description">
					社会のニーズとお客さまのご要望を的確に具現化してきた、水晶関連装置・センサ関連装置・カメラモジュール関連装置・その他の装置をご紹介します。
				</p>
			</header>
			<!-- *** products -->
			<div class="productsSection">				
				<?php get_template_part( '_inc/template-parts/post/productlist'); ?>
				<aside class="otherProducts">
					<h3 class="otherProducts__index">
						その他の装置
					</h3>
					<ul class="otherProducts__list">
						<li>
							ハードディスク関連
						</li>
						<li>
							コイル関連
						</li>
						<li>
							セラミックPKG関連
						</li>
						<li>
							小型ブレーカ関連
						</li>
						<li>
							スイッチ関連
						</li>
						<li>
							EDLC関連
						</li>
						<li>
							プローブ関連
						</li>
						<li>
							コンデンサ関連
						</li>
						<li>
							光学関連
						</li>
						<li>
							コネクタ関連
						</li>
						<li>
							SAWデバイス関連
						</li>
						<li>
							LED関連
						</li>
					</ul>
				</aside>
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
					採用情報
				</h2>
			</header>
			<section class="horizontalCard">
				<figure class="horizontalCard__img">
					<img src="<?php echo AKIM_IMG_URI; ?>top/recruit-mv.jpg" alt="">
				</figure>
				<div class="horizontalCard__fill">
					<h3 class="recruitBlock__copy horizontalCard__index">
						AKIMの未来を担う人材を<br>
						広く募集しています。
					</h3>
					<div class="recruitBlock__description">
						私たちと一緒に高度な技術とキャリアを蓄積して行きましょう。社員は昼食が無料、ジムとテニスコートを完備しています。
					</div>
					<div class="button"><a href="<?php echo AKIM_URI; ?>/recruit">採用情報</a></div>
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
					お知らせ
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
    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '315',
          width: '560',
          videoId: 'UtaAjpEHO7c',
          playerVars: {
            'autoplay' : 1 ,
            'playlist': 'UtaAjpEHO7c',
            'list': 'PLUbU4xPGhzUcsg1hDfVFGDZzIGuhQAU6G',
            'listType': 'playlist',
            'rel' :0,
            'controls' : 0,
            'showinfo': 0,
            'loop' : 1,
            'modestbranding' : 1,
            'playsinline' : 0
          },
          events: {
            'onReady': onPlayerReady
            // 'onStateChange': onPlayerStateChange
          }
        });
      }


      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
        player.mute();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      // var done = false;
      // function onPlayerStateChange(event) {
      //   if (event.data == YT.PlayerState.PLAYING && !done) {
      //     setTimeout(stopVideo, 6000);
      //     done = true;
      //   }
      // }
      function stopVideo() {
        player.stopVideo();
      }
    </script>    
<?php get_footer();?>
