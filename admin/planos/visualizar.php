<?php
    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/PlanoController.php";

?>

<?php include_once CABECALHO; ?>

<main class="container">

    <div class="row">
        <div class="col-sm-9 mx-auto">

            <h3 class="text-center mt-4">Detalhes do Plano</h3>

            <table class="table table-striped mt-5">
                <tr>
                    <th width="180">Titulo</th>
                    <td>Gratuito</td>
                </tr>
                <tr>
                    <th width="180">Valor</th>
                    <td>R$0.00</td>
                </tr>
                <tr>
                    <th width="180">Titulo</th>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                </tr>
            </table>

            <div class="row">
                <div class="col-12">
                    <a href="/admin/planos/editar" class= "btn btn-primary">Editar</a>
                    <a href="/admin/planos" class=" btn btn-light">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include_once RODAPE;?>