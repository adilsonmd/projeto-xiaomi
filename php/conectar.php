<?php
    $azureHost = "br-cdbr-azure-south-b.cloudapp.net";
    $azureUsuario = "bae993d0159681";
    $azureSenha = "65724557";
    
    $conecta = mysql_connect($azureHost, $azureUsuario, $azureSenha) or die ('Erro na conexão: '.mysql_error());
    $banco = mysql_select_db("bd_xiaomi", $conecta) or die ('Erro ao selecionar banco: '.mysql_error());
?>