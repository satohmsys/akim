$( function(){

    var $detailImgs = $( '.detail__imgs' ),
        $lineup = $( '.lineup' );


    $detailImgs.slick({
        speed: 380,
        infinite: true
    });

    $lineup.slick({
        speed: 380,
        slidesToShow: 5,
        centerPadding: 40,
        centerMode: true,
        dots: true,
        arrow: true,
        infinite: true,
        responsive: [
        {
            breakpoint: 480,
            settings: {
                centerPadding: 30,
                slidesToShow: 3
            }
        }]

    });
});

