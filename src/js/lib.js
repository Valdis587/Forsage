import Swiper from 'swiper/bundle';
 import {Autoplay, EffectFade, Navigation} from 'swiper/modules';
 Swiper.use({ Autoplay, EffectFade, Navigation});

 const homeslider = new Swiper('.homeslider__slider', {
  loop: true,
  autoplay: true,
  speed: 2000,
  autoplayDisableOnInteraction:true,
  pagination: false,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
   },
     // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
 });

 const service = new Swiper('.home-serv__content', {
  speed: 400,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 25,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //
  breakpoints: {
     320: {
        slidesPerView: 1,
     },
     480: {
        slidesPerView: 1,
     },
     590: {
        slidesPerView: 2,
     },
     1100: {
        slidesPerView: 3,
     },
     1300: {
      slidesPerView: 4,
   },
  }
});

const job = new Swiper('.jobhome__content', {
  speed: 400,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 25,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //

  breakpoints: {
     320: {
        slidesPerView: 1,
     },
     480: {
        slidesPerView: 1,
     },
     590: {
        slidesPerView: 2,
     },
     1100: {
        slidesPerView: 3,
     },
     1300: {
      slidesPerView: 4,
   },
  }
});

const reviews = new Swiper('.homereviews__content', {
  speed: 400,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 10,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //
  breakpoints: {
     320: {
        slidesPerView: 1,
     },
     480: {
        slidesPerView: 1,
     },
     790: {
        slidesPerView: 2,
     },
  }
});


 const news = new Swiper('.news__content', {
  speed: 400,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 25,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //
  breakpoints: {
     320: {
        slidesPerView: 1,
     },
     480: {
        slidesPerView: 1,
     },
     590: {
        slidesPerView: 2,
     },
     1100: {
        slidesPerView: 3,
     },
     1300: {
      slidesPerView: 4,
   },
  }
});

const logo = new Swiper('.logo__slider', {
  speed: 500,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 20,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //
  grabCursor: true,
  breakpoints: {
    320: {
         slidesPerView: 2,
     },
     480: {
        slidesPerView: 2,
     },
     590: {
        slidesPerView: 4,
     },
     1100: {
        slidesPerView: 4,
     },
    
     1300: {
      slidesPerView: 6,
   },
  }
});

var bluefeatured = new Swiper(".bluefeatured__swiper-small", {
  spaceBetween: 10,
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  autoHeight: true,
  initialSlide: 0,
  autoplay: true,
  loop: true,
  watchSlidesProgress: true,
 

});
var bluefeatured2 = new Swiper(".bluefeatured__swiper-big", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: bluefeatured,
  },
});

var proekty = new Swiper(".proektySingle__sleder-small", {
  spaceBetween: 10,
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  autoHeight: true,
  initialSlide: 0,
  autoplay: true,
  loop: true,
  watchSlidesProgress: true,

});
var proekty2 = new Swiper(".proektySingle__sleder-big", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: proekty,
  },
});

const vakansi = new Swiper('.sidebar__vakansi-slider', {
  loop: true,
  autoplay: true,
  speed: 2000,
  autoplayDisableOnInteraction:true,
  pagination: false,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
   },
     // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
 });



const accordionItemHeaders = document.querySelectorAll(".faq__title");

accordionItemHeaders.forEach(accordionItemHeader => {
   accordionItemHeader.addEventListener("click", event => {
    
     // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    const currentlyActiveAccordionItemHeader = document.querySelector(".faq__item .active");
     if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
       currentlyActiveAccordionItemHeader.classList.toggle("active");
        currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      }

     accordionItemHeader.classList.toggle("active");
     const accordionItemBody = accordionItemHeader.nextElementSibling;
     if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
     }
     else {
       accordionItemBody.style.maxHeight = 0;
     }
    
   });
});

 






