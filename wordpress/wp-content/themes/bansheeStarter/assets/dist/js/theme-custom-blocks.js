  if(window.innerWidth <= 821){
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        spaceBetween: 20, 
        slidesPerView: 1, 
        loop: true,
    
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },
      });
    }