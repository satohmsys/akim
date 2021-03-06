$( function(){

    var $detailImgs = $( '.detail__imgs' ),
        $lineup = $( '.lineup' );


    $detailImgs.slick({
        speed: 380,
        infinite: true
    });

    $lineup.slick({
        speed: 380,
        slidesToShow: 4,
        dots: true,
        arrow: true,
        infinite: false,
        responsive: [
        {
            breakpoint: 480,
            settings: {
                centerMode: false,
                centerPadding: '30px',
                slidesToShow: 2
            }
        }]
    });

    $('.lineup__item [data-fancybox]').fancybox({
        baseClass: 'product-fancybox'
    })
});

