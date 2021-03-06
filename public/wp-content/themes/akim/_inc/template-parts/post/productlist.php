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