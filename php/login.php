<?php
    include("conectar.php");
    
    $usuario = $_POST['user'];
    $senha = $_POST['pwd'];
    
    //tabela usuario/cliente
    $busca = mysql_query("SELECT FROM cliente WHERE usuario='$usuario' AND senha='$senha'");
    
    if(mysql_affected_rows == 1){
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;
        header("../Xiaomi Brasil _ Loja Oficial.htm"); //nao pode usuar header se já deu um echo na pagina
    }
    else {
        echo ('<p>Usuário não cadastrado, <a href="../cadastrar.htm">clique aqui</a> para cadastrar');
    }

?>