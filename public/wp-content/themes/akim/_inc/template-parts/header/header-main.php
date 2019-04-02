<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Akim corp
 * @since 1.0
 * @version 1.0
 */

?>
<header class="siteHeader">
	<div class="wrap">
		<p class="siteHeader__logo">
            <?php if( ! is_home() ){ ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php } ?>
			<img src="<?php echo AKIM_IMG_URI; ?>common/logo.svg" width="100" alt="<?php echo AKIM_TEXT_NAME; ?>">
            <?php if( ! is_home() ){ ?></a><?php } ?>
		</p>		
		<nav class="siteHeader__nav">
			<div class="siteHeader__mainNav">
				<div class="navtoggle navtoggle--close">
					<i></i>
					<span class="navtoggle__label">CLOSE</span>
				</div>
				<?php if ( has_nav_menu( 'Header' ) ){ ?>
					<nav>
						<?php
							wp_nav_menu( array(
								'container' => 'ul',
								'items_wrap' => '<ul class="%2$s">%3$s</ul>',
								'menu' => null,
								'container_id' => null,
								'theme_location' => 'Header',
								'menu_class'     => 'siteHeader__mainNav__wpnavmenu',
								'depth'          => 1,
								'link_before'    => '',
								'link_after'     => '',
							) );
						?>
            <?php
            /**
             * 201903現在 日本URL：'', 英URL：'/en/', 韓URL, '/kr/', 中URL, '/ch/'
             * wordpressマルチサイトURL変更時にはリンク出力しているheader-main.phpに影響。
             */
            $langlist =  array(
              'ja' => '日本語',
              'en' => 'ENGLISH',
              'ch' => '中文',
              'kr' => '한국어'
              );
            $akimLang = akim_lang();
            $selectedLang = $akimLang['lang'];
            $selectedLang_display = 'JPN';
            
            if($selectedLang == 'kr'){
              $selectedLang_display = 'KOREAN';
            } elseif ($selectedLang == 'ch') {
              $selectedLang_display = 'CHINESE';
            } elseif ($selectedLang == 'en') {
              $selectedLang_display = 'ENGLISH';
            }
            ?>
						<div class="language">
              <div class="language__area">
                <div class="language__index">Global</div>
                <div class="language__selected">
                  <?php echo $selectedLang_display; ?>
                </div>
              </div>
              <div class="language__select">
                <ul id="lang">
                <?php
                  foreach ($langlist as $key => $value) {
                    $prefix = $key == 'ja' ? "" : '/' . $key;
                    $isCurrentLang = $selectedLang == $key ? true : false;
                    $currentPagePath = preg_replace("/\/(kr|en|ch)/", "", $akimLang['currenturl'], 1 );
                ?>                  
                <li <?php if( $isCurrentLang ){ echo 'class="selected"'; }?>>
                  <?php 
                    if(! $isCurrentLang ) echo '<a href="' . $akimLang['siteurl'] . $prefix . $currentPagePath . '">';
                    echo $value;
                    if(! $isCurrentLang ) echo '</a>';
                  ?>
                </li>
                <?php
                  }
                ?>
                </ul>
              </div>
            </div>
					</nav>
				<?php } ?>
			</div>
			<div class="navtoggle navtoggle--open">
				<span class="navtoggle__label">MENU</span>
				<i></i>
			</div>
		</nav>
	</div>
</header>