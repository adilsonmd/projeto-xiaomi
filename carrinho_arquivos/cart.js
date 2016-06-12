var Cart = function(store){
	
	this.items = _readCookie()
	
	this.getAmount = function(){
		var sum = 0.0
		$.each(this.items, function(index, item){
			sum += item.getTotalPrice()
		})
		return sum
	}
	
	this.getFormattedAmount = function(){
		return _formatPrice(this.getAmount())
	}
	
	this.getItemCount = function(){
		var sum = 0
		$.each(this.items, function(index, item){ sum += item.quantity })
		return sum
	}
	
	function _readCookie(){
         var cookieText = Base64.decode($.cookie(cartProperties.store + 'ProductCart'));
         if(cookieText){
         	cookieText = cookieText.replace(/\<[^>]*>/g,"");
         }
		 var items = []
		 if(cookieText){
			 $.each(cookieText.split('|'), function(index, value){ items.push(new Item(value.split('^')))  })
		 }
		 return items
	}
}

$(function(){

	$('.toggle_reccurence').change(function(){

		var form = $(this).parents('form:first');
		form.addClass('loading_recurrence');
		var url = form.attr("action") + '.json';
		var itemId = form.find('.recorrence_item_id').val()

		$.post(url, {'itemId':itemId}, function(){
			form.removeClass('loading_recurrence');
			form.toggleClass('is_not_recurrence').toggleClass('is_recurrence');
		}, 'json');

	});

});

var Item = function(params){
	
	this.quantity = parseInt(params[0])
	this.id = params[1]
	this.unitPrice = parseFloat(params[2])
	this.name = _replaceAll(params[3], '_', ' ')
	
	this.getFormattedPrice = function(){
		return _formatPrice(this.getTotalPrice())
	}
	
	this.getTotalPrice = function(){
		return this.unitPrice * this.quantity
	}
}

/*
 * Utilitários
 */
function _formatPrice(price){
	var formattedNumber = parseFloat(price).toFixed(2)
	return "R$ " + formattedNumber.replace('.', ',')
} 


function _replaceAll(string, token, newtoken) {
	if(string){
		while (string.indexOf(token) != -1) {
	 		string = string.replace(token, newtoken);
		}
	}
	return string;
}

function validateNumber(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
