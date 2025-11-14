
    
    <div class="container  p-3 d-flex justify-content-center align-items-center ">
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
                <?php foreach($usuarios as $u): ?>
                <tr>
                    <th scope="row"><?= $u["id_usuario"] ?></th>
                    <td><?= $u["nome"] ?></td>
                    <td><?= $u["email"] ?></td>
                    <td><?= $u["celular"] ?></td>
                    <td><?= $u["nivel_acesso"] ?></td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-info btn-sm">Ver</a>
                            <a href="#" class="btn btn-warning btn-sm text-white">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>

               
            </tbody>
        </table>
    </div>

    <div class="col-12 text-center">
        <a href="/usuarios/inserir"><button
                type="submit" class="btn btn-success">Adicionar</button></a>
    </div>





</body>

</html>