$( function(){
    var $detailImgs = $( '.mv__img' );

    if( $detailImgs.is(':visible') ){
      $detailImgs.slick({
          speed: 1000,
            autoplay: true,
            autoplaySpeed: 1000,
          fade: true,
          infinite: true,
          arrows: false,
          controls: false,
          dots: false,
      });
    }
});

