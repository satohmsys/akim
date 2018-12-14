<?php
/**
 * 製品カテゴリ「高速生産ライン専用」テンプレート
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
                        小型水晶振動子<br class="-only-sp">高速生産ライン
                    </h2>
                    <p class="section--lineup__index__description">
                        タクト0.6secを達成したAKIMの高速生産ラインです。<br class="-no-sp">各機器をタップすると詳細をご覧いただけます。
                    </p>
                </header>
                <div class="lineupArea">
                    <div class="lineup">
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-8-modal.png" data-caption='<div class="fancybox-caption__index">
                                ブランマスク詰め装置
                            </div><div class="fancybox-caption__description">W1100☓D1200☓H1700<br>水晶素板をマスクに挿入します。<br>パッケージ品の整列移載にも対応。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-8.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">ブランマスク詰め装置</figcaption>
                                </figure>
                            </a>
                        </div>                
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-1-modal.png" data-caption='<div class="fancybox-caption__index">
                                ブランクマウンタ
                            </div><div class="fancybox-caption__description">W1700☓D1400☓H1700<br>セラミックパッケージに水晶素板を接着搭載します。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-1.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">ブランクマウンタ</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-2-modal.png" data-caption='<div class="fancybox-caption__index">
                                クリーン硬化炉
                            </div><div class="fancybox-caption__description">W2800☓D1400☓H1700<br>窒素雰囲気中で接着剤を加熱・硬化します。<br>炉内クリーン度はクラス100以です。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-2.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">クリーン硬化炉</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-3-modal.png" data-caption='<div class="fancybox-caption__index">
                                F調ローダ/アンローダ
                            </div><div class="fancybox-caption__description">W2300☓D1300☓H1700<br>搬送キャリア上のトレーにパッケージを移載します。<br>キャリアをF調機へ搬送します。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-3.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">F調ローダ/アンローダ</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-4-modal.png" data-caption='<div class="fancybox-caption__index">
                                リッド仮付け装置
                            </div><div class="fancybox-caption__description">W1200☓D1000☓H1700<br>パッケージにリッドを仮溶接します。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-4.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">リッド仮付け装置</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-5-modal.png" data-caption='<div class="fancybox-caption__index">
                                真空アニール装置
                            </div><div class="fancybox-caption__description">W1100☓D1300☓H1700<br>封止前パッケージを真空中でアニールに処理します。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-5.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">真空アニール装置</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-6-modal.png" data-caption='<div class="fancybox-caption__index">
                                直交真空シーム溶接装置
                            </div><div class="fancybox-caption__description">W1700☓D1200☓H1700<br>真空中でパッケージの両辺をシーム溶接します。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-6.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">直交真空シーム溶接装置</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-7-modal.png" data-caption='<div class="fancybox-caption__index">
                                抜き取り装置
                            </div><div class="fancybox-caption__description">W800☓D900☓H1700<br>搬送治具から製品を取出し良品・不良品に分類します。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-7.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">抜き取り装置</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-9-modal.png" data-caption='<div class="fancybox-caption__index">
                                温度特性検査装置
                            </div><div class="fancybox-caption__description">W1000☓D1000☓H1700<br>水晶振動機の電気特性検査、レーザー印紙及び<br>エンボステーピングを行います。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-9.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">温度特性検査装置</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="lineup__item">
                            <a data-fancybox href="<?php echo AKIM_IMG_URI; ?>products/line-slider-10-modal.png" data-caption='<div class="fancybox-caption__index">
                                常温検査・マーキング・テーピング装置
                            </div><div class="fancybox-caption__description">W1200☓D1000☓H1700<br>水晶振動子の電気特性検査、レーザー印字及びエンボステーピングを行います。</div>'>
                                <figure class="lineup__item__img">
                                    <img src="<?php echo AKIM_IMG_URI; ?>products/line-slider-10.png" width="200" alt="">
                                    <figcaption class="lineup__item__name">常温検査・マーキング・テーピング装置</figcaption>
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
