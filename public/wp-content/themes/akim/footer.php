<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Akim corpolate
 */
?>
<footer class="siteFooter">
	<section class="siteFooter__top">
		<div class="wrap">
			<p>
				<?php echo __('資料請求・お見積り・製品に関するご質問など<br>お気軽にお問い合わせください。', 'akim_tr'); ?>
			</p>
			<p>
				<span><?php echo __('〒355-0045 埼玉県東松山市宮鼻860-12', 'akim_tr'); ?></span><span>TEL.<a href="tel:0493-35-1140">0493-35-1140</a></span><span>FAX.0493-35-1141</span>
			</p>
			<div class="button"><a href="<?php echo AKIM_URI; ?>/contact/"><?php echo __('お問い合わせ', 'akim_tr'); ?></a></div>
		</div>
	</section>
	<section class="siteFooter__bottom">
    <ul class="siteFooter__links">
      <li>
        <a href="<?php echo AKIM_URI; ?>/privacypolicy/"><?php echo __('個人情報保護方針', 'akim_tr'); ?></a>
      </li>
    </ul>
		<div class="siteFooter__copyirght">
      © AKIM CORPORATION
    </div>
	</section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
