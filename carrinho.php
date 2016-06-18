<?php
  @session_start();
   //Cria a sessão do carrinho
   if(isset($_SESSION['login']))
   {
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
            if(!isset($_SESSION['carrinho'][$id])){
              $_SESSION['carrinho'][$id] = 1;
            }
            else {
              $_SESSION['carrinho'][$id] += 1;
            }
          }
      }
   }
   else {
     echo "<script> alert('Você deve estar logado'); window.location.href='./login.html';</script>";
   }
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
    <link href="css/carrinho.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/mi-home.css" rel="stylesheet">
    <link href="css/xiaomi-components.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <!-- Glyphcons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
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
                        <a href="./faq.php">Perguntas Frequentes</a>
                    </li>

                    <li>
                        <a href="./about.php">Sobre a Xiaomi</a>
                    </li>
                    <?php
                        if(isset($_SESSION["login"])) {
                            echo ('<li>Olá, '.$_SESSION["login"]. ' (<a href="./php/deslogar.php">Sair</a>)</li>');
                        }
                    
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     
          
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
                    <th class="col02" scope="col">Qtd.</th>
                    <th class="col04" scope="col">Valor Unitário</th>
                    <th class="col05" scope="col">Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- INICIO DA LINHA DE PRODUTO -->
                <?php 
                    if(count($_SESSION['carrinho']) == 0){
                        echo '<tr class="empty">';
                            echo '<td colspan="6" id="basketEmptyMessage">Seu carrinho está vazio';
                                echo '<a href="http://projetoxiaomi.azurewebsites.net/" class="btn btContBuy">';
                                echo  'Continuar Comprando';
                                echo '</a>';
                            echo '</td>';
                        echo '</tr>';
                    }
                    else{
                        include("./php/conectar.php");
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                          $q = "SELECT (nome, preco) FROM produto where id_produto = '$id'";
                          $result = mysql_query($q, $conecta) or die(mysql_error());
                          $linha = mysql_fetch_assoc($q);

                          $nome = $linha['nm_produto'];
                          $preco = number_format($linha['preco'], 2, ',', '.');
                          $sub = number_format($linha['preco'] * $qtd, 2, ',', '.');

                          echo '<tr>';
                            echo '<td>'.$nome.'</td>';
                            echo '<td>'.$qtd.'</td>';
                            echo '<td>'.$preco.'</td>';
                            echo '<td>'.$sub.'</td>';
                          echo '</tr>';
                        }

                    }
                ?>
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
 <div class="x-copyright">
      <p><span>Copyright ©2015  Xiaomi. Todos os direitos reservados.<br><br>XIAOMI DO BRASIL TECNOLOGIA LTDA.  CNPJ: 20.221.812/0001-74 Endereço: Rua Pequetita, 215 - São Paulo/SP - CEP 04552-060<br>
  </div>

</body>
</html>