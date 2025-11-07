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
    <style>
        label {
            color: #ff6a00;
        }
    </style>
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
                <form class="form-inline" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <section class="container" style="max-width: 960px; padding: 5px;">
        <h1 style="color: #ff6a00;">Cadastro de Usuários</h1>
        <div class="container p-3 mt-3 mb-3 border rounded">
            <form class="row g-3">

                <div class="col-md-6">
                    <label for="inputName" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputaNome" name="nome">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email">
                </div>

                <div class="col-3">
                    <label for="inputCelular" class="form-label">Celular</label>
                    <input type="number" class="form-control" id="inputCelular" placeholder="14-999999999" name="telefone">
                </div>
                <div class="col-3">
                    <label for="inputDataNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="inputDataNascimento" name="dataNasc">
                </div>

                <div class="col-md-3">
                    <label for="inputCpf" class="form-label">CPF</label>
                    <input type="number" class="form-control" id="inputCpf" name="cpf">
                </div>
                <!-- fazer com check: procurar no github -->
                <div class="col-md-3">
                    <label for="inputNvAcesso" class="form-label">Nivel de Acesso</label>
                    <select class="form-select" id="inputNvAcesso" name="nvAcesso">
                        <option value="Selecione seu estado" selected disabled>-- Escolha -- </option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="cliente">Cliente</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inputCep" class="form-label">CEP</label>
                    <input type="number" class="form-control" id="inputCep" name="cep">
                </div>

                <div class="col-md-7">
                    <label for="inputEndereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="inputEndereco" name="endereco">
                </div>

                <div class="col-md-2">
                    <label for="inputNumero" class="form-label">Número</label>
                    <input type="number" class="form-control" id="inputNumero" name="numero">
                </div>

                <div class="col-md-4">
                    <label for="inputComplemento" class="form-label">Complemento</label>
                    <input type="text" class="form-control" id="inputComplemento" name="complemento">
                </div>

                <div class="col-md-4">
                    <label for="inputCidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="inputCidade" name="cidade">
                </div>

                <div class="col-md-4">
                    <label for="inputEstado" class="form-label">Estado</label>
                    <select class="form-select" id="inputEstado" name="estado">
                        <option value="Selecione seu estado" selected disabled>-- Escolha --</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>

                <div class="container button mt-3" style="display: flex; justify-content:space-between;">
                    <a href="/projeto_pi_php/app/Views/home.php" style="text-decoration:none;"><button class="btn btn-primary">Voltar</button></a>


                    <button type="reset" class="btn btn-secondary">Limpar</button>


                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>