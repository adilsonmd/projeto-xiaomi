<?php
 
$login = $_POST['login'];
$senha = $_POST['senha'];
$senhanovamente = $_POST['senha_novamente'];

include('conectar.php');

if($senha == $senhanovamente){
    $query_select = "SELECT * FROM cliente WHERE login='$login'";
    
    $select = mysql_query($query_select,$conecta) or die (mysql_error());

    $array = mysql_fetch_array($select);
    $logarray = $array['login'];
 
 
  
       
  if ($senha == "" || $senha == null  || $senhanovamente == "" || $senhanovamente == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo de senha deve ser preenchido');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html';</script>";
  }
  
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html';</script>";
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html';</script>";
                die();
 
            }else{
                $query = "INSERT INTO cliente (login,senha) VALUES ('$login','$senha')";
                $insert = mysql_query($query, $conecta);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_login.html'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='http://projetoxiaomi.azurewebsites.net/conta_mi_registrar.html'</script>";
                }
            }
        }
}
?>
