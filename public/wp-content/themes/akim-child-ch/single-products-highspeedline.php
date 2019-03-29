<?php
/**
 * 製品カテゴリ「高速生産ライン専用」テンプレート (KR)
 *  「highspeedline」というスラッグで適用
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Akim corpolate
 */

get_header(); ?>
<?php
    while( have_posts() ){
        the_post();
?>
<!-- ***** mv -->
<?php include(dirname(__FILE__).'/../akim/_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	include( dirname(__FILE__).'/../akim/_inc/template-parts/navigation/breadcrumb.php');
?>
<main class="mainContent">
  <!-- ***** 製品一覧 -->
  <section class="section section--lineup">
    <div class="wrap">
      <header class="section--lineup__index">
        <h2 class="section--lineup__index__text">
          高速自動生產線
        </h2>
        <p class="section--lineup__index__description">
          AKIM的高速生產線，其生產節拍時間為0.6秒。<br class="-no-sp">
          點擊每個設備以查看詳細信息
        </p>
      </header>
      <div class="lineupArea">
        <div class="lineup">
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-8-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                晶片上片機
                            </div><div class="fancybox-caption__description">W1100☓D1200☓H1700<br>晶片白板挿入MASK。<br>PKG品的排整列移載也可対応。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-8.png" width="200" alt="">
                <figcaption class="lineup__item__name">晶片上片機</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-1-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                晶片點膠機
                            </div><div class="fancybox-caption__description">W1700☓D1400☓H1700<br>陶瓷基座搭載點膠晶片。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-1.png" width="200" alt="">
                <figcaption class="lineup__item__name">晶片點膠機</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-2-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                清洁硬化路
                            </div><div class="fancybox-caption__description">W2800☓D1400☓H1700<br>在氮氣中加熱和固化粘合劑。<br>炉子清洁度为100级或更高。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-2.png" width="200" alt="">
                <figcaption class="lineup__item__name">清洁硬化路</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-3-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                微調上載機/下載機
                            </div><div class="fancybox-caption__description">W2300☓D1300☓H1700<br>搬送Carrier上PKG移載到托盤上。<br>Carrier向微調機搬送。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-3.png" width="200" alt="">
                <figcaption class="lineup__item__name">微調上載機/下載機</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-4-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                LID預焊機
                            </div><div class="fancybox-caption__description">W1200☓D1000☓H1700<br>LID預焊到PKG上。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-4.png" width="200" alt="">
                <figcaption class="lineup__item__name">LID預焊機</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-5-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                真空退火設備
                            </div><div class="fancybox-caption__description">W1100☓D1300☓H1700<br>封焊止PKG在真空中進行退火処理。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-5.png" width="200" alt="">
                <figcaption class="lineup__item__name">真空退火設備</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-6-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                直交真空封焊设备
                            </div><div class="fancybox-caption__description">W1700☓D1200☓H1700<br>真空中PKG的両辺進行封焊。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-6.png" width="200" alt="">
                <figcaption class="lineup__item__name">直交真空封焊设备</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-7-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                選別設備
                            </div><div class="fancybox-caption__description">W800☓D900☓H1700<br>從搬送治具中對產品進行良品・不良品的分類取出。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-7.png" width="200" alt="">
                <figcaption class="lineup__item__name">選別設備</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-9-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                温度特性检查设备
                            </div><div class="fancybox-caption__description">W1000☓D1000☓H1700<br>對晶體進行電気特性検査、激光印字及編帯。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-9.png" width="200" alt="">
                <figcaption class="lineup__item__name">温度特性检查设备</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-10-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                常温検査・打標・編帯設備
                            </div><div class="fancybox-caption__description">W1200☓D1000☓H1700<br>對晶體進行電気特性検査、激光印字及編帯。</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-10.png" width="200" alt="">
                <figcaption class="lineup__item__name">常温検査・打標・編帯設備</figcaption>
              </figure>
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /////  -->
</main>
<?php
    }
?>
<?php get_footer();?>