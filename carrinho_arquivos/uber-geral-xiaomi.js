sendNewsFooter = function() {
    $('#x-newsFooter').on('submit', function(event) {
        event.preventDefault(); 
        $.post('/quickRegistry/create', 
            $("#x-newsFooter").serialize(),
            function(data) {
                if(data.indexOf("sucesso") != -1) {
                    $('.x-newsletter .x-cadastro').hide();
                    $('.x-newsletter .x-sucesso').show();
                }else{
                    $('.x-newsletter .x-form .x-msg-error').html(data).show();
                }
            }
        );
    });
    $('.x-newsletter .x-cadastro .x-email').keypress(function(){
        $('.x-newsletter .x-cadastro .x-msg-error').hide();
    });
};

search = function(){
	$('.x-seach input').click(function() {
		$(this).toggleClass('x-active');
	});
};

userLogged = function() {
    var user = Base64.decode($.cookie('miUser'));
    if (user != '') {
        $('.x-general').addClass('x-logado');
    };
};


userNameHeader = function() {
    var name = Base64.decode($.cookie('miUser'));
    if (name != '') {
        $('.x-header .x-name').html(name);
    };
};

menuActions = function() {
    $('.x-open-menu').click(function(){

        $('.x-menu').animate({
            width: 'hide'
        },200 );

        $('.x-menu').animate({
            width: 'hide'
        },200 );

        if ($('.x-menu').is(':visible')) {
            
            $('.x-menu').animate({
                width: 'hide'
            },200 );

        }
        
        else { 
                $('.x-menu').animate({
                    width: 'toggle',
                    speed: 'slow',
                    easing: 'linear'
                },200 );
        };
        
    });

    $('.x-close').click(function() {
        $('.x-menu').animate({
            width: 'toggle',
            speed: 'slow',
            easing: 'linear'
        },200 );
    });

    $('.x-menu-itens h3').click(function(){

        $('.x-menu-itens h3').removeClass('x-active');
        $('.x-menu-itens .x-dropdown').slideUp();

        $(this).addClass('x-active');

        $(this).next('.x-dropdown').slideUp();

        if ($(this).next('.x-dropdown').is(':visible')) {
                $(this).next('.x-dropdown').slideUp();
                $('.x-menu-itens h3').removeClass('x-active');
        }

        else { 
                $(this).next('.x-dropdown').slideDown();
        };
        
    });
};

backToTop = function() {
    $('.x-back-top').click(function(){
      $('html, body').animate({scrollTop: $('body').offset().top}, 1000);
   });
};

miniCartCreate = function() {

    if ($('body').hasClass('x-evento') == false) {
            var cartdata = $.parseJSON(Base64.decode($.cookie('miProductCart')));

            if ($(cartdata).length >= 1) {
            //if ($(cartdata.itemCount).length >= 1) {
            	$('.x-cart > ul li .x-quantity').html(cartdata.itemCount).show();
                $('.x-header.x-mobile .x-main-cart .x-quantity').html(cartdata.itemCount).show();
                $('.x-cart .x-top-cart .x-quantity').html(cartdata.itemCount); 
                $('.x-cart .x-total .x-right').html(cartdata.total);

                $('.x-cart .x-products-cart').load('/cart/show .k-cart-bx .k-cart-top .k-table');

                if ($(cartdata.itemCount).length == 0 ) { 
                	$('.x-header.x-mobile .x-main-cart .x-quantity').hide();
                    $('.x-cart > ul li .x-quantity').hide();
                    $('.x-cart .x-top-cart .x-quantity').html("Seu carrinho está vazio!");
                    //$('.x-cart .x-total .x-money').html("R$ 0,00");
                    $('.x-cart .x-products-cart, .x-cart .x-total, .x-cart .x-options').hide();
                    $('.x-cart .x-dropdown').addClass('x-empty');
                };      
                
            }

            else { 
                $('.x-cart .x-top-cart .x-quantity').html("Seu carrinho está vazio!");
                //$('.x-cart .x-total .x-money').html("R$ 0,00");
                $('.x-cart .x-products-cart, .x-cart .x-total, .x-cart .x-options').hide();
                $('.x-cart .x-dropdown').addClass('x-empty');
            }; 



            $('.x-cart .x-continue').click(function() {
                $('.x-dropdown').addClass('x-hidden');
            });

            $('.x-cart').hover(function() {
                $('.x-dropdown').removeClass('x-hidden');
            });
    };

         
};

miniCartQuantidade = function() {
    $('.x-cart .x-products-cart ul li ul').each(function(){ 

        var itemID = $(this).find('.k-cart-prd-amount input[name="itemId"]').val();

        $(this).find('.mais').click(function(){
            $(this).parents('li').find('.k-ipt-Qtd').val(parseInt($(this).parents('li').find('.k-ipt-Qtd').val())+1); 
            $(this).parents('li').find('.k-ipt-Qtd').change();

            var quantityMais =  $(this).parents('li').find('.k-cart-prd-amount input[name="quantity"]').val();

            $.ajax({
                type: "POST",
                url: "/cart/updateQuantity?itemId="+ itemID +"&quantity="+ quantityMais +"",
                success: function () {
                    miniCartCreate();
                }
            });

        });
        $(this).find(".menos").click(function(){
           if($(this).parents('li').find('.k-ipt-Qtd').val()!=0){$(this).parents('li').find('.k-ipt-Qtd').val(parseInt($(this).parents('li').find('.k-ipt-Qtd').val())-1);} 
           $(this).parents('li').find('.k-ipt-Qtd').change();

           var quantityMenos =  $(this).parents('li').find('.k-cart-prd-amount input[name="quantity"]').val();

            $.ajax({
                type: "POST",
                url: "/cart/updateQuantity?itemId="+ itemID +"&quantity="+ quantityMenos +"",
                success: function () {
                    miniCartCreate();
                }
            });

        });
    });
};

miniCartDeleteItem = function() {
    $('.x-cart .x-products-cart ul li ul').each(function(){ 
        $(this).find('.k-btRemove').click(function() {
            var url =  $(this).attr("href");
            $.ajax({
                type: "POST",
                url: url,
                success: function () {
                    miniCartCreate();
                }
            });
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

sendNews = function() {
    $('.x-submit').on('click', function(event) {
        event.preventDefault(); 
        $.post('/quickRegistry/create', 
            $("#updateQuickRegistryForm").serialize(),
            function(data) {
                console.log(data);
                $('#updateQuickRegistryReturnMessage').html(data);
                $('#updateQuickRegistryReturnMessage').show();
                if(data.indexOf("sucesso") != -1) {
                    $("#updateQuickRegistryForm").hide();
                }
            }
        );
    });
};

specsFones = function() {
    $('.x-specs').click(function(event) {
        $('#specs').addClass('x-active');
    });

    $('#specs').click(function(event) {
        $('#specs').removeClass('x-active');
    });
};

yVerifyTabletViewport = function() {
    if ($('body').width() > 760) {
		if ($('body').width() > 1280) {
        	
        } else {
			$('meta[name=viewport]').attr('content', 'width=1280px, user-scalable=no');
		};

    };
};

$(document).ready(function(){
	search();
	menuActions();
    backToTop();
    miniCartCreate();
    menuFloat();
    sendNews();
    userLogged();
    specsFones();
    userNameHeader();
    sendNewsFooter();
});

$(document).ajaxStop(function(){
    miniCartQuantidade();
    miniCartDeleteItem();
    userNameHeader();
});

$(window).load(function() {
	yVerifyTabletViewport();
});