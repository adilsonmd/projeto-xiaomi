<?php 
    @session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Xiaomi Brasil</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/mi-home.css" rel="stylesheet">
    <link href="css/xiaomi-components.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <!-- Glyphcons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Mi Brasil</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.php"><img src="images/Geral/logo-mi.png" width="80%"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="./produtos/redmi-2.php">Redmi 2 | Redmi 2 PRO</a>
                    </li>
                    <li>
                        <a href="./produtos/miband.php">Mi Band</a>
                    </li>

                    <li>
                        <a href="./produtos/powerbank.php">Mi PowerBank</a>
                    </li>
                    <li>
                        <a href="http://miuirom.com.br/sobre-o-miui/" target="_blank">MIUI</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="./carrinho.php">Carrinho</a>
                    </li>

                    <li>
                        <a href="./faq.php">Perguntas Frequentes</a>
                    </li>

                    <li>
                        <a href="./about.php">Sobre a Xiaomi</a>
                    </li>
                    <?php
                         if(isset($_SESSION["login"])) {
                            echo '<li>';
                              echo ('<a href="./php/deslogar.php">Olá, '.$_SESSION["login"]. ' (Sair)</a>');
                            echo '</li>';
                        }
                        else {
                            echo '<li><a href="./login.html">Conta Mi</a></li>';    
                        }
                    
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item bg bg1 active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="banner-product">Redmi 2 | Redmi 2 Pro</h1>
                        <p class="banner-text">Eleitos os melhores custo-benefício da categoria</p>
                        <p><a class="btn btn-lg btn-primary btn-more" href="./produtos/redmi-2.php" role="button">Saiba mais</a></p>
                    </div>
                </div>
            </div>
            <div class="item bg bg2">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="banner-product">Mi Band</h1>
                        <p class="banner-text">Monitore suas atividades e seu sono</p>
                        <p><a class="btn btn-lg btn-primary btn-more" href="./produtos/miband.html" role="button">Saiba mais</a></p>
                    </div>
                </div>
            </div>
            <div class="item bg bg3">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="banner-product">Mi Powerbank</h1>
                        <p class="banner-text">Carregador portátil de 10.400 mAh</p>
                        <p><a class="btn btn-lg btn-primary btn-more" href="./produtos/powerbank.html" role="button">Saiba mais</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

    <!-- Page Content -->
    <div class="container">


        <!-- End Banners Home -->


        <!-- Title -->
        
        <div class="row">
            <div class="col-lg-8">
                <a href="./about.php"><img class="img-responsive teste" src="images/Home/conheca.jpg" alt="Conheça a Xiaomi" width="100%"></a>
            </div>

            <div class="col-lg-4">
                <a href="./faq.php"><img class="img-responsive teste" src="images/Home/perguntas-frequentes.png" alt="Perguntas Frequentes" width="100%"></a>
                
            </div>
            <div class="col-lg-4">
                <a href="http://miuirom.com.br/sobre-o-miui/" target="_blank"><img class="img-responsive teste" src="images/Home/miui-7.png" alt="Conheça o MIUI" width="100%"></a>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-md-12 col-sm-3 divisoria">
                <div class="strike">
                    <span class="destaque-title">Videos</span>
                </div>
            </div>
        </div>


        <div class="row text-center">

            <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9 marg">
                    <iframe class="embed-responsive-item" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/UySnI7DW52g"></iframe>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9 marg">
                    <iframe class="embed-responsive-item" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/RCcQUF7wz9o"></iframe>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="embed-responsive embed-responsive-16by9 marg">
                    <iframe class="embed-responsive-item" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/qJd1Gf-OGAg"></iframe>
                </div>
            </div>
        </div>
     
    </div>
    <!-- /.container -->

    
   <div class="jumbotron miui7-parallax">
        <a href="./about.php" class="miui7-link">
            <div class="container">
                <h2 class="miui-7">Inovação para <span style="color:#ff4a21">todos</span></h2>
            </div>
        </a>
    </div>
    

   
    <div class="midias-sociais text-center">
        
            <p class="social-media">Redes sociais</p>
                <a href="https://www.facebook.com/XiaomiBrasil" target="_blank"><i class="fa fa-facebook-square social"></i></a>
                <a href="https://www.youtube.com/channel/UCaqqPEU381EtWJWQdMLgjsA" target="_blank"><i class="fa fa-youtube-square social"></i></a>
        
    </div>   
    

    <!-- Footer -->
     <div id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li class="footer-title">PRODUTOS<li>
                        <li class="link-footer"><a href="produtos/redmi-2.php">Redmi 2 | Redmi 2 PRO</a></li>
                        <li class="link-footer"><a href="produtos/powerbank.php">Mi Power Bank</a></li>
                        <li class="link-footer"><a href="produtos/miband.php">Mi Band</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li class="footer-title">SOBRE A XIAOMI<li>
                        <li class="link-footer"><a href="about.php">Sobre a Xiaomi</a></li>
                        <li class="link-footer"><a href="faq.php">Perguntas Frequentes</a></li>
                        <li class="link-footer"><a href="#">Termos de Uso</a></li>
                        <li class="link-footer"><a href="#">Política de Privacidade</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li class="footer-title">SUPORTE TÉCNICO<li>
                        <li class="link-footer"><a href="#">Garantia</a></li>
                        <li class="link-footer"><a href="#">Assistência Técnica</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li class="footer-title">4003 - 2953<li>
                        <li class="link-footer horario">Horário de atendimento: De segunda a sexta, das 09:00 às 18:00</li>
                        
                    </ul>

                    <a class="btn btn-lg btn-primary btn-chat" href="#" role="button">Atendimento</a>
                </div>

            </div>
    <hr>
    <div class="row">
            
            <div class="col-xs-4">
                <p class="text-muted">© 2016 Xiaomi. Todos os direitos reservados</p>
            </div>
            <div class="col-xs-8">
              <div class="btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle change-location" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mudar localização
                  <span class="caret"></span>
                  <span class="sr-only"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="http://www.mi.com/en/" target="_blank">Home Global </a></li>
                  <li><a href="http://www.mi.com/index.html" target="_blank">China Continental </a></li>
                  <li><a href="http://www.mi.com/hk/" target="_blank">Hong Kong </a></li>
                  <li><a href="http://www.mi.com/tw/" target="_blank">Taiwan </a></li>
                  <li><a href="http://www.mi.com/sg/" target="_blank">Cingapura</a></li>
                  <li><a href="http://www.mi.com/my/" target="_blank">Malásia</a></li>
                  <li><a href="http://www.mi.com/ph/" target="_blank">Filipinas </a></li>
                  <li><a href="http://www.mi.com/in/" target="_blank">Índia</a></li>
                  <li><a href="http://www.mi.com/id/" target="_blank">Indonésia</a></li>
                </ul>
              </div>
            </div>
        </div>
</div>
     </div>
        
<!-- END Footer -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/index.js"></script>

    <script src="../js/jquery.mobile.custom.js"></script>
    

    <script>
        $(document).ready(function() {
            $("#myCarousel").swiperight(function() {
                $(this).carousel('prev');
            });
            $("#myCarousel").swipeleft(function() {
                $(this).carousel('next');
            });
        });
</script>
</body>

</html>
