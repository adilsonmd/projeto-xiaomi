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

    <title>Xiaomi | Perguntas Frequentes</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/faq.css" rel="stylesheet">
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
                        if(isset($_SESSION["usuario"])) {
                            echo ('Olá, '.$_SESSION["usuario"]. ' (<a href="./php/deslogar.php">Sair</a>)');
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
                    <h2 id="ask-title">Perguntas Frequentes</h2>
                </div>
            </div>
            <div class="row video-intro">
                <div class="col-lg-8 col-lg-offset-2">
                   <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sIraa3jyXv8?list=PLOYeUZB0UHxAbMnbQjf8qy3RDt7cVe1eC" allowfullscreen="allowfullscreen"></iframe>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Header Section -->

    <!-- Question Section 1 -->
    <section class="section" id="section2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <img src="images/Faq/mibunny.png" class="img-responsive img-centered mibunny">
                </div>
            <div class="col-md-6 questions">

                

                <div id="test-list">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg fuzzy-search" placeholder="Buscar" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
            
                    <div class="list">
                
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <h4 class="panel-title name">Como escolher o tipo de bloqueio da tela</h4>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Há três tipos de bloqueio possíveis para usar no seu smartphone Xiaomi: por Padrão, PIN ou Senha.

                                    <ul>
                                        <li>Padrão: faça um desenho ligando os pontos na tela.</li>
                                        <li>PIN: escolha uma sequência numérica de pelo menos 4 números.</li>
                                        <li>Senha: escolha uma senha, com letras e números.</li>
                                    </ul>

                                    <p>Para escolher um tipo e escolher a senha, siga esses passos:</p>

                                    <ol>
                                        <li>Vá em <strong>Configurações</strong></li>
                                        <li><strong>Tipo de Bloqueio</strong></li>
                                        <li>em <strong>Segurança da Tela,</strong> toque em <strong>Senha</strong></li>
                                        <li><strong>Adicionar senha de segurança</strong></li>
                                        <li>E escolha: <strong>Padrão</strong>, <strong>PIN</strong> ou <strong>Senha</strong></li>
                                        <li>Então, é só entrar a senha escolhida.</li>
                                    </ol>

                                    <p>E pronto. ;)</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <h4 class="name panel-title">Esqueci a senha da tela do celular! E agora?</h4>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Mudou a senha para desbloquear a tela do smartphone e não lembra qual é a nova? Não se desespere: é facinho de recuperar.</p>

                                    <p>Primeiro, é importante saber que você tem um número limitado de tentativas de desbloquear a tela do celular. Quando erra todas, ele dá a opção de recuperar a senha. Então, continue tentando lembrar até essa opção aparecer.</p>

                                    <p>Então, toque em <strong>Esqueci a Senha</strong>. Selecione uma conta das que forem exibidas e entre a senha dessa conta, para confirmar que você é o dono do telefone. E pronto: agora, é só configurar novamente a senha de bloqueio da tela.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <h4 class="name panel-title">Mi Cloud: como encontrar o smartphone pela Mi Cloud</h4>
                                </a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Não consegue encontrar seu smartphone? A Mi Cloud pode ajudar a descobrir o paradeiro desse fugitivo. ;)</p>

                                    <p>Antes de mais nada, é necessário ter uma <strong>Conta Mi</strong>. Talvez você já tenha feito isso na configuração inicial do seu smartphone.</p>

                                    <p>Caso não tenha feito, a conta pode ser criada pelo app Conta Mi ou pelo site i.mi.com. É só seguir os passos indicados.</p>

                                    <p>Então, faça o login na Conta Mi com o seu smartphone, pelo aplicativo Conta Mi - se você usou ele para criar a conta, já está logado! Não se esqueça de deixar selecionada a opção <strong>Encontrar Dispositivo</strong>. Senão, não dá para utilizar essa função.</p>

                                    <p>Para encontrar o celular perdido, é só fazer login no site <a href="i.mi.com" target="_blank">i.mi.com</a> e clicar em <strong>Encontrar dispositivo</strong>. O mapa mostra onde ele está e, a partir daí, você pode tocar um alarme para achá-lo, bloquear seu uso até reencontrá-lo ou apagar os dados, caso tenha certeza de que não conseguirá tê-lo de volta mesmo. Mas tem que ter certeza mesmo: essa ação não pode ser desfeita!</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    <h4 class="name panel-title">Apps do MIUI: Galeria</h4>
                                </a>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Todas as imagens que estão no seu smartphone podem ser acessadas na Galeria. O aplicativo foi desenvolvido pela Xiaomi para deixar tudo organizado e fácil de acessar.</p>

                                    <p>A Galeria é dividida em 4 partes: <strong>Fotos, Local, Mi Cloud e Pessoas:</trong></p>

                                    <ul>
                                        <li>Em <strong>Fotos<strong>, ficam todas as imagens feitas pela câmera do seu aparelho.</li>
                                        <li>Em <strong>Local</strong>, todas as imagens do smartphone ficam separadas em pastas. É aqui que você consegue ver capturas de tela, downloads e imagens enviadas por aplicativos como WhatsApp, por exemplo.</li>
                                        <li>Em <strong>Mi Cloud</strong>, ficam todas as imagens sincronizadas com a Mi Cloud.</li>
                                        <li>E em <strong>Pessoas</strong>, as fotos são selecionadas por rostos. Assim, você pode ver as fotos de cada pessoa separadamente.</li>
                                    </ul>
                                    
                                    
                                    
                                    

                                    <p>Essa parte de Pessoas é bem legal para indexar todas as fotos em que alguém aparece e facilitar a busca, além de permitir associar as fotos a um contato. É bem simples de configurar:</p>
                                    <ul>
                                        <li>Caso a mesma pessoa apareça mais de uma vez, toque e segure para selecionar a bolinha.</li>
                                        <li>Vá em <strong>Mesclar.</strong></li>
                                        <li>E selecione o nome dela nos Contatos. Caso ela não esteja na sua lista de contatos, toque em <strong>+Nova pessoa</strong> e adicione o nome.</li>
                                    </ul>
                                    
                                    
                                    

                                    <p>A Galeria também tem diversas configurações que podem ser personalizadas. Para abrir as Configurações, mantenha pressionado o botão Menu do smartphone (é o que fica à esquerda do botão Home).</p>
                                    
                                    <p>Nesse menu, você pode definir diversas configurações de exibição e armazenamento da Galeria - por exemplo, Rotação automática de imagens, Exibir ou não álbuns ocultos, Definir intervalo para apresentação de fotos e sincronização com a Mi Cloud. Aqui, você pode escolher quais álbuns sincronizar, fazer o upload só por Wi-Fi e desativar a seleção por Pessoas, entre outros recursos.</p>

                                    <p>Legal, né? :)</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                    <h4 class="name panel-title">Apps do MIUI: Arquivos</h4>
                                </a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Visualize facilmente os arquivos do seu smartphone no MIUI pelo aplicativo <strong>Arquivos</strong> :)</p>

                                <p>Ele organiza os arquivos automaticamente por data e tipo e também permite ver de qual aplicativo vieram e onde estão armazenados no smartphone.</p>

                                <p>Vamos explorar parte por parte desse app.</p>

                                <p>Na primeira tela, podem ser vistas as transferências de vídeos, músicas, imagens e documentos recentes, organizados por data. Assim, fica fácil encontrar os últimos arquivos recebidos.</p>

                                <p>Na parte superior, o aplicativo deixa todos os arquivos organizados por tipo: Vídeos, Documentos, Imagens, Músicas, Compactados, etc.</p>

                                <p>Abaixo disso, fica uma parte chamada de <strong>Telefone</strong>. Nela, você acessa diretamente as pastas do smartphone, como é feito ao conectá-lo no computador.</p>

                                <p>Outra seção é a de <strong>Apps</strong>, que organiza os arquivos recebidos por cada aplicativo. Por exemplo, dá para ver ali todos os vídeos, fotos e documentos que chegaram por WhatsApp, Telegram, Messenger, Download, etc.</p>

                                <p>Na parte inferior, na barra laranja, há dois ícones menores: <strong>Limpeza</strong> e <strong>FTP</strong>. </p>

                                <p>Em <strong>Limpeza</strong>, o aplicativo automaticamente encontra arquivos que podem ser excluídos do sistema e liberar espaço.</p>

                                <p>Em <strong>FTP</strong>, você pode criar um servidor pelo Wi-Fi para acessar as pastas do smartphone diretamente do computador, utilizando um navegador. É necessário que os dispositivos estejam conectados na mesma rede.
                                Então, toque em <strong>Iniciar servidor</strong> e digite na barra de endereços do navegador o endereço mostrado no celular.</p>

                                <p>Para parar de compartilhar, é só tocar em <strong>Parar servidor</strong>.</p>

                                </div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                    <h4 class="name panel-title">Apps do MIUI: Segurança</h4>
                                </a>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>No aplicativo <strong>Segurança</strong>, você pode efetuar a limpeza do sistema, ver como está o uso de dados, avaliar a performance da bateria, ativar o antivírus e gerenciar permissões dos aplicativos.</p>

                                <p>Vamos explorar cada um desses itens ;)</p>

                                <p>O medidor da tela inicial faz otimizações no sistema que o deixam mais rápido e fluido. É só tocar em <strong>Verificar</strong> e aguardar a análise. Depois, toque em <strong>Otimizar</strong> e pronto!</p>

                                <ul>
                                    <li><strong>Limpeza: </strong>
O sistema automaticamente detecta arquivos que podem ser deletados para liberar espaço no smartphone. É só aguardar a análise por alguns segundos e tocar em <strong>Limpar</strong>.
Com essa etapa concluída, ele também pode realizar uma <strong>Limpeza profunda</strong>, que seleciona arquivos grandes, fotos duplicadas e outros arquivos para serem apagados.</li>
                            
                            <li><strong>Uso de dados: </strong>
Em <strong>Restringir uso de dados</strong>, dá para selecionar quais aplicativos podem acessar a internet por meio do 4G.
Em <strong>Estatísticas de uso</strong> você vê quais aplicativos mais usam a internet móvel.
Em <strong>Definir limite de dados</strong>, é possível escolher a quantidade limite de dados a serem utilizados e definir quando receberá o aviso de que o fim (da franquia de dados) está próximo. Assim, pode evitar que sua internet seja cortada ou que você pague a mais no fim do mês.</li>
                            <li><strong>Lista de bloqueio: </strong>
Nessa parte, ficam registrados os números bloqueados para SMS e chamadas. Você consegue ver todas as vezes em que eles forem bloqueados e gerenciar a lista, tirar números da lista e acertar as regras do bloqueio.</li>
                            <li><strong>Bateria: </strong>
Gerencie o uso da bateria pelo smartphone e veja o quanto ainda resta da carga.
Em <strong>Perfis de bateria</strong>, selecione qual o perfil de utilização você prefere ou crie os seus personalizados, escolhendo configurações que podem usar mais ou menos carga.
Em <strong>Economia de energia</strong>, escolha o que fazer quando a bateria ficar fraca. É possível programar perfis de uso para a bateria carregada ou fraca, selecionar quando eles serão alternados e ativar ou desativar o modo de Economia de energia.
Se o modo de Economia de energia estiver desativado, nada mudará nos perfis de bateria quando estiver com pouca carga. Por isso, é bom configurar um perfil que gaste menos para o caso de emergências. ;)
Em <strong>Mudança de perfil agendada</strong>, os perfis definidos são alterados de acordo com o horário escolhido.
Em <strong>Programar Início/desligamento</strong>, você pode escolher horários para o smartphone ligar e desligar. É muito útil, por exemplo, se esquecer o carregador em uma viagem.</li>
                            <li><strong>Antivírus: </strong>
Ative a proteção para manter suas informações seguras contra vírus e outras ameaças.
Tocando em <strong>Verificar</strong>, ele faz uma busca rápida por ameaças e garante que está tudo OK. :)
É uma boa fazer essa verificação com alguma frequência, só por garantia.</li>
                            <li><strong>Permissões</strong>
Em <strong>Início automático</strong>, defina quais aplicativos iniciam automaticamente. Fazer essa configuração pode ajudar no desempenho e na economia de energia.
Em <strong>Permissões</strong>, escolha a quais informações cada aplicativo terá acesso. Por exemplo:
<ul>
<li>Para mostrar os nomes das pessoas, o WhatsApp precisa ter acesso aos contatos.</li>
<li>Para colocar stickers de localização, o Snapchat precisa ter acesso ao GPS.</li>
<li>Para tirar fotos, o Instagram precisa ter acesso à câmera.</li>
</ul>
Se não souber quais permissões autorizar, não se preocupe: quando um aplicativo necessita de acesso a alguma informação que está bloqueada, o MIUI pergunta se o acesso pode ser liberado.</li>


                                </ul>


                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                    <h4 class="name panel-title">Como verificar atualizações MIUI e Android</h4>
                                </a>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Manter o sistema operacional do seu smartphone atualizado garante que ele sempre esteja com as últimas correções e melhorias. Isso faz com que a sua experiência com seu aparelho seja a melhor possível. :)</p>

                                    <p>O MIUI é o sistema operacional da Xiaomi. Ele é baseado em Android, então todos os apps que você já conhece e usa podem ser baixados no seu smartphone Xiaomi pela Google Play Store.</p>

                                    <p>O MIUI traz diversos recursos e funcionalidades exclusivos, além das opções de personalização com Temas, atualizações mensais, que trazem correções e melhorias muito mais rápido que qualquer outro sistema incorporando sugestões e críticas dos usuários.</p>

                                    <p>Para ver qual a versão do MIUI e do Android que estão no seu smartphone, vá em:</p>
                                    
                                    <ul>
                                        <li>Configurações</li>
                                        <li>Sobre o telefone</li>
                                    </ul>
                                    
                                    <p>Para verificar se há atualizações pendentes, vá em:</p>

                                    <ul>
                                        <li>Configurações</li>
                                        <li>Sobre o telefone</li>
                                        <li>Atualizações do sistema</li>
                                        <li>E aguarde: ele deve buscar uma nova versão automaticamente, se ela estiver disponível. Se isso não ocorrer, toque em <strong>Verificar atualizações</strong>.</li>
                                    </ul>   

                                    <p>Outro caminho possível é:</p>
                                    <ul>
                                        <li>Pasta Ferramentas</li>
                                        <li>Atualizações</li>    
                                        <li>Verificar atualizações</li>
                                    </ul>

                                    <p>Se tiver atualizações disponíveis, é só seguir o passo a passo para fazer a instalação.</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                                    <h4 class="name panel-title">Como fazer backup local</h4>
                                </a>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Fazer backup do seu smartphone regularmente garante que, no caso de um imprevisto, você não perderá seus arquivos mais importantes.</p>

                                    <p>Há diversas maneiras de fazer backup pelo MIUI. Uma delas é o backup local, que cria um arquivo compactado e que pode ser tirado do smartphone. Assim, você pode guardar uma cópia no computador, por exemplo, e garantir que esses arquivos estão em segurança.</p>

                                    <p>Para fazer um backup local, vá em:</p>

                                    <ul>
                                        <li><strong>Configurações</strong></li>
                                        <li><strong>Configurações adicionais</strong></li>
                                        <li><strong>Fazer backup e redefinir</strong></li>
                                        <li>E toque em <strong>Backups locais</strong></li>
                                    </ul>
                                    
                                    <p>Nessa tela, ficam listados os backups locais que já foram feitos.</p>
                                    <p>Toque em Backup para selecionar o que será incluído na cópia de segurança e, depois, Iniciar Backup.</p>
                                    <p>Você também pode programar backups, o que define que os backups serão feitos com regularidade. Assim, caso se esqueça de fazer o backup, seu smartphone não esquecerá. :)</p>

                                    <p>No menu <strong>Backups locais</strong>, marque a opção <strong>Backup automático</strong> e configure o dia, horário e itens que serão incluídos.</p>

                                    <p>Ao conectar o smartphone no computador, você pode acessar os arquivos de backups locais na pasta <strong>MIUI > backup > AllBackup.</strong></p>



                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                                    <h4 class="name panel-title">Como restaurar ou formatar aparelho</h4>
                                </a>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Fazer a restauração do aparelho pode auxiliar no desempenho e melhorar a performance, além de voltá-lo para a configuração de fábrica. Ou seja, permite que você comece do zero a instalação de aplicativos e a fazer as configurações.</p>

                                    <p>Para fazer a restauração do aparelho, ou seja, formatá-lo, siga estes passos:</p>

                                    <ul>
                                        <li><strong>Configurações</strong></li>
                                        <li><strong>Configurações adicionais</strong></li>
                                        <li><strong>Fazer backup e redefinir</strong></li>
                                        <li><strong>Configuração original</strong></li>
                                    </ul> 

                                    <p>Nessa tela, você pode optar por apagar todos os dados do telefone ou apagar somente os dados pessoais, isto é, informações de login, configurações do sistema e dados de aplicativos.</p>

                                    <p>Lembre-se que essa ação não pode ser desfeita, ou seja, os arquivos deletados não poderão ser recuperados. Portanto, se optar por apagar tudo, faça um backup antes para não perder seus arquivos mais importantes. :)</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                                    <h4 class="name panel-title">Modo Simplificado</h4>
                                </a>
                            </div>
                            <div id="collapse12" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>O MIUI tem uma interface muito amigável e intuitiva, mas pode ficar ainda mais simples de mexer: basta ativar o Modo Simplificado, que altera ícones e tamanho da fonte para melhorar a visualização e facilitar o uso, especialmente para quem não é familiarizado com smartphones.</p>

                                    <p>Para ativá-lo, vá em:</p>

                                    <ul>
                                        <li><strong>Configurações</strong></li>
                                        <li><strong>Modo Simplificado</strong></li>
                                    </ul>

                                    <p>Depois de ativar essa opção, o smartphone irá reiniciar. E pronto :)</p>

                                    <p>No Modo Simplificado, a Previsão do Tempo, Galeria, Câmera, Telefone e Mensagens ficam na tela principal. Deslizando a tela para a direita, você pode selecionar os principais contatos para ficarem em destaque e terem acesso rápido. E, deslizando para a esquerda, ficam Contatos, Música, Calculadora, Ajuda, Configurações e a gaveta de aplicativos. É só tocaar nela para ver todos os que estão instalados.</p>

                                    <p>Para desativar o Modo Simplificado e voltar para a interface “tradicional” do MIUI, vá em:</p>

                                    <ul>
                                        <li><strong>Configurações</strong></li>
                                        <li><strong>Configs. do Sistema</strong></li>
                                        <li><strong>Modo Simplificado</strong></li>
                                    </ul>   

                                    <p>E desmarque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                                    <h4 class="name panel-title">Modo Criança</h4>
                                </a>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Se você tem filhos que brincam com seu smartphone, é possível que queira restringir o acesso deles a certos aplicativos. Pensando nisso, o MIUI tem o Modo Criança, no qual o dono do smartphone escolhe os apps que ficarão liberados quando ele estiver ativado.</p>

                                    <p>Apesar do nome, o Modo Criança também é útil para manter curiosos longe dos seus arquivos. ;)</p>

                                    <p></p>Para ativar o Modo Criança e definir a senha para desbloquear o uso de todos os aplicativos, vá em:</p>

                                    <ul>
                                        <li><strong>Configurações</strong></li>
                                        <li>E ative o <strong>Modo Criança.</strong></li>
                                    </ul>

                                    <p>Nessa mesma tela, escolha os aplicativos que serão autorizados no Modo Criança.</p>

                                    <p>Depois, toque no botão Início para sair desse menu. Repare que somente os aplicativos autorizados estarão disponíveis.</p>

                                    <p>Para Desativar o Modo Criança:</p>
                                    <u>
                                        <li>Toque em <strong>Sair</strong></li>
                                        <li>Coloque a senha escolhida</li>
                                        <li>E desative o <strong>Modo Criança.</strong></li>
                                    </u>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse14">
                                    <h4 class="name panel-title">Arquivos ocultos</h4>
                                </a>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>No MIUI, você pode ocultar pastas, álbuns, fotos e mensagens para proteger suas informações. Vamos por partes para explorar tudo que pode ser feito para ocultar seus arquivos.</p>

                                    <p>Criando pastas ocultas</p>

                                    <ul>
                                        <li>Abra o aplicativo <strong>Arquivos</strong></li>
                                        <li>Deslize a tela para baixo, até que a pasta oculta seja criada.</li>
                                        <li>Toque o menu superior direito e em <strong>Adicionar arquivo</strong> para escolher o que será inserido na pasta.</li>
                                        <li>Nesse menu, também é possível criar pastas para organizar os arquivos e arrumar a ordem de exibição.</li>
                                    </ul>
                                    
                                    <p>Repetindo esse procedimento, você tem acesso a todas as pastas ocultas do sistema.</p> 

                                    <p>Criando álbuns ocultos</p>

                                    <ul>
                                        <li>Abra a <strong>Galeria</strong></li>
                                        <li>Vá em <strong>Local</strong></li>
                                        <li>Selecione as pastas que deseja ocultar</li>
                                        <li>Toque em <strong>Ocultar</strong></li>
                                        <li>E pronto!</li>
                                    </ul>

                                    <p>Para ver os álbuns, toque e segure o botão <strong>Menu</strong> para abrir as configurações e marque <strong>Mostrar álbuns ocultos</strong>. Agora, você pode selecionar os álbuns ocultos e tocar em <strong>Mostrar</strong> para que eles voltem a ficar visíveis no seu celular.</p>

                                    <p>Mais uma maneira de ocultar fotos:</p>

                                    <ul>
                                        <li>Abra a Galeria</li>
                                        <li>Selecione as fotos que quer adicionar ao álbum oculto</li>
                                        <li>E toque em Adicionar ao álbum oculto. É necessário ativar a sincronização com a Mi Cloud para utilizar esse recurso.</li>
                                    </ul>
                                    
                                    <p>As fotos ocultas podem ser acessadas na Mi Cloud, pelo site <a href="i.mi.com" target="_blank"></a>i.mi.com.</p>

<p>Também é possível acessar essa pasta deslizando o dedo para baixo na aba Mi Cloud da Galeria. No primeiro acesso, será necessário criar um padrão de segurança. Caso você esqueça o padrão que criou, continue tentando desbloquear a tela. Quando atingir o limite de tentativas, será possível recuperar o segredo. Basta entrar com sua senha da Mi Cloud e seguir as instruções.</p>

<p><strong>Ocultando mensagens</strong></p>
<p>Pelo MIUI, você pode criar conversas secretas por SMS:<p>

<ul>
    <li>Abra o aplicativo de <storng>Mensagens</strong></li>
    <li>Deslize a tela para baixo até abrir Mensagem privada</li>
    <li>Vá em <strong>Configurações de mensagens privadas</strong></li>
    <li>Adicionar contato privado</li>
    <li>E adicione um número, digitando ou selecionando entre os Contatos. Todas as conversas com esse número, agora, serão secretas.</li>
</ul>

<p>Para acessar essas conversas e enviar novas mensagens secretas, é só deslizar o dedo em Mensagens para acessar as conversas ocultas.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse15">
                                    <h4 class="name panel-title">Apps do MIUI: Contatos</h4>
                                </a>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Mudou de celular e não consegue acessar seus contatos? Ou precisa importar ou exportar os contatos de outra conta para seu smartphone? Veja como conseguir isso fazendo as configurações necessárias no aplicativo Contatos:</p>

                                    <ul>
                                        <li>Abra o aplicativo <strong>Contatos</strong></li>
                                        <li>Mantenha pressionado o botão Menu para abrir as Configurações</li>
                                    </ul>


                                    <p>Nessa tela, você terá as seguintes opções:</p>

                                    <ul>
                                        <li><strong>Importar/Exportar contatos:</strong>
 para colocar os contatos de algum SIM ou do microSD no seu smartphone, ou passar os contatos do smartphone para um dos SIM ou para o microSD. Também dá para passar contatos do Google para a sua Conta Mi nessa tela.</li>
                                        <li><strong>Preferências de exibição:</strong>
 selecione como os Contatos serão organizados e quais serão exibidos. Verifique se Mostrar contatos do SIM está ativado, caso esteja sentindo falta de algum número na agenda.</li>
                                        <li><strong>Organizar contatos:</strong>
 o MIUI automaticamente organiza os contatos. Dá para Mesclar contatos duplicados, Excluir vários ao mesmo tempo, Recriar o índice para melhorar a pesquisa e ver quais estão armazenados em cada SIM.</li>
                                        <li><strong>Ver espaço livre:</strong>
 veja quantos contatos ainda cabem em cada SIM.</li>
                                        <li><strong>Recuperar contatos:</strong>
 acesse a Mi Cloud para ver os contatos sincronizados com sua conta e recuperá-los.</li>
                                    </ul>
<p>E pronto :)</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse16">
                                    <h4 class="name panel-title">Como usar a internet em roaming durante viagens</h4>
                                </a>
                            </div>
                            <div id="collapse16" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Para habilitar dados móveis em roaming e utilizar a internet em viagens, vá em:</p>

                                    <ul>
                                        <li><strong>Configurações</strong></li>
                                        <li><strong>Cartões SIM & redes móveis</strong></li>
                                        <li><strong>Roaming internacional</strong></li>
                                        <li>E ative<strong> Roaming internacional de dados.</strong></li>
                                    </ul>

                                    <p>Depois, escolha quais aplicativos podem acessar os dados em roaming. Isso evita que apps utilizem a internet móvel sem você perceber e a conta acabe ficando mais alta do que o esperado.</p>

                                    <p>Para isso,</p>

                                    <ul>
                                        <li>Selecione <strong>Permitir que exceções usem os dados móveis</strong></li>
                                        <li><strong>Gerenciar excessões</strong></li>
                                        <li>Escolha os apps.</li>
                                    </ul>

                                    <p>Você também pode estipular um limite para o uso de dados em roaming - mais uma maneira de controlar o gasto no exterior e economizar na conta:</p>

                                    <ul>
                                        <li>Ative <strong>Limite de dados diário em roaming</strong></li>
                                        <li>Escolha qual o limite</li>
                                        <li>E defina qual a ação ao atingir o limite: mostrar um aviso ou desligar os dados móveis.</li>
                                    </ul>
                                    <p>Atenção: é sempre bom pesquisar antes os valores e condições do roaming internacional da sua operadora antes de viajar.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse17">
                                    <h4 class="name panel-title">Como compartilhar 4G com senha</h4>
                                </a>
                            </div>
                            <div id="collapse17" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>O MIUI permite que você compartilhe a conexão 4G com outros dispositivos e atribua um nome para a rede e uma senha para ela, de modo que a conexão só pode ser utilizada por pessoas autorizadas.</p>

                                    <p>Para fazer isso, vá em:</p>

                                    <ul>
                                        <li>Vá em <strong>Configurações</strong></li>
                                        <li>Em Rede, toque em <strong>Mais</strong>...</li>
                                        <li>...em <strong>Compartilhamento de internet</strong></li>
                                    </ul>

                                    <p>Nessa tela, você pode escolher um nome para a rede no campo SSID e escolher o tipo de segurança e a senha da rede. Por padrão, o protocolo de segurança é WPA2 PSK</p>
                                    <p>Para ativar o Hotspot 4G e compartilhar a rede de dados, há dois caminhos:</p>

                                    <ol>
                                        <li>Na tela anterior à de definir senha, marque <strong>Hotspot Wi-Fi</strong></li>
                                        <p>Ou</p>
                                        <li>Abra a aba de notificações e toque em <strong>Hotspot</strong>. Para desativar, é só tocar novamente.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse18">
                                    <h4 class="name panel-title">Apps do MIUI: Música</h4>
                                </a>
                            </div>
                            <div id="collapse18" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>No aplicativo Música do MIUI, você pode ouvir as músicas armazenadas no seu smartphone e outros arquivos de áudio que estejam nele.</p>
                                    <p>O primeiro passo é fazer o login com a Conta Mi. Depois disso, você pode mexer nas configurações do aplicativo e gerenciar suas preferências. É só tocar no seu nome para fazer isso.</p>

                                    <p>Nas configurações, é possível:</p>

                                    <li><strong>Definir um timer</strong>para parar de tocar música, que pode ser entre um minuto e uma hora e meia.</li>
                                    <li><strong>Criar filtros</strong>, para que todos os arquivos de áudio não apareçam na sua lista de músicas. Fazendo isso, você consegue, por exemplo, evitar que os áudios do WhatsApp sejam reproduzidos pelo app. Os filtros podem ser por tamanho, duração ou por pasta.</li>

                                    <p>Além das Configurações, a tela principal do aplicativo tem outras três partes:</p>

                                    <ul>
                                        <li>Em <Offline> ficam todas as músicas do smartphone, que podem ser acessadas também separadas por Artista, Álbum ou Pasta.</li>
                                        <li> Em <strong>Favoritos</strong> ficam suas músicas marcadas como favoritas.Isso pode ser feito diretamente no player.</li>
                                        <li>E, em <strong>Playlists</strong> ficam as listas criadas por você. Caso não haja listas ainda, toque em Criar playlists para fazer uma. É só dar um nome e tocar na playlist e em Adicionar Músicas para escolher as que farão parte.</li>
                                    </ul>

                                    <p>Quando uma música estiver tocando, você dispõe de diversas funções diretamente no player.</p>

                                    <p>No topo, ao lado do nome da música, fica o botão para inclui-la na lista de Favoritos. No centro, você vê a imagem do álbum, e abaixo dela os botões para enviar a faixa, repetir/repetir faixa/ordem aleatória, transmitir para outro dispositivo (como uma caixa de som) e mais opções.</p>
                                    <p>Tocando em opções, é possível configurar os fones de ouvido, excluir a faixa, defini-la como toque do telefone, editar as informações como nome da faixa, artista e álbum, e ligar o timer de desativação.</p>
                                    <p>Na parte inferior do player, ficam os botões de controle, para voltar, pausar ou avançar música, e a barra de progresso.</p>
                                    <p>Deslizando para a esquerda, ficam as outras músicas da playlist e, para a direita, fica a letra da música, se estiver disponível.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse19">
                                    <h4 class="name panel-title">Garantia de produtos</h4>
                                </a>
                            </div>
                            <div id="collapse19" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>A Xiaomi garante a qualidade e adequação de todos os produtos Xiaomi adquiridos no Brasil, desde que observadas as condições normais de utilização, nos termos e prazos abaixo especificados.</p>

                                    <p>1. Os prazos da presente garantia contratual de adequação dos produtos Xiaomi variam de acordo com o produto, conforme descrito abaixo:</p>

                                    <p>-Telefone Celular: Doze (12) meses</p>
                                    <p>-Carregador: Seis (6) meses</p>
                                    <p>-Bateria: Seis (6) meses</p>
                                    <p>-Fone de Ouvido: Seis (6) meses</p>
                                    <p>-Cabo de Dados: Seis (6) meses</p>
                                    <p>-Banco de bateria: Seis (6) meses</p>
                                    <p>-Monitor de Atividades: Seis (6) meses</p>
                                    <p>-Capas e Películas: Seis (6) meses</p>

                                    <p>2. Enquanto vigorar o Prazo de Garantia dos produtos, a Xiaomi garante uma cobertura contra vícios de fabricação nos produtos Xiaomi adquiridos no Brasil.</p>

                                    <p>3. IMPORTANTE: O PRAZO DE GARANTIA CONTRATUAL OFERECIDO PELA XIAOMI JÁ INCLUI O PRAZO DE GARANTIA LEGAL PREVISTO EM LEI (90 dias) E SE INICIA NA DATA DE COMPRA CONSTANTE NA RESPECTIVA NOTA FISCAL DE COMPRA</p>

                                    <p>4. Durante o Prazo de Garantia, caso o produto apresente vício de fabricação e não tenham sido ultrapassados 30 (trinta) dias contatos do recebimento do produto para reparos, a Xiaomi, a seu exclusivo critério, poderá: (i) reparar o produto usando componentes de reposição originais adequados e novos, ou que mantenham as especificações técnicas do fabricante; (ii) substituir o produto por um outro da mesma espécie, em perfeitas condições de uso; ou (iii) reembolsar ao Cliente o valor do produto, de acordo com o preço de compra constante na nota fiscal.</p>

                                    <p>5. Nenhum reparo ou substituição renovará ou estenderá o Prazo de Garantia. Os componentes originais ou substitutos, ou os produtos substitutos, serão garantidos até o final do Prazo de Garantia original ou por noventa (90) dias a partir da data de reparo ou substituição, o que ocorrer por último. Todos os componentes ou produtos substituídos em razão da realização de reparo se tornarão propriedade da Xiaomi.</p>

                                    <h5>LIMITAÇÕES DO ATENDIMENTO EM GARANTIA </h5>

                                    <p>As condições estabelecidas nesta Garantia somente são aplicáveis a produtos originais da Xiaomi, adquiridos pelo Cliente no Brasil, e os respectivos acessórios contidos na embalagem original do produto, sendo que produtos adquiridos em outras regiões estarão sujeitos às condições e termos do país de compra. Esta garantia não será válida fora do Brasil.</p>

                                    <p>Esta Garantia não é aplicável a:</p>

                                    <ol type="a">
                                        <li>Peças consumíveis ou que apresentem desgaste natural pelo uso, tal como capacidade de carregamento reduzida da bateria devido ao ciclo de vida útil e revestimentos de proteção que se desgastam com o tempo, a não ser que o dano tenha ocorrido devido a um vício de material ou de fabricação;</li>

                                        <li>Danos estéticos, tais como arranhões, amassados em peças plásticas e demais problemas causados por desgaste natural do produto;</li>
                                        <li>Danos causados por acidente, utilização indevida dos produtos e seus componentes, manuseio negligente ou que não esteja em conformidade com o manual do usuário, e demais diretrizes publicadas pela Xiaomi; </li>
                                        <li>Produtos que tenham tido contato com líquidos e umidade, condições ambientais ou térmicas extremas, incêndio ou outras causas de origem externa, assim como rápidas mudanças dessas condições, como, por exemplo, corrosão, oxidação, derramamento de líquidos ou alimentos ou alterações provocadas por produtos químicos; </li>
                                        <li>Danos causados por motivos de força maior, sobretensão, manipulação indevida, aplicação errada de acessórios ou outras causas não relacionadas a vícios do produto; </li>
                                        <li>Danos causados por serviços (incluindo upgrades, expansões e reparos) prestados por terceiros que não seja um representante autorizado da Xiaomi, que cause ou contribua para qualquer defeito ou dano;</li>
                                        <li>Produtos que apresentem alterações ou tenham sido modificados ou adulterados de modo a alterar a sua funcionalidade ou a sua capacidade, sem prévia e expressa permissão da Xiaomi;</li>
                                        <li>Produtos com informações imprecisas, divergentes ou alteradas sobre o número de série IMEI do produto; </li>
                                        <li>Produtos usados para fins comerciais, inclusive, mas não se limitando, aluguel ou arrendamento, ou para fins que não sejam a utilização por consumidor final; </li>
                                        <li>Produtos danificados por programas, dados, vírus ou arquivos instalados no produto, bem como por quaisquer softwares, configurações, conteúdos, dados ou links de terceiros instalados ou baixados no produto, a qualquer momento; </li>
                                        <li>Danos causados por dispositivo externo ou acessório não original da Xiaomi;</li>
                                        <li>Produtos cujo respectivo documento de compra original (Nota Fiscal) apresente rasuras, modificações ou quaisquer irregularidades.</li>
                                    </ol>

                                    <p>Os softwares distribuídos pela Xiaomi, incluindo, mas não se limitando, ao software do sistema, não estão cobertos por esta Garantia.</p>

                                    <p>Caso o Cliente se recuse a entregar o produto à Xiaomi para verificação e eventuais reparos, subentende-se que não existe problema a ser corrigido ou condições para que a Xiaomi proceda com o atendimento.</p>

                                    <p>Caso o dano apresentado no produto ou no componente não seja coberto por esta Garantia, por qualquer motivo, a Xiaomi poderá cobrar pelo reparo ou pela substituição do produto ou do componente, bem como cobrar uma taxa de mão de obra, desde que os valores relativos a peças e serviços tenham sido prévia e expressamente aprovados pelo Cliente.</p>

                                    <h5>OUTRAS INFORMAÇÕES</h5>

                                    <p>Esta Garantia e as condições descritas neste termo são exclusivas e substituem outras garantias, reparações e condições, sejam verbais, escritas ou implícitas e tem como objetivo conceder aos Clientes direitos específicos e, conforme o caso, adicionais nos limites permitidos por lei.</p>

                                    <p>A presente Garantia não limita os direitos legais do Cliente, de acordo com as disposições aplicáveis para o produto. Em caso de qualquer conflito entre os termos e condições aqui apresentados, e os termos e condições incluídos no pacote de vendas, os termos e condições do pacote de vendas devem prevalecer.</p>

                                    <p>A Xiaomi reserva-se ao direito de alterar os critérios de suporte em garantia do produto, sendo que eventuais alterações serão comunicadas ao Cliente, respeitando a legislação vigente no país.</p>

                                    <p>Se qualquer disposição desta Garantia for considerada ilegal ou inaplicável, a legalidade ou aplicabilidade das disposições restantes não serão afetadas ou prejudicadas. Esta garantia é regida e interpretada de acordo com as leis do Brasil.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse20">
                                    <h4 class="name panel-title">Suporte técnico da MIUI</h4>
                                </a>
                            </div>
                            <div id="collapse20" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>O Cliente poderá obter instruções específicas sobre o serviço de garantia Xiaomi para seu produto através do Serviço de Atendimento ao Cliente, conforme informações de contato abaixo:</p>

                                    <ul>
                                        <li>Chat: <a href="#"></a>Atendimento - Chat</li>
                                        <li>Atendimento Telefônico: 4003-2953</li>
                                    </ul>

                                    <p>Suporte remoto e recursos de ajuda online poderão ser disponibilizados pela Xiaomi, oferecendo uma maior comodidade e a possibilidade da resolução de problemas no produto sem a necessidade do envio do produto à Xiaomi. Contatos por telefone poderão ser cobrados dependendo da localidade do Cliente.</p>

                                    <p>Caso o vício apresentado pelo produto possa ser resolvido por meio do suporte remoto do Serviço de Atendimento ao Cliente, o cliente deverá seguir as instruções que lhe forem passadas pelo atendente, a fim de que sejam tentadas todas as formas para resolução do vício sem a necessidade de envio do produto para a Xiaomi. No entanto, se mesmo após a adoção das instruções mencionadas acima seja necessário o envio do produto à Xiaomi para verificações e eventual resolução do vício, o Cliente deverá proceder conforme instruções apresentadas pelo Serviço de Atendimento ao Cliente.</p>

                                    <p>Antes de enviar o produto para o serviço de reparo da Xiaomi, o Cliente deverá (i) fazer uma cópia (backup) de todos os conteúdos, software ou outros materiais armazenados em seu produto, pois, é possível que todo o conteúdo armazenado no produto seja apagado ou perdido durante a execução dos serviços de reparo; e (ii) excluir do produto todas as informações pessoais ou confidenciais, inclusive fotografias.</p>

                                    <p>O Cliente deverá proceder conforme instruções fornecidas pela Xiaomi, entregando o produto supostamente viciado em sua embalagem original ou em uma similar (desde que ofereça o mesmo nível de proteção), no local indicado para entrega, juntamente com uma cópia do documento fiscal de compra (Nota Fiscal) emitido em nome do beneficiário desta Garantia, atestando que a sua solicitação está sendo feita dentro do Prazo de Garantia. Adicionalmente, o Cliente deverá responder às perguntas formuladas pela Xiaomi para registro de controle e auxílio no diagnóstico de potenciais vícios no produto.</p>

                                    <p>Mediante a solicitação de atendimento, a Xiaomi informará os números de registro e controle da ordem de serviço, autorizações e material de embalagem, se aplicável, para que o Cliente possa enviar o produto de acordo com as instruções fornecidas, sem qualquer custo, desde que estas instruções sejam seguidas.</p>

                                    <p>A entrega do produto reparado ou substituído ao Cliente será realizada conforme instruções fornecidas pela Xiaomi, observando as informações de registro e controle da ordem de serviço. Devido à atualização do software e eventual troca de partes e peças, aplicativos de terceiros instalados no produto poderão não ser compatíveis ou não funcionar com o produto novo ou reparado. O Cliente será responsável pela reinstalação de todos os outros programas de software, dados e informações.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse21">
                                    <h4 class="name panel-title">Informações sobre a compra</h4>
                                </a>
                            </div>
                            <div id="collapse21" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Para consultar informações sobre a compra, como prazo de entrega e código da compra, entre em contato com o Serviço de Atendimento ao Cliente, conforme informações de contato abaixo:</p>

                                    <ul>
                                        <li>Chat: <a href="#"></a>Atendimento - Chat</li>
                                        <li>Atendimento Telefônico: 4003-2953</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse22">
                                    <h4 class="name panel-title">Reparo fora de garantia</h4>
                                </a>
                            </div>
                            <div id="collapse22" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Caso o dano apresentado no produto ou no componente não seja coberto por esta Garantia, por qualquer motivo: após o término da garantia ou quando tiver ocorrido dano não coberto pela garantia (dentre os itens descritos no item Garantia), a Xiaomi poderá cobrar pelo reparo ou pela substituição do produto ou do componente, bem como cobrar uma taxa de mão de obra, desde que os valores relativos a peças e serviços tenham sido prévia e expressamente aprovados pelo Cliente.</p>

                                    <p>O cliente deverá entrar em contato com o Suporte Técnico - SAC (Chat online: http://br.mi.com/chat ou Atendimento Telefônico: 4003-2953) e solicitar um conserto fora da garantia. Será informado o valor de reparo e, após o acordo do cliente, será gerado um boleto bancário. Após a realização do pagamento do boleto, o cliente deverá enviar o produto para a Central de Reparos da Xiaomi via Correios utilizando a autorização de postagem recebida pré-paga (cujo custo já está somado no valor pago via boleto) que deve ser postado numa Agência própria dos Correios. O produto será recebido, consertado e devolvido no endereço informado pelo cliente.</p>

                                    <p>Antes de enviar o produto para o serviço de reparo da Xiaomi, o Cliente deverá (i) fazer uma cópia (backup) de todos os conteúdos, software ou outros materiais armazenados em seu produto, pois, é possível que todo o conteúdo armazenado no produto seja apagado ou perdido durante a execução dos serviços de reparo; e (ii) excluir do produto todas as informações pessoais ou confidenciais, inclusive fotografias.</p>

                                    <p>O Cliente deverá proceder conforme instruções fornecidas pela Xiaomi, entregando o produto supostamente viciado em sua embalagem original ou em uma similar (desde que ofereça o mesmo nível de proteção), no local indicado para entrega, juntamente com uma cópia do documento fiscal de compra (Nota Fiscal) emitido em nome do beneficiário desta Garantia, atestando que a sua solicitação está sendo feita dentro do Prazo de Garantia. Adicionalmente, o Cliente deverá responder às perguntas formuladas pela Xiaomi para registro de controle e auxílio no diagnóstico de potenciais vícios no produto.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse23">
                                    <h4 class="name panel-title">Suporte técnico para MIUI</h4>
                                </a>
                            </div>
                            <div id="collapse23" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>O Cliente poderá obter instruções específicas sobre o serviço de garantia Xiaomi para seu produto através do Serviço de Atendimento ao Cliente, conforme informações de contato abaixo:</p>


                                    <ul>
                                        <li><a href="#">Chat</a></li>
                                        <li>Atendimento Telefônico: 4003-2953</li>
                                    </ul>

                                    <p>Suporte remoto e recursos de ajuda online poderão ser disponibilizados pela Xiaomi, oferecendo uma maior comodidade e a possibilidade da resolução de problemas no produto sem a necessidade do envio do produto à Xiaomi. Contatos por telefone poderão ser cobrados dependendo da localidade do Cliente.</p>

                                    <p>Caso o vício apresentado pelo produto possa ser resolvido por meio do suporte remoto do Serviço de Atendimento ao Cliente, o cliente deverá seguir as instruções que lhe forem passadas pelo atendente, a fim de que sejam tentadas todas as formas para resolução do vício sem a necessidade de envio do produto para a Xiaomi. No entanto, se mesmo após a adoção das instruções mencionadas acima seja necessário o envio do produto à Xiaomi para verificações e eventual resolução do vício, o Cliente deverá proceder conforme instruções apresentadas pelo Serviço de Atendimento ao Cliente.</p>

                                    <p>Antes de enviar o produto para o serviço de reparo da Xiaomi, o Cliente deverá (i) fazer uma cópia (backup) de todos os conteúdos, software ou outros materiais armazenados em seu produto, pois, é possível que todo o conteúdo armazenado no produto seja apagado ou perdido durante a execução dos serviços de reparo; e (ii) excluir do produto todas as informações pessoais ou confidenciais, inclusive fotografias.</p>

                                    <p>O Cliente deverá proceder conforme instruções fornecidas pela Xiaomi, entregando o produto supostamente viciado em sua embalagem original ou em uma similar (desde que ofereça o mesmo nível de proteção), no local indicado para entrega, juntamente com uma cópia do documento fiscal de compra (Nota Fiscal) emitido em nome do beneficiário desta Garantia, atestando que a sua solicitação está sendo feita dentro do Prazo de Garantia. Adicionalmente, o Cliente deverá responder às perguntas formuladas pela Xiaomi para registro de controle e auxílio no diagnóstico de potenciais vícios no produto.</p>

                                    <p>Mediante a solicitação de atendimento, a Xiaomi informará os números de registro e controle da ordem de serviço, autorizações e material de embalagem, se aplicável, para que o Cliente possa enviar o produto de acordo com as instruções fornecidas, sem qualquer custo, desde que estas instruções sejam seguidas.</p>

                                    <p>A entrega do produto reparado ou substituído ao Cliente será realizada conforme instruções fornecidas pela Xiaomi, observando as informações de registro e controle da ordem de serviço. Devido à atualização do software e eventual troca de partes e peças, aplicativos de terceiros instalados no produto poderão não ser compatíveis ou não funcionar com o produto novo ou reparado. O Cliente será responsável pela reinstalação de todos os outros programas de software, dados e informações.</p>


                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse24">
                                    <h4 class="name panel-title">Pedidos/Lojas online (e-commerce)</h4>
                                </a>
                            </div>
                            <div id="collapse24" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Caso precise de suporte a suas compras (segunda via Danfe, NFe, entre outros) seguem os contatos das principais lojas online e seus dados de contato. Para pedidos no Mi.com, entre em contato com o SAC Xiaomi (Chat online: <a href="#">Atendimento</a> ou Atendimento Telefônico: 4003-2953).</p>


                                    <h5>Suporte Americanas</h5>
                                    <p>http://www.americanas.com.br/central-de-atendimento ou no telefone 4003-4848*.</p>

                                    <h5>Suporte Submarino</h5>
                                    <p>http://www.submarino.com.br/central-de-atendimento ou no telefone 4003-5544*.</p>

                                    <h5>Suporte Shoptime</h5>
                                    <p>http://www.shoptime.com.br/central-de-atendimento ou no telefone 4003-9898*.</p>

                                    <h5>Suporte Walmart</h5>
                                    <p>https://www.walmart.com.br/atendimento ou no telefone 3003-6000*.</p>

                                    <h5>Suporte Ponto Frio</h5>
                                    <p>http://www.pontofrio.com.br/centraldeatendimento/home.aspx ou no telefone 4003-8388*.</p>

                                    <h5>Suporte Extra</h5>
                                    <p>http://www.extra.com.br/centraldeatendimento/home.aspx ou no telefone 4003-3383*.</p>

                                    <h5>Suporte Casas Bahia</h5>
                                    <p>http://www.casasbahia.com.br/CentraldeAtendimento/atendimento.aspx ou no telefone 11 3330-8701.</p>


                                    <p style="font-size:11px;">*Ligações para o serviço 3003 ou 4003 feitas de telefone fixo têm custo de ligação local + imposto locais, conforme o Estado de origem; chamadas feitas de celulares têm custo de ligação + imposto para celulares, conforme a operadora. Essas tarifas, cobradas nas respectivas faturas, não são válidas para ligações com DDD.</p>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse25">
                                    <h4 class="name panel-title">DANFE / Nota Fiscal Mi.com</h4>
                                </a>
                            </div>
                            <div id="collapse25" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Uma segunda via da Danfe (Documento Auxiliar da Nota Fiscal Eletrônica) poderá ser obtida através de sites como o <a href="https://www.webdanfe.com.br/danfe/index.html" target="_blank">https://www.webdanfe.com.br/danfe/index.html</a> informando-se a chave de acesso (código de barras da NFe) informado no e-mail de confirmação de envio do pedido do Mi.com.</p>    

                                    <p>Caso o e-mail com a chave de acesso da NFe não esteja mais disponível ao cliente, o número poderá ser obtido entrando-se em contato com o SAC - Serviço de Atendimento ao Cliente (Chat online: <a href="#">Atendimento</a> ou Atendimento Telefônico: 4003-2953).</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse26">
                                    <h4 class="name panel-title">Histórico de compras Mi.com</h4>
                                </a>
                            </div>
                            <div id="collapse26" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Caso os e-mails de confirmação ou status dos pedidos não estejam mais disponíveis para o cliente, o mesmo poderá obter informações sobre os seus pedidos entrando em contato com o SAC - Serviço de Atendimento ao Cliente (Chat online: <a href="#">Atendimento</a> ou Atendimento Telefônico: 4003-2953).</p>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" id="accordion">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse27">
                                    <h4 class="name panel-title">SAC - Serviço de Atendimento ao Cliente</h4>
                                </a>
                            </div>
                            <div id="collapse27" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Para consultar informações sobre a compra, como prazo de entrega e código da compra, entre em contato com o Serviço de Atendimento ao Cliente, conforme informações de contato abaixo:</p>

                                    <ul>
                                        <li>Chat online: <a href="#">Chat</a></li>
                                        <li>Atendimento Telefônico: 4003-2953</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
            </div>
    </section>
    <!-- END Question Section 1 -->
   
    


    <!--SOCIAL MEDIA-->

    <section class="section" id="section5">
        <div class="container">
            <div class="row text-center">
                <h2 class="social-media">Redes sociais</h2>
                <a href="https://www.facebook.com/XiaomiBrasil" target="_blank"><i class="fa fa-facebook-square social"></i></a>
                <a href="https://www.youtube.com/channel/UCaqqPEU381EtWJWQdMLgjsA" target="_blank"><i class="fa fa-youtube-square social"></i></a>
            </div>
        </div>
    </section>
    <!--END SOCIAL MEDIA-->




    <!-- Footer -->
     <div id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li class="footer-title">PRODUTOS<li>
                        <li class="link-footer"><a href="./produtos/redmi-2.php">Redmi 2 | Redmi 2 PRO</a></li>
                        <li class="link-footer"><a href="./produtos/powerbank.php">Mi Power Bank</a></li>
                        <li class="link-footer"><a href="./produtos/miband.php">Mi Band</a></li>
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




    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/list.js"></script>
    <script src="js/list.fuzzysearch.js"></script>
    

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
            var monkeyList = new List('test-list', { 
                valueNames: ['name'], 
                plugins: [ ListFuzzySearch() ] 
            });
        </script>
</body>

</html>
