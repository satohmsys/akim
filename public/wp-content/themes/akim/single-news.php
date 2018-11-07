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
        <div class="wrap">
            <div class="column">
                <?php
                while( have_posts() ){
                    the_post();
                ?>
                <article class="column__main section__child newstopic postArea">
                    <header class="postArea__index newstopic__index">
                        <h2 class="postArea__index__text newstopic__index__text">
                            <?php the_title(); ?>
                        </h2>
                        <div class="postArea__index__date newstopic__index__date">
                            <time><?php the_time( 'Y.m.d' ); ?></time>
                        </div>
                    </header>
                    <div class="newstopic__content postArea__content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php } ?>
                <aside class="column__sub otherNews">
                    <h3 class="subColumnSection__index">
                        その他のニュース
                    </h3>
                    <?php
                        $arg = array(
                            'post_type' => 'news',
                            'posts_per_page' => 4,
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
            </div>
        </div>
    </section>
</main>       
<?php get_footer();?>
