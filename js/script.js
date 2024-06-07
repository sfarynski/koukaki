( function() {

// MENU BURGER

const menuBurger = document.getElementById("menu_burger");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");

openBtn.addEventListener('click', function(){
    menuBurger.classList.add("active");
}
);
closeBtn.addEventListener('click', function(){
    menuBurger.classList.remove("active");
}
);

const ulMenu = document.querySelector(".burger");

document.querySelectorAll(".lien_burger").forEach(n => n.addEventListener("click", () => {
   menuBurger.classList.remove("active");
 }));


 const bigcloud = document.querySelector('.nuage-grand');
 const littlecloud = document.querySelector('.nuage-petit');
 const bannerLogo = document.getElementById("logo");

 window.addEventListener('scroll', moveClouds);
 
 //moveClouds();
 
 function moveClouds() {
    const triggerBottom = window.innerHeight / 5 * 4;
    const bigcloudTop = bigcloud.getBoundingClientRect().top;
    const littlecloudTop = littlecloud.getBoundingClientRect().top;

    if(bigcloudTop < triggerBottom) {
        bigcloud.classList.add('move');
    } else {
        bigcloud.classList.remove('move');
    }

    if(littlecloudTop < triggerBottom) {
        littlecloud.classList.add('move');
    } else {
        littlecloud.classList.remove('move');
    }
    const LogoBottom = bannerLogo.getBoundingClientRect().bottom;
    if(LogoBottom < triggerBottom) {
        bannerLogo.classList.remove('waving');
    }
 }

}() );

(function( $ ) {
    'use strict';

    /* ***** Création du swiper coverflow ***** */
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        centeredSlides: true,
        slidesPerView: 5,
        grabCursor: true,
        //mousewheel: true,
        coverflowEffect: {
            rotate: 60,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        }
    });


    /* ***** Gestion des évènements au scroll ***** */

    /*$(window).scroll(function() {

        // Variable calculant la position du visiteur sur la page
        var scrolledFromTop = $(window).scrollTop() + $(window).height();


        // ***** Effet parallaxe titre *****

       var imageBot = imageOrigine + $('.banner-img').height() - $(".site-header").height();
        var videoVisible = $(".banner").height() - $(window).scrollTop() + $(".site-header").height();
        if (imageBot >= videoVisible - 22) {
            $(".banner-img").css({
                'bottom': $(".banner").height() - $(window).scrollTop()
            });
        }
        else {
            $(".banner-img").css({
                'top': imageOrigine + $(window).scrollTop()
            });
        }

        // ***** Apparition des sections et des titres au scroll ***** 
        $("section, footer").each(function() {
            var distanceFromTop = $(this).offset().top;
            if (scrolledFromTop >= distanceFromTop) {
                $(this).animate({
                   'top': '0',
                   'opacity':'1'
                }, transitionTime);
            }
        });
    });*/

})( jQuery );
