<?php

require_once BANCO_DE_DADOS;

function listarPlanos(){

    $db = conexao();
    $sql = "SELECT * FROM planos";


    try{
        $stmt = $db ->prepare($sql);
        $stmt ->execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die($e -> getMessage());
    }
}

function buscarPlano($id){
    $db = conexao();
    $sql = "SELECT * FROM planos WHERE id=:id";

    try{
        $stmt = $db -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT); // adiciona segurança
        $stmt -> execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die($e -> getMessage());
    }
}