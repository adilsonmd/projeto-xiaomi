<?php
    session_start();
    ob_start();
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
        if(($login == "" || $login == null) || ($senha == "" || $senha == null)){
            echo "<script type='text/javascript'> alert('Preencha os campos corretamente'); window.location.href='../conta_mi_login.html'; </script>";
        } else {
            $busca = mysql_query("SELECT * FROM cliente WHERE login='$login' AND senha='$senha'");
            
            if(mysql_num_rows($busca) >= 1) {      

                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;

                header('Location: ../index.php'); //nao pode usuar header se já deu um echo na pagina
            }
            else {
                echo "<script type='text/javascript'> alert('Usuário ou senha incorreto'); window.location.href='../conta_mi_login.html'; </script>";
            }
            ob_end_clean();
        }
    ?>
    </body>
</html>