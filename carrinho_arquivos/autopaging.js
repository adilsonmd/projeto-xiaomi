$(function(){
	if($('#seeMore').size() > 0){
		var paging = new AutoPaging()
	}
})

function AutoPaging(){
	this.canFecthMorePages = true
	_this = this

	this.fetchNextPage = function(e){
		$.ajax({
			url: $('#seeMore').attr('href'),
			dataType:'html',
			success: _this.appendNewPage,
			beforeSend: function(){
				$('.moreProd').empty()
				$('.moreProd').css('text-align', 'center')
				$('.moreProd').css('display', 'block')
				$('.moreProd').append($('<div><span>Aguarde</span></div>'))
				$('.moreProd div').css('background', 'url(http://static.kanlo.com.br/catalog/images/ajax-loader.gif) no-repeat')
			}
		})
		e.preventDefault()
	}

	this.appendNewPage = function (data){
		var html = $(data)
		var products = html.find('.pdList li, .k-pList li')
		var pagingButton = html.find('.moreProd')

		$('.moreProd').remove()
		$('.pdList, .k-pList').append(products)
		$('.pagination').append(pagingButton)

		$('#seeMore').click(_this.fetchNextPage)
		_this.canFecthMorePages = true
		if (window.addthis) {
		    window.addthis.toolbox('.addthis_toolbox');
		}		
	}
	
	this.setupAutoScroll = function(){
		$('#seeMore').click(_this.fetchNextPage)

		$(window).scroll(function(){
			if($('#seeMore').size() > 0 && _this.canFecthMorePages){
				var pageOffset = $(window).scrollTop()
		        var documentHeight = $(document).height()
		        var windowHeight = $(window).height()
		        var scrollPercent = (pageOffset / (documentHeight - windowHeight)) * 100

				if(scrollPercent >= 60){
				   _this.canFecthMorePages = false
				   $('#seeMore').click()
				}
			}
		})
	}	

	_this.setupAutoScroll()
}