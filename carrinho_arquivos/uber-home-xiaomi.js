carouselBanners = function() {
    $(".x-banner").bxSlider({
        responsive: true,
        minSlides: 1,
        maxSlides: 1,
        pager: true,
        controls: true,
        preloadImages: "visible",
        touchEnabled: true,
        autoStart: true,
        auto: true,
        slideWidth: 2000,
        //moveSlides: 1,
        slideMargin: 0,
        mode: "fade",
		pause: 60000
        //pause: 7000
    });
};

carouselProdutos = function() {
	$(".x-produtos-home ul").bxSlider({
        responsive: true,
        minSlides: 4,
        maxSlides: 4,
        pager: false,
        controls: true,
        preloadImages: "visible",
        touchEnabled: true,
        autoStart: false,
        auto: false,
        slideWidth: 300,
        moveSlides: 1,
        slideMargin: 0
    });
};


$(document).ready(function(){
	carouselBanners();
	carouselProdutos();
});
    