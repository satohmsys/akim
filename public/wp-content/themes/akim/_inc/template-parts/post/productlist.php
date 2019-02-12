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
    <div class="<?php echo $cssClass; ?>"><a href="<?php echo $link; ?>"><?php echo __('詳細', 'akim_tr'); ?></a></div>
  </li>
  <?php
        }
    }
    ?>
</ul>
<aside class="otherProducts">
  <h3 class="otherProducts__index">
    <?php echo __('その他の装置', 'akim_tr'); ?>
  </h3>
  <ul class="otherProducts__list">
    <li>
      <?php echo __('ハードディスク関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('コイル関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('セラミックPKG関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('小型ブレーカ関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('スイッチ関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('EDLC関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('プローブ関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('コンデンサ関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('光学関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('コネクタ関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('SAWデバイス関連', 'akim_tr'); ?><br>
    </li>
    <li>
      <?php echo __('LED関連', 'akim_tr'); ?><br>
    </li>
  </ul>
</aside>