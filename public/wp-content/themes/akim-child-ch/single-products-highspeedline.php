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
<?php include('_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
          <!-- ***** 製品一覧 -->
        <section class="section section--lineup">
            <div class="wrap">
                <header class="section--lineup__index">
                    <h2 class="section--lineup__index__text">
                      소형수정진동작고속생산라인
                    </h2>
                    <p class="section--lineup__index__description">
                    택트 타임0.6sec을 달성한 AKIM의 고속생산라인입니다.<br class="-no-sp">
각 장비를 클릭하면 상세내용을 보실수 있습니다.
                    </p>
                </header>
                <div class="lineupArea">
                    <div class="lineup">
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-8-modal.png" data-caption='<div class="fancybox-caption__index">
                                마스크인서트장비
                            </div><div class="fancybox-caption__description">W1100☓D1200☓H1700<br>수정 블랭크를 마스크에 삽입합니다.<br>패키지의 정열이재에도 대응가능</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-8.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">마스크인서트장비</figcaption>
                                </figure>
                            </a>
                        </div>                
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-1-modal.png" data-caption='<div class="fancybox-caption__index">
                                블랭크마운터
                            </div><div class="fancybox-caption__description">"W1700☓D1400☓H1700 <br>세라믹패키지에 수정블랭크를 접착탑재합니다."</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-1.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">블랭크마운터</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-2-modal.png" data-caption='<div class="fancybox-caption__index">
                                크린경화로
                            </div><div class="fancybox-caption__description">W2800☓D1400☓H1700 <br>질소분위기내에서 접착제를 가열・경화합니다. <br>로내 크린도는 클래스100이하입니다.</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-2.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">크린경화로</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-3-modal.png" data-caption='<div class="fancybox-caption__index">
                                F조 로더/언로더
                            </div><div class="fancybox-caption__description">W2300☓D1300☓H1700<br>반송캐리어상의 트레이에 패키지를 이재합니다.<br>캐리어를 F조기에 반송합니다.                            </div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-3.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">F조 로더/언로더</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-4-modal.png" data-caption='<div class="fancybox-caption__index">
                                리드가용접장비
                            </div><div class="fancybox-caption__description">"W1200☓D1000☓H1700<br>패키지에 리드를 가용접합니다."</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-4.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">리드가용접장비</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-5-modal.png" data-caption='<div class="fancybox-caption__index">
                                진공어닐장비
                            </div><div class="fancybox-caption__description">"W1100☓D1300☓H1700<br>실링전 패키지를 진공내에서 어닐처리를 실시합니다."</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-5.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">진공어닐장비</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-6-modal.png" data-caption='<div class="fancybox-caption__index">
                                직교진공심용접장비
                            </div><div class="fancybox-caption__description">"W1700☓D1200☓H1700<br>진공내에서 패키지의 심용접을 실시합니다."</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-6.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">직교진공심용접장비</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-7-modal.png" data-caption='<div class="fancybox-caption__index">
                                선별장비
                            </div><div class="fancybox-caption__description">"W800☓D900☓H1700<br>
반송치구에서 제품을 취출하여 양품・불량품으로 분류합니다."</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-7.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">선별장비</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-9-modal.png" data-caption='<div class="fancybox-caption__index">
                                온도특성검사장비
                            </div><div class="fancybox-caption__description">"W1000☓D1000☓H1700<br>수정진동자의 전기특성검사, 레이저마킹 및<br>엠보스테이핑을 실시합니다."</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-9.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">온도특성검사장비</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-10-modal.png" data-caption='<div class="fancybox-caption__index">
                                상온검사・마킹・테이핑장비
                            </div><div class="fancybox-caption__description">"W1200☓D1000☓H1700<br>수정진동자의 전기특성검사, 레이저마킹 및 엠보스테이핑을 실시합니다."</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-10.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">상온검사・마킹・테이핑장비</figcaption>
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
