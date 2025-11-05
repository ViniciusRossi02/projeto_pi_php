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
    <div class="container w-75 p-3 d-flex justify-content-center align-items-center h-100 ">
        <table class="table table-dark table-borderless mt-5">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Celular</th>
                    <th scope="col">nivel</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>mar@gmail.com</td>
                    <td>14987916</td>
                    <td>Administrador</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-info btn-sm">Ver</a>
                            <a href="#" class="btn btn-warning btn-sm text-white">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Ze</td>
                    <td>Zé@gmail.com</td>
                    <td>149864516</td>
                    <td>Funcionario</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-info btn-sm">Ver</a>
                            <a href="#" class="btn btn-warning btn-sm text-white">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>Vini</td>
                    <td>Vini@gmail.com</td>
                    <td>2365478</td>
                    <td>Zelador</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-info btn-sm">Ver</a>
                            <a href="#" class="btn btn-warning btn-sm text-white">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-12 text-center">
        <a href="file:///C:/Users/Vinicius%20Rossi/Desktop/TRABALHO%20BOOTSTRAP/cadastroProduto.html"><button
                type="submit" class="btn btn-success">Adicionar</button></a>
    </div>





</body>

</html>