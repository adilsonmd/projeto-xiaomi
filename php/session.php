<?php
    @session_start();
    
    if(isset($_SESSIOn)){
        //LOGADO
    }
    else {
        header("../conta_mi_login.html");
    }
?>