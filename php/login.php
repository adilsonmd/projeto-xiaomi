<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
    </head>    
    
    <body>
    <?php
        include("conectar.php");
        
        $usuario = $_POST['user'];
        $senha = $_POST['pwd'];
        
        //tabela usuario/cliente
        $busca = mysql_query("SELECT FROM cliente WHERE usuario='$usuario' AND senha='$senha'");
        
        if(mysql_affected_rows >= 1){
            session_start();
            $_SESSION['logado'] = true;
                $_SESSION['logado']["usuario"] = $usuario
                $_SESSION['logado']["senha"] = $senha;
                
            header("../index.html"); //nao pode usuar header se já deu um echo na pagina
        }
        else {
            echo ('<p>Usuário não cadastrado, <a href="../conta_mi_registrar.html">clique aqui</a> para cadastrar');
        }
    
    ?>
    </body>
</html>
