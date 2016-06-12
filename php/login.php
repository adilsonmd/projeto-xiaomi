<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
    </head>    
    
    <body>
    <?php
        require("conectar.php");
        
        $login = $_POST['user'];
        $senha = $_POST['pwd'];
        
        //tabela usuario/cliente
        $busca = mysql_query("SELECT FROM cliente WHERE login='$login' AND senha='$senha'");
        
        if(mysql_affected_rows >= 1){
            session_start();
            $_SESSION['logado'] = true;
                $_SESSION['logado']["login"] = $login;
                $_SESSION['logado']["senha"] = $senha;

            header("../index.php"); //nao pode usuar header se já deu um echo na pagina
        }
        else {
            echo ('<p>Usuário não cadastrado, <a href="../conta_mi_registrar.html">clique aqui</a> para cadastrar');
        }

    ?>
    </body>
</html>

<!--
            <?php
/*              if(isset($_SESSION["logado"]))
              {
                  */
                ?>
              
              <ul class="x-login">
                <li>Olá <span class="x-name"><?php /*echo $_SESSION["logado"]["usuario"]; */ ?></span> 
                  <a href=""><u>(sair)</u></a>
                </li>
                <li><a href="">Minha Conta</a></li>
              </ul>
              <?php 
              /*
                }
                else {
                    */
                  ?>
                
              <ul class="x-login">
                <li><a href="login.html"> Login / Criar Conta Mi</a> <a href="http://br.mi.com/searchMyOrder">| Meus Pedidos</a></li>
              </ul>
              <?php 
                }
              ?>
              -->