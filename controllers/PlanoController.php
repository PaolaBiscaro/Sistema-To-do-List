<?php
    require_once $_SERVER['DOCUMENT_ROOT']. "/helpers/Config.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/models/Plano.php";

    checarLogado();


    function index(){
        $planos = listarPlanos();
        return $planos;
    }

    function visualizar($id){
        $plano = buscarPlano($id);
        return $plano;
    }

    function cadastrar(){
        $plano = [];

        if(!empty($_POST)){
           $plano['titulo'] = $_POST['titulo'];
           $plano['valor'] = $_POST['valor'];
           $plano['descricao'] = $_POST['descricao'];

           if(cadastrarPlano($plano)){
                header('Location:/admin/planos');
                exit;
           }
        }
    }

    function editar($id){
        $plano = buscarPlano($id);

        //print_r($plano);

        if(!empty($_POST)){
            $plano['titulo'] = $_POST['titulo'];
            $plano['valor'] = $_POST['valor'];
            $plano['descricao'] = $_POST['descricao'];

            if(editarPlano($plano, $id)){
                header('Location:/admin/planos');
                exit;
            }
        }

        return $plano;
    }

    function deletar($id){

        if(deletarPlano($id)){
            header("Location:/admin/planos");
            exit;
        }
    }
    
?>