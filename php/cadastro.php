<html>
<head>
<meta charset="UTF-8">
</head>
<?php
 
$login = $_POST['login'];
$senha = $_POST['senha'];
$senhanovamente = $_POST['senha_novamente'];

$nascimento = $_POST['dia']. '/' .$_POST['mes']. '/' .$_POST['ano'];

if(($login == "" || $login == null) || ($senha =="" || $senha==null)){
        echo"<script>alert('Preencha os campos corretamente');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html';</script>";
} elseif ($senha != $senhanovamente){
    echo"<script>alert('Senhas não coincidem');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html';</script>";
}
else {
    include('conectar.php');

    if($senha == $senhanovamente){
        $query_select = "SELECT * FROM cliente WHERE login='$login'";
        
        $select = mysql_query($query_select,$conecta) or die (mysql_error());

        $array = mysql_fetch_array($select);
        $logarray = $array['login'];

        if($logarray == $login){
    
            echo"<script>alert('Usuário já existente');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html';</script>";
            die();
            mysql_free_result($select);
    
        }else{
            $query = "INSERT INTO cliente (login,senha,nascimento) VALUES ('$login','$senha','$nascimento')";
            $insert = mysql_query($query, $conecta);
                    
            if(mysql_affected_rows($insert)>=1){
                echo"<script>alert('Usuário cadastrado com sucesso!');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_login.html'</script>";
            }else{
                echo"<script>alert('Não foi possível cadastrar esse usuário');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html'</script>";
            }
        }
    }
}

?>
</html>
