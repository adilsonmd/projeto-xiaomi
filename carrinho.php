<?php
  session_start()
   //Cria a sessão do carrinho
    if(!isset($_SESSION['carrinho']))
    {
        $_SESSION['carrinho'] = array();
    }

    //Adicionar produto
    if(isset($_GET['acao']))
    {
        if($_GET['acao' == 'add'])
        {
          $id = intval($_GET['id']);
          
        }
    }
  ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
  <title>Xiaomi Brasil | Loja Oficial</title>

	<meta name="layout" content="kanlo">
			
  <link rel="stylesheet" type="text/css" href="css/carrinho.css">
  <link href="css/checkout_suba.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="google-site-verification" content="BSqjA05Vxl_fzEhu7AU6b32AAJwkTpmapEX-F2d5pjA">
	
 	<link href="carrinho_arquivos/css.htm" rel="stylesheet" type="text/css">
 	<link href="carrinho_arquivos/css1.htm" rel="stylesheet" type="text/css">
  
 	<link rel="stylesheet" type="text/css" href="carrinho_arquivos/uber-geral-xiaomi.css">
  <link rel="stylesheet" type="text/css" href="carrinho_arquivos/min.css">
  <link href="http://statick3.bseller.com.br/mi/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<script type="text/javascript">
		var properties = {
			storeSymbol: 'mi',
			addToCart: '/cart/add',
			urlToPreloader: 'http://statick3.bseller.com.br/catalog/images/ajax-loader.gif?version=14',
			linkToCart: '/cart/index'
		}

	</script>
  

	<script src="carrinho_arquivos/jquery-1.js" type="text/javascript"></script>
	<script src="carrinho_arquivos/jquery_002.js" type="text/javascript"></script>
	<script src="carrinho_arquivos/encodeBase64.js" type="text/javascript"></script>
	<script src="carrinho_arquivos/autopaging.js" type="text/javascript"></script>
	<script src="carrinho_arquivos/cart.js" type="text/javascript"></script>

	<script src="carrinho_arquivos/utils.js" type="text/javascript"></script>
	<script src="carrinho_arquivos/bootstrap.js" type="text/javascript"></script>
	<script src="carrinho_arquivos/fastBuy.js" type="text/javascript"></script>

    <!-- <link href='http://statick3.bseller.com.br/catalog/css/themes/default/bootstrap.css?version=14' type='text/css' rel='stylesheet' /> -->
	<link href="http://statick3.bseller.com.br/mi/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<script type="text/javascript" src="carrinho_arquivos/gpt.js"></script><script id="gpt-impl-0.15957025240641465" src="carrinho_arquivos/pubads_impl_88.js"></script><link href="http://tpc.googlesyndication.com/safeframe/1-0-2/html/container.html" rel="prefetch">
  <script id="gpt-impl-0.13714203385643864" src="carrinho_arquivos/pubads_impl_88_002.js"></script>
  <link rel="prefetch" href="http://tpc.googlesyndication.com/safeframe/1-0-2/html/container.html">

  <link href="carrinho_arquivos/jquery-ui-1.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="carrinho_arquivos/jquery-ui-1.js"></script>
 
    <style type="text/css">
    .fb_hidden{position:absolute;top:-10000px;z-index:10001}
    .fb_reposition{overflow:hidden;position:relative}
    .fb_invisible{display:none}
    .fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}
    .fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}
    .fb_animate{animation:fb_transform .3s forwards}
    .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}
    .fb_reset .fb_dialog_legacy{overflow:visible}
    .fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}
    .fb_dialog_content{background:#fff;color:#333}
    .fb_dialog_close_icon{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png") no-repeat scroll 0 0 transparent;_background-image:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif");cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}
    .fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}
    .fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}
    .fb_dialog_close_icon:hover{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png") no-repeat scroll 0 -15px transparent;_background-image:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif")}
    .fb_dialog_close_icon:active{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png") no-repeat scroll 0 -30px transparent;_background-image:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif")}
    .fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}
    .fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}
    .fb_dialog_top_left{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png") no-repeat 0 0;left:-10px;top:-10px}
    .fb_dialog_top_right{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png") no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png") no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png") no-repeat 0 -30px;right:-10px;bottom:-10px}
    .fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}
    .fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}
    .fb_dialog_vert_left{margin-left:-10px}
    .fb_dialog_vert_right{right:0;margin-right:-10px}
    .fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}
    .fb_dialog_horiz_top{margin-top:-10px}
    .fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}
    .fb_dialog_iframe{line-height:0}
    .fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}
    .fb_dialog_content .dialog_title>span{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif") no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif") white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}
    .fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}
    .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}
    .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}
    .loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}
    #fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}
    #fb-root #fb_dialog_ipad_overlay.hidden{display:none}
    .fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}
    .fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}
    
    .fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}
    .fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}
    .fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}
    .fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}
    
    .fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
    .fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}
    .fb_dialog_content .dialog_content{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif") no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}
    .fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}
    #fb_dialog_loader_close{float:left}
    .fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
    .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
    #fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png");background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}
    @keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
    .fb_iframe_widget{display:inline-block;position:relative}
    .fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}
    .fb_iframe_widget iframe{position:absolute}
    .fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}
    .fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}
    .fb_iframe_widget_lift{z-index:1}
    .fb_hide_iframes iframe{position:relative;left:-10000px}
    .fb_iframe_widget_loader{position:relative;display:inline-block}
    .fb_iframe_widget_fluid{display:inline}
    .fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}
    .fb_iframe_widget_loader .FB_Loader{background:url("https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif") no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
</style>

<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style></head>

<body>

  <div id="fb-root" class=" fb_reset fb_reset">
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
      <div>
        <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./carrinho_arquivos/xd_arbiter.html" style="border: none;">
        </iframe>

        <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./carrinho/xd_arbiter(1).html" style="border: none;">
        </iframe>
      </div>
    </div>

    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
      <div></div>
    </div>
  <div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

  <script>(function(d, s, id) {

    var js, fjs = d.getElementsByTagName(s)[0];

    if (d.getElementById(id)) return;

    js = d.createElement(s); js.id = id;

    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";

    fjs.parentNode.insertBefore(js, fjs);

  }(document, 'script', 'facebook-jssdk'));
  </script>
	<script src="./carrinho_arquivos/encodeBase64.js" type="text/javascript"></script>
  <script src="./carrinho_arquivos/jquery.cookie.js" type="text/javascript"></script>

  <script type="text/javascript">
    var dataLayer = dataLayer || [];
    var _data = {};

    var injectCustomer = function(obj){
        var userId64 = $.cookie('miUserId');
        if(!userId64) {
            obj.customerLoggedIn = false;
            return
        }
        obj.customerLoggedIn  = true;
        obj.customerId = Base64.decode(userId64);
    };
    var injectProduct, injectCart;
    injectProduct = injectCart = function(){};

    
        injectCustomer(_data);
        dataLayer = [_data];
</script>


	<!-- <link href='http://statick3.bseller.com.br/catalog/css/themes/kanlo/components.css?version=14' type='text/css' rel='stylesheet' /> -->

			<meta name="description" content="Loja e site oficial da empresa que revolucionou o mercado de smartphones. Conheça o Redmi 2, Mi Band, Mi Power Bank e outros produtos Xiaomi.">
			<link rel="stylesheet" type="text/css" href="./carrinho_arquivos/uber-home-xiaomi.css">
		
      <link href="./carrinho_arquivos/televendas.css" type="text/css" rel="stylesheet">
      <script src="./carrinho_arquivos/televendas.js" type="text/javascript"></script>
        
      <script type="text/javascript">
            $(function(){
                enableTelemarketing('https://securebr.mi.com/checkout/assistedSales', 'https://securebr.mi.com/checkout/assistedSales/logout/telemarketing')
            })
      </script>
	  
      <style>
          	/*Banner Estático Miui */
            .x-produtos-home {
                padding: 50px 28px 0px !important;
            }

            #banner-miui{
                width:100%;
            }
                      
            /*Fim Banner Estático Miui*/
      </style>
          
			<div class="x-general">

    <div class="x-header x-desktop">
      <div class="x-top">
        <div class="x-center">
          <div class="x-left">
            <ul>
              <li><a href="index.php">Mi Brasil</a></li>
              <li><a href="#" target="_Blank">Fórum MIUI</a></li>
              <li><a href="#" target="_Blank">Siga no Facebook</a></li>
              <li><a href="#" target="_Blank">Conheça nosso canal</a></li>
            </ul>
          </div>
          <div class="x-right">
            <div class="x-seach">
              <form class="form-search" action="#">
                <input type="text" name="q" value="" placeholder="O que você procura?">
                <button type="submit">Buscar</button>
              </form>
            </div>
            <div class="x-acount">

                              
              <!--Quando Deslogado -->
              <ul class="x-login">
                <li><a href="login.html"> Login / Criar Conta Mi</a> <a href="carrinho.html">| Meus Pedidos</a></li>
              </ul>
                          </div>
            <div class="x-cart">
              <ul>
                <li><a href="carrinho.html"><span class="x-icon"></span> <span class="x-quantity"></span> Meu Carrinho </a></li>
              </ul>
              <div class="x-dropdown x-empty">
                <div class="x-top-cart">
                  <div class="x-quantity">Seu carrinho está vazio!</div>
                  <!--<div class="x-account">
                                    <ul>
                                        <li><a href="/checkout">Minha conta</a></li>
                                        <li><a href="/checkout">Meus pedidos</a></li>
                                    </ul>
                               </div>-->
                </div>
                <div class="x-products-cart" style="display: none;"></div>
                <div class="x-total" style="display: none;">
                  <div class="x-left">Subtotal</div>
                  <div class="x-right"></div>
                </div>
                <div class="x-options" style="display: none;">
                  <ul>
                    <li class="x-continue">Continuar comprando</li>
                    <li class="x-finish"><a href="carrinho.html">Finalizar compra</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="x-navigation">
        <div class="x-center">
          <h1><a href="index.php">Xiaomi</a></h1>
          <div class="x-right">
            <div class="x-menu">

              <div class="x-item">
                <h2><a href="produtos/redmi-2.html">Redmi 2 | Redmi 2 Pro</a></h2>
              </div>

              <div class="x-item">
                <h2><a href="#">Mi Band</a></h2>
              </div>

              <div class="x-item">
                <h2><a href="#">Mi Power Bank</a></h2>
              </div>

              <div class="x-item">
                <h2><a href="#">Fones de Ouvido</a></h2>
              </div>

              <div class="x-item">
                <h2><a href="#">Loja</a></h2>
                <div class="x-dropdown">
                  <div class="x-category">
                    <ul>
                      <li><a href="#">Capa</a></li>
                      <li><a href="#">Carregador</a></li>
                      <li><a href="#">Película</a></li>
                      <li><a href="#">Pulseira</a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="x-header x-mobile">
      <div class="x-header-top">
        <div class="x-open-menu">Menu</div>

        <h1><a href="index.php">Xiaomi</a></h1>
        <div class="x-main-cart">
          <div class="x-quantity"></div>
          <div class="x-cart"><a href="carrinho.html"></a></div>
      </div>
      </div>
      <div class="x-menu">
        <div class="x-header-menu">
          <span class="x-account"><a href="https://securebr.mi.com/checkout/">Conta Mi</a></span>
          <span class="x-close">X</span>
        </div>
        <div class="x-menu-itens a">
          <div class="x-item">
            <h3><a href="http://br.mi.com/redmi2-pro">Redmi 2 Pro</a></h3>
          </div>
          <div class="x-item">
            <h3><a href="http://br.mi.com/redmi2">Redmi 2</a></h3>
          </div>
          <div class="x-item">
            <h3><a href="http://br.mi.com/product/acessorios/122791453/mi-fone-de-ouvido-silver">Fones de Ouvido</a></h3>
          </div>
          <div class="x-item">
            <h3><a href="http://br.mi.com/category/22054/acessorios">Loja</a></h3>
          </div>
          <div class="x-item">
            <h3><a href="http://br.mi.com/Mi-Power-Bank">Mi Power Bank</a></h3>
          </div>
          <div class="x-item">
            <h3><a href="http://br.mi.com/Mi-Band">Mi Band</a></h3>
          </div>

        </div>
      </div>
    </div>
    

      </div>
      <div class="x-copyright">
        <p><span>Copyright ©2015  Xiaomi. Todos os direitos reservados.<br><br>XIAOMI DO BRASIL TECNOLOGIA LTDA.  CNPJ: 20.221.812/0001-74 Endereço: Rua Pequetita, 215 - São Paulo/SP - CEP 04552-060<br>
          
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

    <div class="quadro"> 
        <div class="carrinho">Meu Carrinho de Compras</div>
        <div class="bt_produtos">Escolher + produtos</div>
            <div class="frete">
                <div class="caminhao"><img src="http://wrmotos.com.br/loja/wp-content/uploads/2015/06/icon-entrega-wr-150x150.png" width="30px" height="30px">
                </div>
                <div class="consulte">Consulte o prazo de entrega e o frete para seu CEP 
                <input type="text" name="cep" maxlength="9" OnKeyPress="formatar('#####-###', this)">

                <style type="text/css">
                    button{
                     background-color: #FFFFFF;
                     border: 0;
                    }

                    button:hover{
                        background-color: #e1e1e1;
                    }

                </style>
                <button type="submit" value="enviar">Ok</button>
                </div>
            </div>
        


    <div class="bkt01">

        <table class="bkt">
            <thead class="topBox01">
                <tr>
                    <th class="col01" scope="col" colspan="2">Produto(s) no Meu Carrinho</th>
                    <th class="col03" scope="col">Entrega</th>
                    <th class="col02" scope="col">Qtd.</th>
                    <th class="col04" scope="col">Valor Unitário</th>
                    <th class="col05" scope="col">Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- INICIO DA LINHA DE PRODUTO -->
                <tr class="empty">
                    <td colspan="6" id="basketEmptyMessage">Seu carrinho está vazio
                        <a href="http://projetoxiaomi.azurewebsites.net/" class="btn btContBuy">
                            Continuar Comprando
                        </a>
                    </td>

                </tr>
                <!-- FIM DA LINHA DE PRODUTO -->
            </tbody>
        </table>
    </div>

             </div>
</div>
<style type="text/css">
    p{
        text-align: center;
        font-size: 10px;
        margin-top: 10px;
    }
</style>
<p>XIAOMI DO BRASIL TECNOLOGIA LTDA. CNPJ: 20.221.812/0001-74 Endereço: Rua Pequetita, 215 - São Paulo/SP - CEP 04552-060</p>
</body></html>