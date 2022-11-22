<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Gerenciamento de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Adicionar Icone no Navegador -->
    <link rel="icon" type="image/png" href="assets/img/logo-icon.png" />


</head>

<body>
    <!-- Cabeçalho -->
    <header class="container">

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html"> 
                  <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <strong>TodoList</strong>
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarText">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre-nos.html">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="planos.html">Planos</a>
                    </li>

                </ul>

                <span class="sessao-usuario">
                    <a class="btn btn-primary" href="login.html">Entrar</a>
                </span>
              </div>
            </div>
          </nav>

       
    </header>
    <!-- Fim Cabeçalho -->

    <!-- Conteúdo -->

    <main class="container mt-5 mb-5">

        <div class="row">
            <div class="col-lg-5 mx-auto text-center">
                <img src="assets/img/logo.png" alt="todolist" width="150">
            </div>
        </div>

        <div class="row">
            <div class="col-12 mx-auto text-center mt-4 text-primary">
                <h1>Organize tudo
                    com o Sistema TodoList</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto text-center mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui blanditiis ipsa quo neque velit,
                    suscipit optio doloribus ab mollitia, impedit amet, laudantium cum ea placeat tempore excepturi.
                    Corporis, porro ullam?</p>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto text-center mt-3">
                <a href="planos.html" class="btn btn-lg btn-primary">Conheça Nossos Planos</a>
            </div>
        </div>


    </main>

    <!-- Fim Conteúdo -->

    <!-- Rodapé -->

    <footer class="container bg-light mt-5">
        <div class="row">
            <div class="col-12 p-3 text-center">
                2022 &copy; - Todos os Direitos são reservados
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <!-- Fim Rodapé -->

</body>

</html>