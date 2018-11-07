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
	$subpagetitle = 'お知らせ';		
?>
<!-- ***** mv -->
<?php include('_inc/template-parts/header/subpage-mv.php'); ?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
    <section class="section section--single">
        <?php
        while( have_posts() ){
            the_post();
        ?>
        <article class="newstopic section__child postArea">
            <header class="postArea__index newstopic__index wrap">
                <h2 class="postArea__index__text newstopic__index__text">
                    <?php the_title(); ?>
                </h2>
                <div class="postArea__index__date newstopic__index__date">
                    <time><?php the_time( 'Y.m.d' ); ?></time>
                </div>
            </header>
            <div class="newstopic__content postArea__content wrap">
                <?php the_content(); ?>
            </div>
        </article>
        <?php } ?>
        <aside class="section__child otherNews wrap">
            <header class="section__index">
                <h3 class="section__index__text">その他のニュース</h3>
            </header>
            <?php
                $arg = array(
                    'post_type' => 'news',
                    'posts_per_page' > 5,
                    'orderby' => 'post_date',
                    'order' => 'desc'
                );
                $wpq = new WP_Query( $arg );
                if( $wpq->have_posts() ){                
            ?>
                <ul class="news">
                <?php
                    while( $wpq->have_posts() ){
                        $wpq->the_post();
                ?>
                <li class="news__item">
                    <article>
                        <header class="news__item__index">
                            <h2 class="news__item__index__text">
                                <?php the_title(); ?>
                            </h2>
                            <div class="news__item__index__date">
                                <time><?php the_time( 'Y.m.d' ); ?></time>
                            </div>
                        </header>
                        <div class="news__item__description">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="button"><a href="<?php the_permalink(); ?>">お知らせを読む</a></div>
                    </article>
                </li>			
                <?php
                    }
                    wp_reset_postdata();
                ?>
                </ul>
                <?php 		
                    }
                ?>
            </div>
        </aside>
    </section>
</main>       
<?php get_footer();?>
