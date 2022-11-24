<?php
    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/PlanoController.php";

?>

<?php include_once CABECALHO; ?>

<main class="container">

    <div class="row">
        <div class="col-sm-9 mx-auto">
            <h3 class="text-center mt-4">Lista de Planos</h3>

           <div class="row">
                <div class="col-12 text-end">
                    <a href="/admin/planos/cadastrar" class="btn btn-primary ms-auto "><i class="fas fa-plus"></i> Adicionar</a>
                </div>
           </div> 

           <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Valor</th>
                        <th width="140">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>Gratuito</td>
                    <td>R$0.00</td>
                    <td>
                        <a href="/admin/planos/visualizar" class="btn btn-sm btn-light"><i class="fas fa-eye"></i></a>
                        <a href="/admin/planos/editar" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/admin/planos" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tbody>
               
           </table>
        </div>
    </div>

</main>

<?php include_once RODAPE;?>