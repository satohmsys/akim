 var $w = $( window ),
        $ww = $w.width(),
        $wh = $w.height(),
        $breakpoint_mobile = 768,
        $scrollVal,
        $scrollBottom;


    $w.on( 'load resize', function( e ){
        e.stopPropagation();

        $ww = $( window ).width();
    });

    /**
     * global nav toggle
     */
    if ($ww <= $breakpoint_mobile ){
        navHandling($('.navtoggle--open') ); 
        navHandling($('.navtoggle--close') ); 
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
        $b.hasClass('-is-navOpen') ? $b.removeClass('-is-navOpen') : $b.addClass('-is-navOpen');
        // $b.toggleClass('-is-navOpen');
    });
}

