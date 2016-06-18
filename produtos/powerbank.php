<?php
  @session_start();
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="pt-br">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>


  <title>Xiaomi | PowerBank</title>
  <meta name="viewport" content="width=device-width, user-scalable=no"/>
  <meta charset="utf-8">
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../css/geral-xiaomi.css" />
  <link rel="stylesheet" type="text/css" href="../css/powerbank.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/xiaomi-components.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">

</head>

	<body>

      <div class="x-general">

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
                            echo ('Olá, '.$_SESSION["usuario"]. ' (<a href="../php/deslogar.php">Sair</a>)');
                        }
                        else {
                            echo '<li><a href="../login.html">Conta Mi</a></li>';    
                        }
                    
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



            <div id="productContent" class="bd xm-product-box J_section-box" data-switchy-panel="content">
              <div id="overall" class="dianyuan-content-intro tab-content">
                <div class="section section-bn xm-animation xm-animation-active">
                  <div class="content">
                    <h3 class="title">
                      <span class="num num-10400">10400</span>mAh
                      <span class="subtitle">Mi Power Bank</span>
                    </h3>
                    <p class="text">
                      Carregador portátil com case de alumínio e células de bateria de alta tecnologia. 
                    </p>

                    
                  
                  </div>
                  <img class="product" src="../images/PowerBank/carregador-portatil-power-bank-mao.jpg" alt="carregador portátil power bank na palma da mÃ£o">
                </div>
                <div class="section section-capacity xm-animation xm-animation-active">
                  <div class="content">
                    <h3 class="title">Alta capacidade de 10400mAh.</h3>
                    <p class="text">
                      Células <i>premium</i> de Íon-Lítio adicionam uma capacidade extra de 10400mAh ao seu Smartphone, tablet ou câmera. Este Power Bank proporciona 3,4 cargas completas para o seu Redmi 2.
                    </p>
                    <ul class="feature-list">
                      <li class="first"><span class="data"><b class="num num-25">4,5</b></span>cargas completas para o iPhone 5s</li>
                     
                      <li><span class="data"><br /><b class="num num-15">3,4</b></span>cargas completas para o Redmi 2</li>
                    </ul>
                    <p class="tips">* Resultado dos testes em laboratório.<br/> &nbsp;&nbsp;&nbsp;Uso real pode apresentar variações nesses parâmetros.</p>
                  </div>
                  <img class="product" src="../images/PowerBank/carregador-portatil-power-bank-alta-capacidade.jpg" alt="carregador portátil com alta capacidade">
                </div>
                <div class="section section-core xm-animation xm-animation-active">
                  <div class="content">
                    <h3 class="title">
                      Proteção de alta qualidade para a placa do circuito. 
                      <span class="subtitle">Nove níveis de proteção, construídos pela Texas Instruments</span>
                    </h3>
                    <p class="text">
                      Utiliza circuitos USB com controle inteligente e placas de carga/descarga da Texas Instruments.<br/>
O Mi Power Bank oferece não apenas nove níveis de proteção para o circuito,<br/> mas também uma maior eficiência de recarga.

                    </p>
                    <div class="stage">
                      <img class="product-01" src="../images/PowerBank/protecao-alta-qualidade-mi-power-bank-01.png" alt="Proteção de Alta Qualidade no Power Bank">
                      <img class="product-02" src="../images/PowerBank/protecao-alta-qualidade-mi-power-bank-02.png" alt="Proteção de Alta Qualidade no Power Bank">
                      <img class="product-03" src="../images/PowerBank/protecao-alta-qualidade-mi-power-bank-03.png" alt="Proteção de Alta Qualidade no Power Bank">
                      <img class="product-04" src="../images/PowerBank/protecao-alta-qualidade-mi-power-bank-04.png" alt="Proteção de Alta Qualidade no Power Bank">
                      <img class="product-05" src="../images/PowerBank/protecao-alta-qualidade-mi-power-bank-05.png" alt="Proteção de Alta Qualidade no Power Bank">
                      <img class="product-06" src="../images/PowerBank/protecao-alta-qualidade-mi-power-bank-06.png" alt="Proteção de Alta Qualidade no Power Bank">
                    </div>
                    <ul class="core-feature-list clearfix">
                      <li>
                        <h4>Resistência à temperatura*</h4>
                        <p>Sensibilidade ao calor e mecanismo de controle de temperatura garantem que as baterias Íon-Lítio operem dentro da faixa de segurança.</p>
                        <img src="../images/PowerBank/icon-protect-01.png" alt="">
                      </li>
                      <li>
                        <h4>Proteção contra curto-circuito </h4>
                        <p>Proteção automática para a placa-mãe e bateria em caso de curto-circuito.</p>
						<img src="../images/PowerBank/icon-protect-02d3d9.png?10" alt="">
                      </li>
                      <li>
                        <h4>Mecanismo de Reinício</h4>
                        <p>Botão Reiniciar pode ser usado para redefinir o Power Bank em casos de instabilidade de tensão ou corrente.</p>
                        <img src="../images/PowerBank/icon-protect-03.png" alt="">
                      </li>
                      <li>
                        <h4>Proteção contra sobretensão de entrada </h4>
                        <p>Previne contra picos de tensão que possam danificar o dispositivo.
                        
                        <img src="../images/PowerBank/icon-protect-04.png" alt="">
                      </li>
                      <li>
                        <h4>Proteção contra a inserção incorreta</h4>
                        <p>Detecta quando o carregador está inserido incorretamente e suspende automaticamente o carregamento.
</p>
                        <img src="../images/PowerBank/icon-protect-05.png" alt="">
                      </li>
                      <li>
                        <h4>Proteção contra sobrecorrente de saída</h4>
                        <p>Monitora corrente de saída e desliga quando a corrente excede o limite máximo, protegendo o dispositivo.</p>
                        
                        <img src="../images/PowerBank/icon-protect-06.png" alt="">
                      </li>
                      <li>
                        <h4>Proteção contra sobretensão de saída</h4>
                        <p>Monitora tensão de saída e desliga o Power Bank quando a tensão excede o limite máximo, protegendo o dispositivo.</p><br><p class="x-small">* Conforme Tabela de testes mostrada abaixo</p>
                       
                        <img src="../images/PowerBank/icon-protect-07.png" alt="">
                      </li>
                      <li>
                        <h4>Proteção contra sobrecarga e sobredescarga</h4>
                        <p>Emprega tecnologia de ponta para evitar que sobrecarga e sobredescarga danifiquem as baterias de Íon-Lítio.</p>
                        <img src="../images/PowerBank/icon-protect-08.png" alt="">
                      </li>
                      <li>
                        <h4>Circuitos protetores PTC para as células*</h4>
                        <p>Células de bateria equipadas com PTC para controle efetivo da corrente e  proteção nos casos em que a temperatura e corrente ultrapassarem o limite máximo recomendado.</p>
                        <img src="../images/PowerBank/icon-protect-09.png" alt="">
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="section section-efficiency xm-animation">
                  <div class="content">
                    <h3 class="title">
                      Eficiência otimizada de carga / descarga 
                      <span class="subtitle">Até 93% de taxa de conversão de carga</span>
                    </h3>
                    <p class="text">Circuitos de padrão internacional não são apenas mais seguros, 
                    como também melhoram a taxa de conversão de carga e estabilizam a tensão de descarga
                    através de sensores avançados de resistência-capacitância, otimizando a eficiência e durabilidade do seu Mi Power Bank.</p>
                    <ul class="feature-list clearfix">
                      <li class="first">&nbsp;Adiciona<span class="data"><b class="num num-100">100</b></span>ciclos </li>
                      <li>Melhoria de<span class="data">&nbsp;&nbsp;&nbsp;<b class="num num-10">10</b> %</span>na eficiência de saída</li>
                      <li>Até<span class="data">&nbsp;&nbsp;&nbsp;<b class="num num-93">93</b>%</span>de taxa de conversão de carga</li>
                    </ul>
                  </div>
                  <img class="product" src="../images/PowerBank/carregador-portatil-otima-carga.jpg" alt="Carga Otimizada no Carregador portátil power Bank">
                </div>
                <div class="section section-shell xm-animation">
                  <div class="content">
                    <h3 class="title">
                      Corpo de Alumínio
                      <span class="subtitle">Linda superfície texturizada de alumínio.
</span>
                    </h3>
                    <p class="text">
                      O corpo de metal foi criado por meio de corte digital CNC de alta precisão. A superfîcie é resistente à água e corrosão, sendo perfeita para uso diário.
                    </p>
                    <ul class="feature-list clearfix">
                      <li class="first"><span class="data"><b class="num num-50">50</b>kg</span>limite de pressão</li>
                      <li><span class="data"><b class="num num-300">300</b>vezes</span>teste de fricção&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </ul>
                  </div>
                  <img class="product" src="../images/PowerBank/carregador-portatil-corpo-aluminio.jpg" alt="Carregador portátil com Corpo de AlumÃ­nio">
                </div>
                <div class="section section-body xm-animation">
                  <div class="content">
                    <h3 class="title">Design Elegante</h3>
                    <p class="text">Botões, indicadores luminosos e
                    portas de conexão localizados
                    num mesmo painel.</p>
                  </div>
                  <img class="product" src="../images/PowerBank/carregador-portatil-design-elegante.jpg" alt="Carregador portátil com Design Elegante">
                  <img class="product-text" src="../images/PowerBank/home-body-product-text.png" alt="">
                </div>
                <div class="section section-compatibility xm-animation">
                  <div class="content">
                    <h3 class="title">
                      Compatível com todos os Smartphones mais populares.
                      <span class="subtitle">A porta de carga ajusta automaticamente a saída.</span>
                    </h3>
                    <p class="text">
                    Mi Power Bank ajusta automaticamente a saída com base no aparelho conectado. 
                    É compatível com Smartphones e Tablets de todas as marcas, assim como uma variedade de câmeras digitais e jogos portáteis.

                    </p>
                  </div>
                  <div class="stage">
                    <img class="product-5c" src="../images/PowerBank/carregador-portatil-compativel-iphone.jpg" alt="carregador portátil compatível com iphone">
                    <img class="product-mi3" src="../images/PowerBank/carregador-portatil-compativel-mi3.jpg" alt="carregador portátil compatível com mi3">
                    <img class="product-ipad" src="../images/PowerBank/carregador-portatil-compativel-ipad.jpg" alt="carregador portátil compatível com ipad">
                    <img class="product-hm" src="../images/PowerBank/carregador-portatil-compativel-android.jpg" alt="carregador portátil compatível com android">
                    <img class="product-nano" src="../images/PowerBank/carregador-portatil-compativel-nano.jpg" alt="carregador portátil compatível com nano">
                  </div>
                </div>
                <div class="section section-design xm-animation">
                  <div class="content">
                    <h3 class="title">Bordas arredondadas</h3>
                    <p>Ergonomicamente amigável e fácil de segurar.</p>
                    <h3 class="title">Processo de anodização do alumínio</h3>
                    <p>O meticuloso processo de anodização cria uma forte 
                      superfície resistente a desbotamento,
                      desgaste e corrosão.</p>
                    <h3 class="title">Botão em baixo relevo</h3>
                    <p>Botão ligeiramente recuado para ser facilmente encontrado, mesmo no escuro.</p>
                  </div>
                  <img class="product" src="../images/PowerBank/carregador-portatil-power-bank-bordas-arredondadas.png" alt="Carregador com Bordas Arredondadas">
                </div>
                <div class="section section-test xm-animation">
                  <div class="content">
                    <h3 class="title">Rigorosamente testado para atender <br>aos elevados padrões de qualidade da Mi</h3>
                    <p class="text">O corpo em peça única de alumínio assegura rigidez estrutural.<br>
Testado para suportar 5.000 ciclos de inserção/remoção de conectores micro USB e 1.500<br>
ciclos de inserção/remoção de conectores USB. Somos sempre muito exigentes nos testes e design!
                    </p>
                    <h4>Testes de confiabilidade</h4>
                    <table class="form-test">
                      <thead>
                        <tr>
                          <th class="name">Testes</th>
                          <th class="detail">Detalhes (ciclos)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Porta de carregamento</td>
                          <td>5000</td>
                        </tr>
                        <tr>
                          <td>Porta USB</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td>ESD</td>
                          <td>Descarga por contato 8KV ; Descarga pelo ar 12KV</td>
                        </tr>
                      </tbody>
                    </table>
                    <h4>Testes de exposição climática</h4>
                    <table class="form-test">
                      <thead>
                        <tr>
                          <th class="name">Testes</th>
                          <th class="detail">Detalhes</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Alta temperatura</td>
                          <td>70&deg;C, 96 horas</td>
                        </tr>
                        <tr>
                          <td>Baixa temperatura</td>
                          <td>-40&deg;C, 96 horas</td>
                        </tr>
                        <tr>
                          <td>Alta temperatura e <br>alta umidade</td>
                          <td>60&deg;C e RH95%, 96 horas</td>
                        </tr>
                        <tr>
                          <td>Ciclo de temperatura</td>
                          <td>70&deg;C ~ -40&deg;C, 10 ciclos</td>
                        </tr>
                        <tr>
                          <td>Teste de <i>spray</i> salino</td>
                          <td>35&deg;C / 5% / 24 horas / 3 ciclos</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="section section-bn-footer xm-animation">
                  <div class="content">
                    <h3 class="title">
                      <span class="capacity-num">10400</span>mAh
                      <span class="subtitle">Mi Power Bank</span>
                    </h3>
                    <p class="text">
                      Carregador portátil com case de Alumínio e células de bateria Íon-Lítio de alta tecnologia.
                    </p>
                  </div>
                  <img class="product" src="../images/PowerBank/melhor-carregador-portatil.jpg" alt="O melhor Carregador portátil">
                </div>
              </div>
              
            </div>

           <div class="container">
            
            <div class="row text-center">
              <div class="col-lg-12">
                <h2>Especificações</h2>
              </div>
            </div>
            <table class="table table-striped">

              <tbody>
                <tr>
                  <td>Modelo</td>
                  <td>NDY-02-AD</td>
                  
                </tr>
                <tr>
                  <td>Tipo de Bateria</td>
                  <td>Íon-Lítio</td>
                  
                </tr>
                <tr>
                  <td>Tensão de saída</td>
                  <td>DC 5,1V</td>
                  
                </tr>
          <tr>
                  <td>Tensão de entrada</td>
                  <td>DC 5,0V</td>
                  
                </tr>
          <tr>
                  <td>Corrente de entrada</td>
                  <td>2.000mA (Típica)</td>
                  
                </tr>
          <tr>
                  <td>Corrente de saída</td>
                  <td>2.100mA (Típica)</td>
                  
                </tr>
          <tr>
                  <td>Capacidade Nominal</td>
                  <td>10400mAh (3.6V)</td>
                  
                </tr>
          <tr>
                  <td>Tempo de recarga</td>
                  <td><li>5 horas e 30 minutos com um adaptador de 5V/2A e um cabo padrão</li>
          <li>Cerca de 10 horas com um adaptador de 5V/1A e um cabo padrão</li></td>
                  
                </tr>
          <tr>
                  <td>Dimensões</td>
                  <td>90,5 x 77 x 21,6mm</td>
                  
                </tr><tr>
                  <td>Detecção de carga</td>
                  <td>Auto-detecção de conexão e desconexão de dispositivos</td>
                  
                </tr><tr>
                  <td>Segurança</td>
                  <td>Entrada/Saída: sobrecorrente, sobretensão, curto-circuito;</td>
                  
                </tr><tr>
                  <td>Proteção contra falta de energia</td>
                  <td>Dispositivo religa automaticamente ao ser conectado a uma fonte de tensão</td>
                  
                </tr><tr>
                  <td>Temperatura de carregamento</td>
                  <td>0&deg;C - 45&deg;C (Típica)</td>
                  
                </tr><tr>
                  <td>Temperatura de descarregamento</td>
                  <td>Inicial -10&deg;C ~ +50&deg;C (Típica)</td>
                  
                </tr>

          <tr>
                  <td>Temperatura de descarregamento</td>
                  <td>Inicial -10&deg;C ~ +50&deg;C (Típica)</td>
                  
                </tr>

           <tr>
                  <td>Temperatura de descarregamento</td>
                  <td>
          <li>Inicial -10&deg;C ~ +50&deg;C (Típica)</li>
          <li>Contínua -20&deg;C ~ +60&deg;C (Típica)</li></td>
                  
                </tr>
          <tr>
                  <td>Peso</td>
                  <td>250g</td>
                  
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>


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
  
 
    </body>

</html>