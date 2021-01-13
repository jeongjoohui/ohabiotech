$(function(){

    //swiper start
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4, // 슬라이드를 한번에 3개를 보여준다
        spaceBetween: 30, // 슬라이드간 padding 값 30px 씩 떨어뜨려줌
        //centeredSlides: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1280: {
                slidesPerView: 4
            },
            720: {
                slidesPerView: 1
            },
        }
      });
//swiper end

});