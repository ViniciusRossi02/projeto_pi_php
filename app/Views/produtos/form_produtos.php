    <section class="container d-flex justify-content-center mt-3" style="max-width: 960px; padding: 5px;">
        <h1>Cadastro de Produtos</h1>
    </section>

    <div class="container d-flex justify-content-center mt-5">
        <form action="/produtos/salvar"  method="POST" class="row g-3" style="max-width: 960px;">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label" >Nome</label>
                <input type="text" class="form-control" id="inputEmail4" name='nome'>
            </div>
            <div class="col-md-6">
                <label for="inputQauntidade" class="form-label">quantidade</label>
                <input type="number" class="form-control" id="inputQauntidade" name='quantidade'>
            </div>
            <div class="col-12">
                <label for="valorUnitario" class="form-label">Valor unitario</label>
                <input type="number" class="form-control" id="valorUnitario" placeholder="Ex: 12,99" name='valor_unitario'>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Camiseta, shorts, meião..." name='categoria'>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>