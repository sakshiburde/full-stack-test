$(document).ready(function(){

    $('.content-slider').slick({
        arrows:true,
        fade:true
    });

    $('.image-slider').slick({
        arrows:false,
        fade:true,
        swipe:false
    });

    $('.tab-item').click(function(){

        let slide = $(this).data('slide');

        $('.content-slider')
        .slick('slickGoTo', slide);

    });

    $('.content-slider').on(
        'afterChange',
        function(event,slick,currentSlide){

            $('.image-slider')
            .slick('slickGoTo', currentSlide);

            $('.tab-item').removeClass('active');

            $('.tab-item')
            .eq(currentSlide)
            .addClass('active');
        }
    );

});