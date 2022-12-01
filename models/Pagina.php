<?php

require_once $_SERVER['DOCUMENT_ROOT']. "/helpers/Config.php";

require_once BANCO_DE_DADOS;

function listarPagina(){

    $db = conexao();
    $sql = "SELECT * FROM paginas";

    try{

        $stmt = $db ->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die($e -> getMessage());
    }
}

function visualizarPagina(){
    $db = conexao();
    $sql = "SELECT * FROM paginas WHERE id=:id";

    try{
        $stmt = $db -> prepare($sql);
        $stmt ->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die($e -> getMessage());
    }
}
?>