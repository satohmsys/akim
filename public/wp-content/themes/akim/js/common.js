var $w = $(window),
  $ww = $w.width(),
  $wh = $w.height(),
  $url = location.href,
  $langmenu = $('.language'),
  $breakpoint_mobile = 768,
  $scrollVal,
  $scrollBottom;

$w.on('load resize', function (e) {
  e.stopPropagation();

  $ww = $(window).width();
});

/**
 * global nav toggle
 */
if ($ww <= $breakpoint_mobile) {
  navHandling($('.navtoggle--open'));
  navHandling($('.navtoggle--close'));
}


/**
 * langage nav menu toggle.
 */

if ($ww <= $breakpoint_mobile) {
  $langmenu.on('click', function (e) {
    e.stopPropagation();
    if (!$(this).hasClass('langMenuOpen')) {
      langMenuToggle($langmenu, 'open');
    } else {
      langMenuToggle($langmenu, 'close');
    }
  });
} else {
  $langmenu.hover(
    function (e) {
      e.stopPropagation();
      langMenuToggle($langmenu, 'open');
    },
    function (e) {
      e.stopPropagation();
      langMenuToggle($langmenu, 'close');
    }
  );
}


/**
 * スクロール連動
 */
$w.on('scroll load', function () {
  $scrollVal = $w.scrollTop();
  $scrollBottom = $scrollVal + $w.height();

  var $jsEffect = $('.js-effect');

  /**
   * all fadein targets
   */
  if ($jsEffect) {
    $.each($jsEffect, function () {
      let $target = $(this);

      if ($target.offset().top < $scrollBottom - 90) {
        $target.addClass('-on');
      }
    });
  }
});

/**
 * ナビの開閉ハンドリング
 * @param { jquery obj } $fire 
 */
function navHandling($fire) {
  $fire.on('click', function (e) {
    e.stopPropagation();
    // console.log($(this))

    var $b = $('body');
    // console.log($b.hasClass('-is-navOpen'));
    $b.hasClass('-is-navOpen') ?
      $b.removeClass('-is-navOpen') :
      $b.addClass('-is-navOpen');
    // $b.toggleClass('-is-navOpen');
  });
}

/**
 * 言語選択ナビの開閉ハンドリング
 * @param { jquery obj } $target 
 * @param { str } $do 
 */
function langMenuToggle($target, $do) {
  $do == 'open' ? $target.addClass('langMenuOpen') : $target.removeClass('langMenuOpen');
}