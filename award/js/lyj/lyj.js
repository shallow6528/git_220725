    // js
    $(document).ready(function(){

    const swiper = new Swiper('#ch .swiper', {
        // Optional parameters
      
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '#ch .swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '#ch .swiper-button-next',
          prevEl: '#ch .swiper-button-prev',
        },
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        
        breakpoints: {
  
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
        // And if we need scrollbar
        scrollbar: {
          el: '#ch .swiper-scrollbar',
        },
      });


// 제이쿼리
    $('.gnb_1da').click(function(e){
        e.preventDefault(); // a 원래기능 없애
        $('body, html').animate({
            scrollTop : $($(this).attr('href')).offset().top
        }, 400)
    })


})



