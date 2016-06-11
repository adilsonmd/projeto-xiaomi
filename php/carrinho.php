<?php 
    session_start();

    //Cria a sessão do carrinho
    if(!isset($_SESSION['carrinho']))
    {
        $_SESSION['carrinho'] = array();
    }

    //Adicionar produto
    if(isset($_GET['acao'] == 'add'))
    {
        
    }
?>