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
          High speed compact sized crystal production line
        </h2>
        <p class="section--lineup__index__description">
          High speed production line by AKIM achieved cycle time of 0.6sec.<br class="-no-sp">To observe details, tap each machine
        </p>
      </header>
      <div class="lineupArea">
        <div class="lineup">
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-8-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Blank mask inserter
                            </div><div class="fancybox-caption__description">W1100☓D1200☓H1700<br>Inserts crystal blanks into the mask Accommodates package transfer in order.</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-8.png" width="200" alt="">
                <figcaption class="lineup__item__name">Blank mask inserter</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-1-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Blank Mounter
                            </div><div class="fancybox-caption__description">"W1700☓D1400☓H1700 <br>Mounts crystal blank onto ceramic packages."</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-1.png" width="200" alt="">
                <figcaption class="lineup__item__name">Blank Mounter</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-2-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Clean curing oven
                            </div><div class="fancybox-caption__description">W2800☓D1400☓H1700 <br>Heats and hardens bond under the condition of<br>N2 Cures bond in a clean atmosphere (Class 100)</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-2.png" width="200" alt="">
                <figcaption class="lineup__item__name">Clean curing oven</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-3-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Freq. control loader / unloader
                            </div><div class="fancybox-caption__description">W2300☓D1300☓H1700<br>Transfers packages onto the trays on the transfer carriers<br>Transfers carriers onto frequency control machine</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-3.png" width="200" alt="">
                <figcaption class="lineup__item__name">Freq. control loader / unloader</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-4-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Lid tacking machine
                            </div><div class="fancybox-caption__description">W1200☓D1000☓H1700<br>Performs lids tacking on the packages</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-4.png" width="200" alt="">
                <figcaption class="lineup__item__name">Lid tacking machine</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-5-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Vacuum annealing machine
                            </div><div class="fancybox-caption__description">W1100☓D1300☓H1700<br>Performs vacuum annealing on the packages prior to sealing process</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-5.png" width="200" alt="">
                <figcaption class="lineup__item__name">Vacuum annealing machine</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-6-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Dual axis vacuum seam welding machine
                            </div><div class="fancybox-caption__description">W1700☓D1200☓H1700<br>Performs vacuum seam welding on the both sides of the packages under vacuum condition.</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-6.png" width="200" alt="">
                <figcaption class="lineup__item__name">Dual axis vacuum seam welding machine</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-7-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Pick up machine
                            </div><div class="fancybox-caption__description">W800☓D900☓H1700<br>Extracts products from transfer jig and sorts good quality products or defective products</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-7.png" width="200" alt="">
                <figcaption class="lineup__item__name">Pick up machine</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-9-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Temperature characteristics inspection machine
                            </div><div class="fancybox-caption__description">W1000☓D1000☓H1700<br>Inspects temperature characteristics and performs laser marking, and emboss taping for crystals</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-9.png" width="200" alt="">
                <figcaption class="lineup__item__name">Temperature characteristics inspection machine</figcaption>
              </figure>
            </a>
          </div>
          <div class="lineup__item">
            <a data-fancybox href="<?php echo AKIM_LOCALIMG_URI; ?>products/line-slider-10-modal.png"
              data-caption='<div class="fancybox-caption__index">
                                Inspection / marking / taping machine
                            </div><div class="fancybox-caption__description">W1200☓D1000☓H1700<br>Inspects temperature characteristics and performs laser marking, and emboss taping for crystals</div>'>
              <figure class="lineup__item__img">
                <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-10.png" width="200" alt="">
                <figcaption class="lineup__item__name">Inspection / marking / taping machine</figcaption>
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