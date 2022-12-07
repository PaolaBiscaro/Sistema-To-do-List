<?php
    require_once $_SERVER['DOCUMENT_ROOT']. "/helpers/Config.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/models/Usuario.php";

    function validarLogin(){
        $login = [];

        if(!empty($_POST)){

            $login['email'] = $_POST['email'];
            $login['senha'] = $_POST['senha'];
            $usuario = consultarDadoUsuario($login['email']);

           if($usuario){
                if(password_verify($login['senha'], $usuario['senha'])){

                    $_SESSION['usuario'] = $usuario;
                
                    header('Location:/admin');
                    exit;
                }
           } 

           $_SESSION['mensagem'] = "Usuário ou Senha inválido!";

        }
    }

    function logout(){
        if(isset($_SESSION['usuario'])){
            unset($_SESSION['usuario']);
            header('Location:/login');
            exit;
        }
    }