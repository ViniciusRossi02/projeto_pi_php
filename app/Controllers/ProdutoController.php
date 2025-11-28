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

    public function salvar() {
        // 1. Limpar e capturar dados do formulário
        $dados = [
            'nome'           => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'quantidade'     => filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT),
            'valor_unitario' => filter_input(INPUT_POST, 'valor_unitario', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'categoria'      => filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_FULL_SPECIAL_CHARS)
        ];
    }

}
?>