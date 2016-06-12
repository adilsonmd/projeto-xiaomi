<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Processamento login</title>
        <meta charset="UTF-8">
    </head>    
    
    <body>
    <?php
        include('conectar.php');
        
        $login = $_POST['user'];
        $senha = $_POST['pwd'];
        
        //tabela usuario/cliente
        $busca = mysql_query("SELECT * FROM cliente WHERE login='$login' AND senha='$senha'");
        
        if(mysql_num_rows($busca) >= 1) {      

            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;

            header("../index.php"); //nao pode usuar header se já deu um echo na pagina
        }
        else {
            echo ('<p>Usuário não cadastrado, <a href="../conta_mi_registrar.html">clique aqui</a> para cadastrar.');
        }

    ?>
    </body>
</html>