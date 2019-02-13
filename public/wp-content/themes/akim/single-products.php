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
    while( have_posts() ){
        the_post();
    $thisPostTermObj = get_the_terms( $post->ID, 'products_category');
    $thisPostTermName = $thisPostTermObj[0] -> name;	
    // var_dump( $thisPostTermObj );

	$subpagetitle = $thisPostTermName;
    $termSearchArg = array(
        'post_type' => 'product_category',
        'posts_per_page' => -1,
        'orderby' => 'ID',
        'hide_empty' => false
    );
    $terms = get_terms( 'products_category', $termSearchArg );
    $allCustomFields = get_post_custom( $post->ID );

    // var_dump( $allCustomFields );     
    $productImgs = array();
    foreach( $allCustomFields['Figure'] as $figure ){
        array_push($productImgs,  wp_get_attachment_url( $figure ) );
    }
    $productLicenseNum = array_filter( explode( ',', $allCustomFields['License'][0]) );
    $productControlNum = array_filter( explode( ',', $allCustomFields['Control'][0]) );
    $productNum = $allCustomFields['ProductNum'][0] ? $allCustomFields['ProductNum'][0] : '---' ;
    $productDescription = $allCustomFields['Description'][0];
    $productBenefit = array_filter( explode( "\n", $allCustomFields['Benefit'][0]) );
    // $productBenefit = array_filter( explode( ',', $allCustomFields['Benefit'][0]) );
    if( !empty($allCustomFields['Spec']) ){
        $productSpecs = array();
        foreach( $allCustomFields['Spec'] as $spec ){
                array_push( $productSpecs, explode( ',', $spec, 2 ));
        }    
        $productSpecs =  array_filter( $productSpecs );
    }
    $productText = wp_get_attachment_url( $allCustomFields['Text'][0] );
?>    
<!-- ***** mv -->
<?php include('_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
    <section class="subpageIntro">
        <h2 class="subpageIntro__index">
            <?php the_title(); ?>
        </h2>
    </section>    
   <!-- ***** 製品一覧 -->
    <section class="section section--detail">
        <div class="wrap">
            <section class="detail">
                <!-- *** 左 -->
                <section class="detail__main">
                    <section class="detail__imgs">
                        <?php 
                            if( !empty( $productImgs ) ){
                                foreach( $productImgs as $img ){
                        ?>
                        <div class="detail__imgs__item">
                            <img src="<?php echo $img; ?>" alt="">
                        </div> 
                        <?php
                                }
                            } else {
                        ?>
                        <div class="detail__img__item">
                            <style>
                                .emptyImg{
                                    width: 100%;
                                    height: 200px;
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
                    </section>
                    <?php 
                        if( !empty( $productControlNum ) || !empty( $productLicenseNum )){
                    ?>
                    <div class="detail__numArea">
                    <?php 
                        if( !empty( $productControlNum ) ){
                    ?>
                    <dl class="detail__num detail__num--control">
                        <dt class="detail__num__index">
                            <?php echo __('管理番号','akim_tr'); ?>
                        </dt>
                        <dd class="detail__num__content">
                            <ul class="num">
                                <?php 
                                    foreach( $productControlNum as $num ){
                                ?>
                                <li><?php echo $num; ?></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </dd>
                    </dl>
                    <?php 
                        }
                    ?>                    
                    <?php 
                        if( !empty( $productLicenseNum ) ){
                    ?>
                    <dl class="detail__num detail__num--license">
                        <dd class="detail__num__content">
                            <ul class="num">
                                <?php 
                                    foreach( $productLicenseNum as $num ){
                                ?>
                                <li><?php echo __('特許第', 'akim_tr'); ?><?php echo $num; ?><?php echo __('号', 'akim_tr'); ?></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </dd>
                    </dl>
                    <?php 
                        }
                    ?>
                    </div>
                    <?php 
                        }
                    ?>
                    <!-- ** 商品詳細 -->
                    <section class="detail__content">
                        <header class="detail__index">
                            <p><?php echo __('商品型番：','akim_tr'); ?></p>
                            <h3 class="detail__index__text">
                                <?php echo $productNum; ?>
                            </h3>
                        </header>
                        <section class="detail__description mainColumnSection">
                            <h4 class="mainColumnSection__index">
                                <?php echo __('概要','akim_tr'); ?> 
                            </h4>
                            <div class="mainColumnSecion">
                                <?php echo $productDescription; ?>
                            </div>
                        </section>
                        <?php
                            if( !empty($productBenefit) ){
                        ?>
                        <section class="detail__benefit mainColumnSection">
                            <h4 class="mainColumnSection__index">
                                <?php echo __('特徴','akim_tr'); ?>
                            </h4>
                            <div class="mainColumnSecion mainColumnSection__content">
                                <ul class="bullet">
                                <?php 
                                  foreach( $productBenefit as $benefit ){
                                ?>
                                <li><?php echo $benefit; ?></li>
                                <?php
                                   }
                                ?>
                                </ul>
                            </div>
                        </section>
                        <?php
                            }
                        ?>
                        <?php
                            if( !empty($productSpecs) ){

                        ?>
                        <section class="detail__spec mainColumnSection">
                            <h4 class="mainColumnSection__index">
                                <?php echo __('仕様','akim_tr'); ?>
                            </h4>
                            <div class="mainColumnSecion">
                                <table class="detailTable">
                                    <?php
                                        foreach ($productSpecs as $spec ) {
                                          if( ! empty($spec[0]) || ! empty($spec[1]) ){
                                    ?>
                                    <tr class="detailTable__tr">
                                        <th class="detailTable__th"><?php echo $spec[0]; ?></th>
                                        <td class="detailTable__td"><?php echo $spec[1]; ?></td>
                                    </tr>
                                    <?php
                                          }
                                        }
                                    ?>
                                </table>
                            </div>
                        </section>
                        <?php
                            }
                        ?>
                    </section>
                </section>
                <!-- /// -->
                <!-- *** right -->
                <aside class="detail__sub">
                    <section class="subColumnSection">
                        <ul class="textsdownload">
                            <?php
                                if( $productText ){
                            ?>
                            <li class="textsdownload__item">
                                <div class="button button--download"><a href="<?php echo $productText; ?>" target="_blank">資料ダウンロード</a></div>
                            </li>
                            <?php
                                }
                            ?>
                            <li class="textsdownload__item">
                                <div class="button button--secondary"><a href="/contact/"><?php echo __('お問い合わせフォームへ','akim_tr'); ?></a></div>
                            </li>
                        </ul>
                    </section>
                    <section class="subColumnSection">
                        <h5 class="subColumnSection__index">
                            <?php echo $thisPostTermName; ?><?php echo __('一覧','akim_tr'); ?>
                        </h5>
                        <div class="subColumnSection__content">
                            <?php
                                // if ( $thisPostTermObj[0]->count ){
                            ?>                            
                            <ul class="categoryNav">
                            <?php
                                $arga = array(
                                    'post_type' => 'products',
                                    'posts_per_page' => -1,
                                    'orderby' => 'menu_order',
                                    'order' => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        'tax_query' => array(
                                            'taxonomy' => $thisPostTermObj[0]->taxonomy,
                                            'field' => 'slug',
                                            'terms' => $thisPostTermObj[0]->slug,
                                        )
                                    )
                                );
                                $wpq = new WP_Query( $arga );
                                if( $wpq -> have_posts() ){
                                    while( $wpq -> have_posts() ){
                                        $wpq -> the_post();
                            ?>
                                <li class="categoryNav__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                                    }
                                    wp_reset_postdata();
                                }   
                            ?>
                            </ul>
                            <?php
                                // }
                            ?>
                        </div>
                    </section>
                </aside>
                <!-- /// --> 
            </section>
        </div>
    </section>
    <!-- /////  -->
    <!-- ***** リンク-->
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
    <!-- *****　カテゴリ一覧 -->
    <section class="section section--productsinfooter">
        <div class="wrap">
            <?php get_template_part( '_inc/template-parts/post/productlist'); ?>
        </div>
    </section>
</main>       
<?php
    }
?>
<?php get_footer();?>
