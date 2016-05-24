<?php
    @session_start();
    
    if(isset($_SESSIOn)){
        //LOGADO
    }
    else {
        header("../Conta Mi - Login.htm");
    }
?>