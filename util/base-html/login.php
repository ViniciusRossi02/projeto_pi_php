<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rossi FutStore</title>
    <link rel="stylesheet" href="/projeto_pi_php/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet" />
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

    <section class="container" style="max-width: 480px; padding: 5px;">
        <div class="container p-3 mt-3 mb-3 border rounded">
            <form class="row g-3">
                <h2 style="color: #ff6a00; display: flex; justify-content: center;">Login</h2>

                <div class="col-md-12">
                    <label for="inputEmail" class="form-label" style="color: #ff6a00;">Email</label>
                    <input type="e-mail" placeholder="Digite seu e-mail" class="form-control" id="inputaEmail" name="email">
                </div>
                <div class="col-md-12">
                    <label for="inputSenha" class="form-label" style="color: #ff6a00;">Senha</label>
                    <input type="password" placeholder="Digite sua senha" class="form-control" id="inputaSenha" name="senha">
                </div>
                <div><button class="btn btn-danger mt-3  col-md-12">Entrar</button></div>
                <div><button class="btn btn-light col-md-12">Recuperar Senha</button></div>
                <div><button class="btn btn-primary col-md-12">Cadastrar</button></div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>