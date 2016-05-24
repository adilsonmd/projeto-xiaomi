<?php
    @session_start();
    
    if(isset($_SESSIOn)){
        //LOGADO
    }
    else {
        header("../login.html");
    }
?>