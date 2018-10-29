$( function(){

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