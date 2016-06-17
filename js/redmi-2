animateAncor = function() {
    $('.mi1scroll-pagination li').each(function() {
        $(this).find('a').click(function(){
              var alvo = $(this).attr('href').split('#').pop();
              $('html, body').animate({scrollTop: $('#'+alvo).offset().top }, 1000);
              return false;
       });
    });
};

menuFloat = function() {
    $(window).scroll(function(){
        var altura = "95";
        if($(this).scrollTop() > altura){
            $('.nav-bar-hidden').addClass('x-active');
        }
        else {
            $('.nav-bar-hidden').removeClass('x-active');
        };
    });
};

fotografiasSlider = function () {
    $(".xmSlide-control").bxSlider({
        responsive: true,
        minSlides: 1,
        maxSlides: 1,
        pager: false,
        controls: true,
        preloadImages: "visible",
        touchEnabled: true,
        autoStart: true,
        auto: true,
        slideWidth: 700,
        moveSlides: 1,
        slideMargin: 0,
        mode: "fade"
    });
};

animateAncorActive = function() {
    var altura = $('body').scrollTop();
    console.log(altura);

    if (altura > 6489) {
        $('.mi1scroll-pagination').hide();
    } 

    else {
        $('.mi1scroll-pagination').show();
    };

    if (altura > 864 && altura < 1630) {
        $('.64-bi').addClass('active');
    }

    else {
        $('.64-bi').removeClass('active');
    };

    if (altura > 1631 && altura < 2293) {
        $('.4d-dual').addClass('active');
    }

    else {
        $('.4d-dual').removeClass('active');
    };

    if (altura > 2292 && altura < 3060) {
        $('.display').addClass('active');
    }

    else {
        $('.display').removeClass('active');
    };

    if (altura > 3060 && altura < 3829) {
        $('.camera').addClass('active');
    }

    else {
        $('.camera').removeClass('active');
    };

    if (altura > 3828 && altura < 4354) {
        $('.photos').addClass('active');
    }

    else {
        $('.photos').removeClass('active');
    };

    if (altura > 4356 && altura < 5299) {
        $('.thinner').addClass('active');
    }

    else {
        $('.thinner').removeClass('active');
    };

    if (altura > 5300 && altura < 6057) {
        $('.miui').addClass('active');
    }

    else {
        $('.miui').removeClass('active');
    };

    if (altura > 6058 && altura < 6900) {
        $('.microphones').addClass('active');
    }

    else {
        $('.microphones').removeClass('active');
    };


    if (altura > 1560) {
        $('.section-4g').addClass('section-done');
        counter4g();
    };
};


actions4g = function() {
    $('.section-4g').removeClass('section-done');
};

counter4g = function() {
    $('.speed .J_jumpNum.x-active').each(function () {
        $('.J_jumpNum').removeClass('x-active');
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
};

actionProcessador = function() {
    $('.frame-01 .x-click').click(function(event) {
        $('.section-performance .frame-01').removeClass('x-active');
        $('.section-performance .frame-01').addClass('x-disabled');

        $('.section-performance .frame-02').removeClass('x-disabled');
        $('.section-performance .frame-02').addClass('x-active');
    });

    $('.frame-02 .x-click').click(function(event) {
        $('.section-performance .frame-02').removeClass('x-active');
        $('.section-performance .frame-02').addClass('x-disabled');

        $('.section-performance .frame-01').removeClass('x-disabled');
        $('.section-performance .frame-01').addClass('x-active');
    });   
};


carouselCentroDeSeguranca = function() {

    if ($('body').width() > 760 ) {

        $(".container-miui .safe-img").bxSlider({
            responsive: true,
            minSlides: 3,
            maxSlides: 3,
            pager: false,
            controls: true,
            preloadImages: "visible",
            touchEnabled: true,
            autoStart: false,
            auto: false,
            moveSlides: 1,
            slideMargin: 0,
            slideWidth: 356
        });

    }

    else {
        $(".container-miui .safe-img").bxSlider({
            responsive: true,
            minSlides: 1,
            maxSlides: 1,
            pager: true,
            controls: true,
            preloadImages: "visible",
            touchEnabled: true,
            autoStart: false,
            auto: false,
            moveSlides: 1,
            slideMargin: 0,
            slideWidth: 356
        });
    }

    
};

fixResponsiveLayout = function() {
    var yboxs = $('body').width()/2;
    var ybgs = $('body').width()/2-900;
    $('.section-intro .content').css('left', yboxs);
    $('#section1').css('background-position-x',ybgs);

    $(window).resize(function() {
        var yboxs = $('body').width()/2;
        var ybgs = $('body').width()/2-900;
        $('.section-intro .content').css('left', yboxs);
        $('#section1').css('background-position-x',ybgs);
    });  
};

$(document).ready(function(){
    animateAncor();
    menuFloat();
    fotografiasSlider();
    actions4g();
    carouselCentroDeSeguranca();
    actionProcessador();
    fixResponsiveLayout();
});

$(document).ajaxStop(function(){
});

$(window).scroll(function () {
    animateAncorActive();
});