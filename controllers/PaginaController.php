<?php
    require_once $_SERVER['DOCUMENT_ROOT']. "/helpers/Config.php";
    require_once $_SERVER['DOCUMENT_ROOT']. "/models/Pagina.php";
 

    function index(){
        $pagina = listarPagina();
        return $pagina;
    }

    function visualizar($id){
        $pagina = visualizarPagina($id);
        return $pagina;

    }
?>