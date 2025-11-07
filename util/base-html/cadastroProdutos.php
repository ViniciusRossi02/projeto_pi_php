<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Rossi FutStore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/projeto_pi_php/public/css/style.css" />
</head>

<body>

    <header class="menu-bg;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">RossiFutStore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/listagem.php">Lista de usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/cadastroUsuario.php">Cadastro de usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projeto_pi_php/app/Views/cadastroProdutos.php">Cadastro de Produtos</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <section class="container d-flex justify-content-center mt-3" style="max-width: 960px; padding: 5px;">
        <h1>Cadastro de Produtos</h1>
    </section>

    <div class="container d-flex justify-content-center mt-5">
        <form class="row g-3" style="max-width: 960px;">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label" >Nome</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputQauntidade" class="form-label">quantidade</label>
                <input type="number" class="form-control" id="inputQauntidade">
            </div>
            <div class="col-12">
                <label for="valorUnitario" class="form-label">Valor unitario</label>
                <input type="number" class="form-control" id="valorUnitario" placeholder="Ex: 12,99">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Camiseta, shorts, meião...">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>

    </div>



</body>

</html>