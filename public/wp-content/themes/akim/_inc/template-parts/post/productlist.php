<ul class="productList">
<?php
    /**
     * 高速生産ライン( 'highspeedline' )はページ出力のためのカテゴリのため除外。
     */
    $arg = array(
        'post_type' => 'products',
        'orderby'       => 'description',         
        'posts_per_page' => -1,
        'hide_empty' => false,
    );

    $terms = get_terms( 'products_category', $arg );
    // var_dump( $terms );
    forEach( $terms as $term ){   
        $slug = $term ->slug ;
        $name = $term ->name ;
        $count = $term ->count ;
        $link = get_term_link( $slug, 'products_category' );
        $cssClass = $count ? 'button' : 'button button--disabled';
        if( $slug !== 'highspeedline' ){
?>
    <li class="productList__item">
        <figure><img src="<?php echo AKIM_IMG_URI; ?>products/productimg-<?php echo $slug ?>.png" alt=""></figure>
        <header class="productList__item__index">
            <p class="productList__item__name">
                <?php echo $name ?>
            </p>
            <?php /*<p class="productList__item__lot"><span><?php echo $count; ?></span>商品</p>*/ ?>
        </header>
        <div class="<?php echo $cssClass; ?>"><a href="<?php echo $link; ?>">詳細</a></div>
    </li>
    <?php
        }
    }
    ?>
</ul>
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