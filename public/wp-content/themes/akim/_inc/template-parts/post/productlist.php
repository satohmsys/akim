<ul class="productList">
<?php
    $arg = array(
        'post_type' => 'products',
        'posts_per_page' => -1,
        'orderby' => 'ID',
        'hide_empty' => false
    );
    // $wpq = new WP_Query( $arg );

    // if( $wpq -> have_posts() ){
    //     while( $wpq -> have_posts() ){
    //         $wpq -> the_post();

    //         var_dump( $post );

    $terms = get_terms( 'products_category', $arg );
    // var_dump( $terms );
    forEach( $terms as $term ){   
        $slug = $term ->slug ;
        $name = $term ->name ;
        $count = $term ->count ;
        $link = get_term_link( $slug, 'products_category' );
        $cssClass = $count ? 'button' : 'button button--disabled';
?>
    <li class="productList__item">
        <figure><img src="<?php echo AKIM_IMG_URI; ?>products/productimg-<?php echo $slug ?>.png" alt=""></figure>
        <header class="productList__item__index">
            <p class="productList__item__name">
                <?php echo $name ?>
            </p>
            <p class="productList__item__lot"><span><?php echo $count; ?></span>商品</p>
        </header>
        <div class="<?php echo $cssClass; ?>"><a href="<?php echo $link; ?>">詳細</a></div>
    </li>
    <?php
    }
    //     }
    // }
    ?>
</ul>