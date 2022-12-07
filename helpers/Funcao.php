<?php

function checarLogado(){

    if(!isset($_SESSION['usuario'])){
        header("Location: /login");
        exit;
    }
}
?>