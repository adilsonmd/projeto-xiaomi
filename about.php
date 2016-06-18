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

    <title>Xiaomi | Sobre a Xiaomi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/about.css" rel="stylesheet">
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
                        <a href="produtos/redmi-2.php">Redmi 2 | Redmi 2 PRO</a>
                    </li>
                    <li>
                        <a href="produtos/miband.php">Mi Band</a>
                    </li>

                    <li>
                        <a href="produtos/powerbank.php">Mi PowerBank</a>
                    </li>
                    <li>
                        <a href="http://miuirom.com.br/sobre-o-miui/" target="_blank">MIUI</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="faq.php">Perguntas Frequentes</a>
                    </li>

                    <li>
                        <a href="about.php">Sobre a Xiaomi</a>
                    </li>

                    <?php
                        if(isset($_SESSION["login"])) {
                            echo ('Olá, '.$_SESSION["login"]. ' (<a href="./php/deslogar.php">Sair</a>)');
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

    
    <!-- Header Section -->
    <section class="section" id="section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="images/About/years.jpg" class="img-responsive img-centered">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 id="ask-title">SEMPRE ACREDITE QUE ALGO MARAVILHOSO ESTÁ PARA ACONTECER</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- END Header Section -->

    <!-- Logo Section -->
    <section class="section" id="section2">
        <div class="container">
            <div class="row featurette">
                <div class="col-md-6">
                    <img class="featurette-image img-responsive center-block" src="images/About/milogo.jpg" alt="Generic placeholder image">
                </div>
                <div class="col-md-6">
                    <h2 class="featurette-heading logo-title"><strong>MI</strong></h2>
                    <p class="lead">O "MI" em nosso logo significa “Mobile Internet”. Isso representa tudo que a Xiaomi faz, partindo de nosso sistema operacional - MIUI.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- END Logo Section -->
    

    <!-- Quality Section -->
    <section class="section" id="section3">
        <div class="container">
            <div class="row featurette">
                
                <div class="col-lg-12 text-center">
                    <h2 class="featurette-heading sec3-title"><strong>CONHEÇA A XIAOMI</strong></h2>
                    <p class="lead sec3-text">A Xiaomi é uma empresa de internet móvel focada em tornar tecnologia de qualidade acessível a todos. Fundada pelo empreendedor Lei Jun em 2010, a empresa se tornou rapidamente uma das líderes em tecnologia na China e uma das startups mais valiosas do mundo.
                    Nós criamos hardware, software e serviços de internet para - e com a ajuda de - nossos Mi Fãs. Em nosso portifólio de produtos, além de smartphones como Redmi 2, Redmi 2 Pro, Redmi Note 2, Mi4, Mi5, Mi Note e Mi Note Pro, também contamos com tablets, roteadores, TVs entre outros. Um ecossistema de dispositivos inteligentes para melhorar sua vida.
                    Na Xiaomi sempre acreditamos que algo maravilhoso está para acontecer. Acreditamos também em:<br>
                    -Alta tecnologia<br>
                    -Preços justos<br>
                    -Paixão pelos Mi Fãs
                    
                    </p>

                </div>

                <hr class="featurette-divider">

                <div class="social text-center ">

                    

                    <a href="https://www.facebook.com/XiaomiBrasil" target="_blank"><i class="fa fa-facebook-square social"></i></a>
                    <a href="https://www.youtube.com/channel/UCaqqPEU381EtWJWQdMLgjsA" target="_blank"><i class="fa fa-youtube-square social"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END Quality Section -->
    

    <!-- Quality 2 Section -->
    <section class="section" id="section2">
        <div class="container">
            <div class="row featurette text-center">
                <div class="col-lg-12">
                    <h2 class="featurette-heading logo-title quality"><strong>TORNAMOS A TECNOLOGIA DE QUALIDADE ACESSÍVEL A TODOS</strong></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- END Quality 2 Section -->

    <!-- Leadership Section -->
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box boss1">
                        <img src="images/About/boss01.jpg" class="img-responsive" alt="">
                        <span class="name" id="name1">LEI JUN</span>
                        <span class="position" id="pos1">Fundador, Presidente e CEO</span>

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    LEI JUN
                                </div>
                                <div class="project-name">
                                    Lei Jun fez parte da equipe que fundou a Kingsoft em 1992 e se tornou CEO em 1998. Um ano depois, fundou o site de downloads e serviço de informações de TI Joyo.com. Quando a Kingsoft completou seu IPO, Lei Jun abriu mão de sua posição e se tornou Vice Presidente na Kingsoft. No começo dos anos 2000, apoiou várias startups bem-sucedidas, como YY, UC e Vancl como investidor anjo, e, no dia 6 de abril de 2010, fundou a Xiaomi. Em julho de 2011, ele voltou para a Kingsoft como Presidente do Conselho. Lei Jun é atualmente Presidente e CEO da Xiaomi.
                                </div>
                            </div>


                        </div>

                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box boss2">
                        <img src="images/About/boss02.jpg" class="img-responsive" alt="">
                        <span class="name" id="name2">LIN BIN</span>
                        <span class="position" id="pos2">Co-Fundador, Presidente</span>

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    LIN BIN
                                </div>
                                <div class="project-name">
                                    Lin Bin se formou na Universidade Sun Yat-sen em 1990 em Engenharia Elétrica. Ele fez Mestrado em Ciência da Computação na Universidade Drexel em 1992. Logo depois, ele começou a trabalhar na Microsoft como Engenheiro de Projetos, Gerente Sênior de Desenvolvimento da MSRA e Diretor de Engenharia da MSRA. Lin Bin também contribuiu no desenvolvimento de produtos da Microsoft como o Windows Vista e o IE 8. Em 2006, ele entrou para o Google como Vice Presidente do Instituto de Engenharia do Google China  e Diretor de Engenharia do Google Global, encarregado de criar e gerenciar a Busca Mobile do Google China e os times de Localização de apps do Android.
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box boss3">
                        <img src="images/About/boss03.jpg" class="img-responsive" alt="">
                        <span class="name" id="name3">HUGO BARRA</span>
                        <span class="position" id="pos3">Vice Presidente</span>

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    HUGO BARRA
                                </div>
                                <div class="project-name">
                                    Hugo é responsável pelas Operações Globais da Xiaomi e é encarregado dos produtos e operações da empresa em todos os mercados fora da China. Antes de entrar para a Xiaomi em 2013, Hugo foi Vice Presidente de Administração de Produtos Android no Google. Antes de entrar para o time Android, ele trabalhou para o Google em Londres como Diretor de Administração de Produtos para Mobile, um papel que teve desde entrar para a empresa em 2008. Hugo é formato pelo Massachusetts Institute of Technology com bacharelado e mestrado em Ciência da Computação, Engenharia Elétrica e Administração.
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- END Leadership Section -->



    <!-- Culture Section -->
    <section class="section" id="section2">
        <div class="container">
            <div class="row featurette text-center">
                <div class="col-lg-12">
                    <h2 class="featurette-heading logo-title culture-title"><strong>NOSSA CULTURA</strong></h2>

                    <p class="lead culture-text">"Feito para fãs" – é nisso que acreditamos. Nossos maiores admiradores, os Mi Fãs, nos indicam quais passos a seguir. Muitos funcionários da Xiaomi foram Mi Fãs antes de entrar para a equipe. Como equipe, buscamos incansavelmente a perfeição, constantemente refinando e melhorando nossos produtos para criar a melhor experiência de usuário possível. Também somos destemidos para testar novas ideias e ultrapassar os nossos próprios limites. Nossa dedicação e crença em inovação, com o apoio de nossos Mi Fãs, são as forças que guiam nossos excepcionais produtos.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END Culture Section -->





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

<script>

    $( ".boss1" ).mouseover(function() {
      $( "#name1" ).hide();
      $( "#pos1" ).hide();
    });

    $( ".boss1" ).mouseout(function() {
      $( "#name1" ).show();
      $( "#pos1" ).show();
    });

     $( ".boss2" ).mouseover(function() {
      $( "#name2" ).hide();
      $( "#pos2" ).hide();
    });

    $( ".boss2" ).mouseout(function() {
      $( "#name2" ).show();
      $( "#pos2" ).show();
    });

     $( ".boss3" ).mouseover(function() {
      $( "#name3" ).hide();
      $( "#pos3" ).hide();
    });

    $( ".boss3" ).mouseout(function() {
      $( "#name3" ).show();
      $( "#pos3" ).show();
    });

</script>

</body>

</html>
