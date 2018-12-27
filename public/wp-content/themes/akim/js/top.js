$( function(){
    var $detailImgs = $( '.mv__img' );

    if( $detailImgs.is(':visible') ){
      $detailImgs.slick({
          speed: 3000,
          autoplay: true,
          autoplayspeed: 1500,
          fade: true,
          infinite: true,
          arrows: false,
          controls: false,
          dots: false,
      });
    }
});

