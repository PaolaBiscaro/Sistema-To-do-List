<?php
    require_once $_SERVER['DOCUMENT_ROOT']. "/helpers/Config.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/models/Plano.php";


    function index(){
        $planos = listarPlanos();
        return $planos;
    }

    function visualizar($id){
        $plano = buscarPlano($id);
        return $plano;
    }
    
?>