<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Akim corpolate
 */

get_header(); ?>
<!-- ***** mv -->
<?php 
	get_template_part('_inc/template-parts/header/subpage-mv');
?>
<!-- ///// -->
<?php
	get_template_part( '_inc/template-parts/navigation/breadcrumb');
?>
<main class="mainContent">
  <section class="section">
    <div class="wrap center">
        <p>
          ページが削除されたか、URLが変更されている可能性があります。
        </p>
        <p><a href="/">TOPページ</a>へ戻って再度サイトの表示にしたがって再度検索していただくか、<a href="/contact">お問い合わせ</a>ください。</p>
        <p>3秒後にTOPページに自動転送されます。</p>
            <script>
                setTimeout( function(){
                    location.href = '<?php echo AKIM_URI; ?>';
                }, 4000 );
            </script>
    </div>
  </section>
</main>       
<?php get_footer();?>
