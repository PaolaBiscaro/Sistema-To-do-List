<?php

function conexao(){
    $host = "localhost";
    $banco = "todolist";
    $usuario = "root"; 
    $senha = ""; 

    try{

        $conn = new PDO("mysql:host=$host; dbname=$banco", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("set name utf8");

        return $conn;

    }catch(PDOException $e){

            die($e -> getMessage());
    }

}

?>