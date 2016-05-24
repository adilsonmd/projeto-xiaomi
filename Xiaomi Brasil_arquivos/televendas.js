function enableTelemarketing(newShopUrl, logoutUrl) {
    var seller = getSellerData()
    if (seller) {
        var template = createTelemarketingTopBar(seller, newShopUrl, logoutUrl)
        $($('body').children()[0]).before(template)
    }
}

function getSellerData(){
    return $.parseJSON(Base64.decode($.cookie('seller_data')));
}

function createTelemarketingTopBar(seller, newShopUrl, logoutUrl) {
    var topElement = $('<div id="televendas">')
    var contentElement = $('<div class="teleBox">')
    var titleBox = $('<div class="title">')
    titleBox.append('<h1 class="name">' + seller.name + '</h1>')
    contentElement.append(titleBox)

    var userBox = $('<div class="user">')
    userBox.append('<span class="login">' + seller.username + '</span>')
    userBox.append('<a class="sair" href="'+ logoutUrl +'">Sair</a>')
    contentElement.append(userBox)

    var btnsBox = $('<ul class="bts">')
    btnsBox.append('<a class="btn primary" href="'+ newShopUrl +'">Iniciar nova compra</a>')
    btnsBox.append('<a class="btn" href="'+ getLinkWithouCache() +'">Ver página sem cache</a>')

    contentElement.append(titleBox)
    contentElement.append(btnsBox)

    return topElement.append(contentElement)
}

function getLinkWithouCache(){
    var url = document.URL
    if(url.indexOf("?") == -1){
        return url + "?skipCache=true"
    }else{
        return url + "&skipCache=true"
    }
}