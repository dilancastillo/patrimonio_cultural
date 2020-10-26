$(document).ready(function () {
    
    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    // Hacer click en el evento de menú
    $toggleCollapse.click(function () {
        $nav.toggleClass('collapse');
    })

    //owl-carousel para Impacto
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 4000,
        dots: false,
        nav: true,
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')]
    });

    //Haga clic para desplazarse hacia arriba
    $('.move-up span').click(function () {
        $('html, body').animate({
            scrollTop:0
        }, 1000);
    })

});


