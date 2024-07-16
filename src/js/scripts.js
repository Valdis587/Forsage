import $ from "jquery";


$(document).ready(function () {
    $('.header__button').click(function() {
        $('.popup').addClass('popup-open');
    });

    $('.proektySingle__button').click(function() {
        $('.popup').addClass('popup-open');
    });

    $('.popup__close').click(function() {
       $('.popup').removeClass('popup-open');   
     });

     $('.header__burger').click(function() {
        $('.header__menu-nav').addClass('menu-nav-open');
    });

    $('.header__menu-close').click(function() {
        $('.header__menu-nav').removeClass('menu-nav-open');   
     });

     $('.menu-item-has-children').click(function() {
        $('.sub-menu').toggleClass('sub-menu-open');   
     });

     $('.sidebar__link-children').click(function() {
        $('.sidebar__sub-menu').toggleClass('sub-menu-open');   
     }); 
     
     $(".footer__button-up").addClass("footer__button-up-hide");
     $(window).scroll(function () {
     if ($(this).scrollTop() === 0) {
         $(".footer__button-up").addClass("footer__button-up-hide")
     } else {
         $(".footer__button-up").removeClass("footer__button-up-hide")
     }
 });
 
 $('.footer__button-up').on("click", function () {
     $('body,html').animate({scrollTop:0}, 1200);
     return false;
 });
      
 });
  
   




