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

         $erros = [];

        // Verifica se  o nome está vazio
        if (empty($dados['nome'])) {
            $erros = ['nome' => 'O campo NOME não pode ficar em branco!']; 
        } else if (strlen($dados['nome']) < 4){  // Verifica se o nome tem menos de 4 letras
            $erros [] = 'O campo nome deve ter mais que 3 caracteres!';
        } 

        // Se não houver erros, salva 
        if (empty($erros)){
            $id = Produto::salvar($dados);
            header('Location: /produtos');
        } else {
            // Se houver erros, volta para o formulário
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            
            header('Location: /produtos/inserir');

        }
    }

}
?>