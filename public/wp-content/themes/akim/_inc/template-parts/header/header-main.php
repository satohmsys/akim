<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<header class="siteHeader">
	<div class="wrap">
		<p class="siteHeader__logo">
            <?php if( is_home() ){ ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php } ?>
			<img src="<?php echo AKIM_IMG_URI; ?>common/logo.svg" width="100" alt="<?php echo AKIM_TEXT_NAME; ?>">
            <?php if( is_home() ){ ?></a><?php } ?>
		</p>		
		<nav class="siteHeader__nav">
			<div class="siteHeader__mainNav">
				<div class="navtoggle navtoggle--close">
					<i></i>
					<span class="navtoggle__label">CLOSE</span>
				</div>
				<nav>
					<ul>
						<li ><a href="/page-archive-company.html">会社案内</a></li>
						<li >
								<a href="/products.html">製品情報</a>
						</li>
						<li ><a href="/page-recruit.html">採用情報</a></li>
						<li ><a href="/news.html">お知らせ</a></li>
						<li ><a href="/page-contact.html">お問い合わせ</a></li>
					</ul>
					<div class="language"><a href=""><span class="language__label">Global</span><span>EN</span></a></div>
				</nav>
			</div>
			<div class="navtoggle navtoggle--open">
				<span class="navtoggle__label">MENU</span>
				<i></i>
			</div>
		</nav>
        <?php if ( has_nav_menu( 'social' ) ) : ?>
<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
	<?php
		wp_nav_menu( array(
			'theme_location' => 'social',
			'menu_class'     => 'social-links-menu',
			'depth'          => 1,
			'link_before'    => '<span class="screen-reader-text">',
			'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
		) );
	?>
</nav>
<?php endif;?>
	</div>
</header>