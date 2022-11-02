// $4rowSlider = false;
// function fourRowSlider() {
//   if ($(window).width() < 991) {
//     if (!$4rowSlider) {
//       if (jQuery(".four-row-mobile-slider").length > 0) {
//         $(".four-row-mobile-slider")
//           .not(".slick-initialized")
//           .slick({
//             dots: false,
//             infinite: true,
//             speed: 900,
//             slidesToShow: 4,
//             slidesToScroll: 1,
//             arrows: false,
//             responsive: [
//               {
//                 breakpoint: 992,
//                 settings: {
//                   slidesToShow: 2,
//                   slidesToScroll: 2,
//                   dots: true,
//                 },
//               },
//               {
//                 breakpoint: 480,
//                 settings: {
//                   slidesToShow: 1,
//                   slidesToScroll: 1,
//                   dots: true,
//                 },
//               },
//             ],
//           });
//         $4rowSlider = true;
//       }
//     } else if ($(window).width() > 992) {
//       if ($4rowSlider) {
//         $(".four-row-mobile-slider").not(".slick-initialized").slick("unslick");
//         $4rowSlider = false;
//       }
//     }
//   }
// }

// $(document).ready(function () {
//   fourRowSlider();
// });

// $(window).on("resize", function () {
//   fourRowSlider();
// });

// function mobileOnlySlider(){
//   if($('.mobile-slider').length > 0 ){
//     if($('.four-row-mobile-slider').length > 0 ){
//   $(".four-row-mobile-slider.mobile-slider").slick({
//     dots: false,
//     infinite: true,
//     speed: 900,
//     slidesToShow: 4,
//     slidesToScroll: 1,
//     arrows: false,
//     responsive: [
//       {
//         breakpoint: 992,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 2,
//           dots: true,
//         },
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           dots: true,
//         },
//       },
//     ],
//   })
// }
// if($('.three-row-mobile-slider').length > 0 ){
//   $(".three-row-mobile-slider.mobile-slider").slick({
//     dots: false,
//     infinite: true,
//     speed: 900,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     arrows: false,
//     responsive: [
//       {
//         breakpoint: 992,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 2,
//           dots: true,
//         },
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           dots: true,
//         },
//       },
//     ],
//   })
// }
// }
// }

// $(window).resize(function(e){
//   if(window.innerWidth < 992) {
//     if($('.mobile-slider').length > 0 ){
//       if(!$('.mobile-slider').hasClass('slick-initialized')){
//           mobileOnlySlider();
//       }
//     }

//   }else{
//       if($('.mobile-slider').length > 0 ){
//         if($('.mobile-slider').hasClass('slick-initialized')){
//           $('.mobile-slider').slick('unslick');
//         }
//       }
//   }
// });

jQuery(document).ready(function() {
    function threeRowSlider() {
        $(".three-row-mobile-slider.mobile-slider")
            .not(".slick-initialized")
            .slick({
                dots: true,
                adaptiveHeight: true,
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                mobileFirst: true,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: "unslick",
                    },
                ],
            });
    }
    threeRowSlider();

    function fourRowSlider() {
        $(".four-row-mobile-slider.mobile-slider")
            .not(".slick-initialized")
            .slick({
                dots: true,
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                mobileFirst: true,
                responsive: [{
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 1200,
                        settings: "unslick",
                    },
                ],
            });
    }
    threeRowSlider();
    fourRowSlider();
    $(window).on("resize", threeRowSlider);
    $(window).on("resize", fourRowSlider);
});
//Now it will not throw error