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
        
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 50,
            slidesPerGroup: 1,
           },
          640: {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
            slidesPerGroup: 2,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            slidesPerGroup: 3,
          },
        },
        
      });

    $('#btn').click(function(){
      $('body').css('background-color','white')
    });


// 제이쿼리
    $('.gnb_1da').click(function(e){
        e.preventDefault(); // a 원래기능 없애
        $('body, html').animate({
            scrollTop : $($(this).attr('href')).offset().top
        }, 400)
    })

  //폼태그 js 해두기 
 
   
})



