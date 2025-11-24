<?php
namespace App\Controllers;

use App\Models\Produto;

class ProdutoController{

    // Busca os produtos chama a tela de listar
    public function listar(){
        // Chama a model e a função que busca dados e armazena na VAR
        $lista_produtos = Produto::buscarTodos();

        render("produtos/lista_produtos.php", [
            'title' => "Lista de Produtos",
            'produtos' => $lista_produtos 
        ]);
    }
}
?>