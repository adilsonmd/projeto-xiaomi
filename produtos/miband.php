<?php
    @session_start();
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="pt-br">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>


  <title>Xiaomi | Mi Band</title>

    
  <meta name="viewport" content="width=device-width, user-scalable=no"/>
     
  <meta charset="utf-8">
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
  
 
  <link rel="stylesheet" type="text/css" href="../css/miband.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/xiaomi-components.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">

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
                <a class="navbar-brand logo" href="../index.php"><img src="../images/Geral/logo-mi.png" width="80%"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="redmi-2.php">Redmi 2 | Redmi 2 PRO</a>
                    </li>
                    <li>
                        <a href="miband.php">Mi Band</a>
                    </li>

                    <li>
                        <a href="powerbank.php">Mi PowerBank</a>
                    </li>
                    <li>
                        <a href="http://miuirom.com.br/sobre-o-miui/" target="_blank">MIUI</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../faq.php">Perguntas Frequentes</a>
                    </li>

                    <li>
                        <a href="../about.php">Sobre a Xiaomi</a>
                    </li>

                    <?php
                        if(isset($_SESSION["usuario"])) {
                            echo ('Olá, '.$_SESSION["usuario"]. ' (<a href=".php/deslogar.php">Sair</a>)');
                        }
                        else {
                            echo '<li><a href="./login.html" target="_blank">Conta Mi</a></li>';    
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- BEGIN FEATURETTES-->

    <div class="jumbotron banner-miband">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 id="miband-title">Mi Band</h1>
                    <p id="miband-subtitle">Fique por dentro dos seus movimentos! Sensor de alta eficiência e bateria que dura 30 dias sem recarregar.</p>
                </div>
            </div>
        </div>
    </div>
    

    <section id="features">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1 id="features-title">Monitore o seu nível diário de atividade</h1>
                    <div class="divider"></div>
                    <p id="features-subtitle">Monitore o seu nível de atividade, registre as distâncias percorridas e controle sua queima calórica. Alcance suas metas diárias e tenha um estilo de vida mais saudável!</p>
                </div>
                <div class="row feats-band">
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
                        <div class="media feature">
                            
                                <img src="../images/Miband/walk.png" class="pull-right">
                            
                            <div class="media-body">
                                <h3 class="media-heading left">Caminhada para o escritório:</h3>
                                <h4 class="media-heading-sub left">500 passos</h4>
                            </div>
                        </div>
                        <div class="media feature">
                            
                                <img src="../images/Miband/run.png" class="pull-right">
                            
                            <div class="media-body">
                                <h3 class="media-heading left">Corrida matinal:</h3>
                                <h4 class="media-heading-sub left">2.000 passos</h4>
                            </div>
                        </div>
                        <div class="media feature">
                            
                                <img src="../images/Miband/clock.png" class="pull-right">
                           
                            <div class="media-body">
                                <h3 class="media-heading left">Alarme inteligente</h3>
                                <h4 class="media-heading-sub left">modo vibrar</h4>
                            </div>
                        </div>
                        <div class="media feature">
                            
                                <img src="../images/Miband/sleep.png" class="pull-right">
                            
                            <div class="media-body">
                                <h3 class="media-heading left">Sono profundo:</h3>
                                <h4 class="media-heading-sub left">4 horas</h4>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-4" >
                        <img src="../images/Miband/feat.jpg" class="img-responsive scrollpoint sp-effect5" alt="">
                    </div>
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect2">
                        <div class="media feature">
                            
                                <img src="../images/Miband/gym.png" class="pull-left" >
                           
                            <div class="media-body">
                                <h3 class="media-heading">Aula de ginástica:</h3>
                                <h4 class="media-heading-sub">5.000 passos</h4>
                            </div>
                        </div>
                        <div class="media feature">
                            
                                <img src="../images/Miband/shop.png" class="pull-left" >
                            
                            <div class="media-body">
                                <h3 class="media-heading">Compras com amigos:</h3>
                                <h4 class="media-heading-sub">3.000 passos</h4>
                            </div>
                        </div>
                        <div class="media feature">
                            
                                <img src="../images/Miband/sleep2.png" class="pull-left" >
                            
                            <div class="media-body">
                                <h3 class="media-heading">Modo de sono</h3>
                                <h4 class="media-heading-sub">ativado automaticamente</h4>
                            </div>
                        </div>
                        <div class="media feature">
                            
                                <img src="../images/Miband/mifit.png" class="pull-left" >
                            
                            <div class="media-body">
                                <h3 class="media-heading">Mi Fit</h3>
                                <h4 class="media-heading-sub">monitore tudo pelo aplicativo</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="../images/Miband/carousel-1.jpg" alt="" class="img-desktop">
                
              </div>

              <div class="item">
                <img src="../images/Miband/carousel-2.jpg" alt="" class="img-desktop">
              </div>
            
              <div class="item">
                <img src="../images/Miband/carousel-3.jpg" alt="" class="img-desktop">
              </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>  
        </div>
        
        <hr class="featurette-divider">
    <div class="container">
        <div class="jumbotron sleep1-miband">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1 id="sleep1-title">Luzes apagadas,<br> hora de dormir.</h1>
                    </div>
                </div>
            </div>
        </div>

         <hr class="featurette-divider">

        
         
        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Monitoramento automático e análise da qualidade do seu sono.</h2>
                <p class="lead">Descanse bem, descanse fácil. Entenda a duração e a qualidade do seu sono. 
Obtenha planos de ação do app Mi Fit para melhorar a qualidade do seu
sono com base nos dados dos seus ciclos de sono leve e profundo.</p>
                <p class="lead">Não desperte de seu cochilo. O modo de sono é ativado automaticamente. Não necessita de setup manual.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="featurette-image img-responsive center-block" src="../images/Miband/screen1.png" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Alarme vibratório inteligente. Um toque gentil para começar seu dia.</h2>
          <p class="lead">O alarme vibratório inteligente da Mi Band te acorda gentilmente 30 minutos antes do toque do despertador. Acorde gradualmente de um sono profundo, para que quando o despertador tocar, você esteja bem disposto para começar seu dia. Não dependa mais do botão de snooze do seu despertador antigo!</p>
          <p class="lead">Comece bem seu dia, acordando mais suavemente.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../images/Miband/screen2.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row text-center">
        <div class="col-md-12">
            <h2 class="featurette-heading title">Sincronize com o aplicativo para analisar suas atividades físicas e seu sono. Melhore sua qualidade de vida.</h2>
            <p class="lead subtext">Sincronize com o aplicativo Mi Fit em tempo real via <i>Bluetooth Low Energy (BLE)</i> para acessar seus registros de atividades física e de sono. Grave até um ano de dados e receba sugestões para um estilo de vida mais saudável. Compartilhe e compare seus dados com o de seus amigos.</p>
        </div>

        <div class="col-md-12">
            <img src="../images/Miband/miband_xiaomi_09.jpg" class="xiaomi-app img-responsive">
        </div>
      </div>  
 </div>

    <div class="jumbotron unblock-miband">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 id="unblock-title">Identifique-se através da sua Mi Band: passe o dedo e destrave seu Smartphone. Sem senhas.</h1>
                    <h2 id="unblock-subtitle">Esqueça as senhas complicadas. Simplesmente pegue seu Smartphone, deslize o dedo pela tela e destrave o aparelho. Sua Mi Band pode ser sincronizada com sua Conta Mi, aumentando a segurança de seus dados pessoais.</h2>

                    <p id="unblock-text">* Verifique a compatibilidade com diferentes aparelhos na página de especificações. A funcionalidade de desbloqueio de tela com a Mi Band é compatível com aparelhos com o sistema operacional MIUI ou Android 5.0 (ou superior).</p>    
                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Fabricada através de um meticuloso processo de 12 passos</h2>
                <p class="lead">A superfície de liga de alumínio com 1 mm de espessura é fabricada por meio de um meticuloso processo de 12 passos. O alumínio é moldado por compressão, polido e jateado para adquirir uma textura suave, enquanto os cantos adquirem brilho através de um processo de desbastagem CNC. Três indicadores luminosos, de 1 mm de diâmetro cada, são criados usando tecnologia de perfuração por micro-laser. Composto por 91 furos, com 0,02 mm cada, os indicadores são injetados com adesivos UV para prevenir que até mesmo a mais fina poeira entre na sua Mi Band.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="featurette-image img-responsive center-block" src="../images/Miband/spec1.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Adequado para peles sensíveis</h2>
          <p class="lead">A pulseira é feita de TPSiV - um dos melhores elastômeros termoplásticos do mundo. As incríveis propriedades anti-UV, anti-bacteriana e anti-alérgica tornam improvável qualquer irritação mesmo em peles muito sensíveis. É macia ao toque e se encaixa perfeitamente para conforto máximo no uso.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../images/Miband/spec2.jpg" alt="Generic placeholder image">
        </div>
      </div>

        

    </div>

    <div class="jumbotron call-miband">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 id="call-title">Alerta de recebimento de ligação</h1>
                    <h2 id="call-subtitle">Nunca perca uma ligação importante. Configure sua Mi Band para avisá-lo quando uma ligação não for atendida após alguns segundos.</h2>
                </div>
            </div>
        </div>
    </div>
      

    <div class="container">
        <div class="jumbotron components-miband">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1 id="components-title">Sensor de atividades de alta eficiência</h1>
                        <p id="components-subtitle">O acelerômetro da Mi Band consome apenas 20% da energia consumida por qualquer outro sensor do mesmo nível.</p>
                    </div>

                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" id="button1">Sensor de atividades</button>
                        <button type="button" class="btn btn-default" id="button2">Chip Bluetooth 4.0 Premium</button>
                        <button type="button" class="btn btn-default" id="button3">Bateria ultra-fina de 8 mm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron spec2">
        <div class="col-md-4 battery">
            <h3 class="spec2-title">30 dias sem recarga</h3>
            <p class="spec2-text">Cada carga completa dura 30 dias - 4 vezes mais do que os similares de mercado</p>
        </div>
        <div class="col-md-4 water-resistant">
            <h3 class="spec2-title">Resistente à água</h3>
            <p class="spec2-text">A Mi Band tem certificação IP67 de resistência à água</p>
        </div>
        <div class="col-md-4 locate">
            <h3 class="spec2-title">Localize sua Mi Band</h3>
            <p class="spec2-text">Utilize o app Mi Fit para encontrar sua Mi Band se estiver dentro do alcance do Bluetooth.</p>
        </div>
    </div>
        
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="about-item scrollpoint sp-effect2">
                    <img src="../images/Miband/tested1.jpg">
                    <h3>Teste de alta temperatura</h3>
                    <p>Submetido a temperaturas de 70°C por 128 horas consecutivas</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6" >
                <div class="about-item scrollpoint sp-effect5">
                    <img src="../images/Miband/tested2.jpg">
                    <h3>Teste de baixa temperatura</h3>
                    <p>Submetido a temperaturas de -20°C por 128 horas consecutivas</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6" >
                <div class="about-item scrollpoint sp-effect5">
                    <img src="../images/Miband/tested3.jpg">
                    <h3>Teste de queda</h3>
                    <p>Altura de 1,2m (12 ciclos)</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6" >
                <div class="about-item scrollpoint sp-effect1">
                    <img src="../images/Miband/tested4.jpg">
                    <h3>Teste de resistência</h3>
                    <p>Manchado com vaselina e deixado em repouso por 24horas</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="jumbotron spec-section text-center">
        
            <div class="col-lg-12">
                <h1 id="title-spec">Especificações da Mi Band</h1>
                <p id="text-spec">clique <a href="#" class="btn btn-default btn-lg" role="button">aqui</a> e conheça as especificações da Mi Band.</p>
            </div>
        
    </div> 


    <!-- /END THE FEATURETTES -->



      
      
  <!-- Footer -->
     <div id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li class="footer-title">PRODUTOS<li>
                        <li class="link-footer"><a href="redmi-2.php">Redmi 2 | Redmi 2 PRO</a></li>
                        <li class="link-footer"><a href="powerbank.php">Mi Power Bank</a></li>
                        <li class="link-footer"><a href="miband.php">Mi Band</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li class="footer-title">SOBRE A XIAOMI<li>
                        <li class="link-footer"><a href="../about.php">Sobre a Xiaomi</a></li>
                        <li class="link-footer"><a href="../faq.php">Perguntas Frequentes</a></li>
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
      <script src="../js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="../js/bootstrap.min.js"></script>
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

        $(document).ready(function(){
            $("#button1").click(function(){
                $("#components-title").text("Sensor de atividades de alta eficiência")
                $("#components-subtitle").text("O acelerômetro da Mi Band consome apenas 20% da energia consumida por qualquer outro sensor do mesmo nível.");
                $("#button1").addClass("active");
                $("#button2").removeClass("active");
                $("#button3").removeClass("active");
             });

            $("#button2").click(function(){
                $("#components-title").text("Chip Bluethooth 4.0 Premium")
                $("#components-subtitle").text("O circuito Bluetooth 4.0 DA14580 funciona por até 4 anos com uma célula de energia de 225mAh. Esse baixíssimo consumo de energia garante à Mi Band um tempo entre recargas de até 30 dias.");

                $("#button2").addClass("active");
                $("#button1").removeClass("active");
                $("#button3").removeClass("active");
             });

            $("#button3").click(function(){
                $("#components-title").text("Bateria ultra-fina de 8 mm")
                $("#components-subtitle").text("Com espessura de apenas 8 mm, a bateria de 41mAh da Mi Band é extremamente fina e poderosa. Uma carga completa pode durar 30 dias - isso pode significar até 4x mais que os similares de mercado.");

                $("#button3").addClass("active");
                $("#button1").removeClass("active");
                $("#button2").removeClass("active");
             });
        });
</script>

    </body>

</html>