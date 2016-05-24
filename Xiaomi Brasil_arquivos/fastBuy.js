var lastClicked;

var firstRequest = true;

function addToCart(skuId){
  firstRequest = false;

  $.ajax({
     url: properties.addToCart+"?skuId="+skuId,
     type: "POST",
     contentType: 'text/javascript',
     dataType: 'json',
     async: true,
     context: document.body,
     error: function (request, status, error) {
        $(".preloader-"+skuId).parent().addClass('alert alert-error');
      $(".preloader-"+skuId).parent().html("Não foi possível adicionar ao carrinho!");

      setTimeout(function() {
          $("#"+skuId).popover('destroy');
        }, 2000);
    }
  }).done(function(result){
    refreshCart();

    $(".preloader-"+skuId).parent().addClass(result.success ? 'alert alert-success' : 'alert alert-error')
    $(".preloader-"+skuId).parent().html(result.success ? "Produto adicionado com sucesso." : result.message);
    


    setTimeout(function() {
        $("#"+skuId).popover('destroy');
        $("#popover-"+skuId).hide();

      }, 2000);
  });
}

function comprar(element){

  var waitTime = 0; 
  
  var skuId = $(element).attr("id");

  if(!verifyProductInCart(skuId)){

    $("#popover-"+skuId).find(".popover-content p").append("<img class='preloader preloader-"+skuId+"' src='"+properties.urlToPreloader+"'/>");

    $("#popover-"+skuId).find(".popover-content p").addClass("k-product-popover");

    $("#"+skuId).popover({
           trigger: 'manual',
           content: $('#popover-'+skuId).html(),
           placement: 'top',
           html: true
      });

    $("#"+skuId).popover('toggle');
    $("#popover-"+skuId).show();
    $('.popover-title').remove();
    
      if(firstRequest == true){
            addToCart(skuId);
      }else{
        if(!firstRequest && !$.cookie(properties.storeSymbol + 'ProductCart')){
            setTimeout(function() {
              addToCart(skuId);
            }, 3000);
        }else if($.cookie(properties.storeSymbol + 'ProductCart') && !firstRequest){
             addToCart(skuId);
        };
      }
    }else{
      
      $("#"+skuId).popover('destroy');
    
    $("#popover-"+skuId).find(".popover-content p").removeClass("alert").removeClass("alert-success").removeClass("alert-error");

      $("#popover-"+skuId).find(".popover-content p").html("Produto já foi adicionado.");

      $("#"+skuId).popover({
           trigger: 'manual',
           html: true,
           placement: 'top',
           content: $('#popover-'+skuId).html()
        });

      $("#"+skuId).popover('toggle');
      $("#popover-"+skuId).show();
      $('.popover-title').remove();

         setTimeout(function() {
          $("#"+skuId).popover('destroy');
          $("#popover-"+skuId).hide();
      }, 2000); 
    }
}

function skuChooseForm(element){
  lastClicked = element;
}