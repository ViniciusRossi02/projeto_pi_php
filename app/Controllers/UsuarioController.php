<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController
{

    // Busca os usuarios e chama a tela de listar
    public function listar()
    {
        // Chama a model e a função que busca dados e armazena na VAR
        $lista_usuarios = Usuario::buscarTodos();

        render("usuarios/lista_usuarios.php", [
            'title' => "Lista de Usuários",
            'usuarios' => $lista_usuarios
        ]);
    }

    //Salvar 
    public function salvar()
    {
        // 1. Limpar os dados, remove tudo que não for texto puro.
        $dados = [
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'cpf' => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'data_nascimento' => $_POST['data_nascimento'] ?? '',
            'celular' => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'rua'  => filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'numero' => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'complemento' => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'cidade' => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'cep' => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
            'nivel_acesso' => filter_input(INPUT_POST, 'nivel_acesso', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'senha' => filter_input(INPUT_POST, 'senha', FILTER_DEFAULT)
        ];

        // Cria a  lista de erros 
        $erros = [];

        // Verifica se  o nome está vazio
        if (empty($dados['nome'])) {
            $erros = ['nome' => 'O campo NOME não pode ficar em branco!']; 
        } else if (strlen($dados['nome']) < 4){  // Verifica se o nome tem menos de 4 letrs
            $erros [] = 'O campo nome deve ter mais que 3 caracteres!';
        } 

        // Se não houver erros, salva 
        if (empty($erros)){
            $id = Usuario::salvar($dados);
            header('Location: /usuarios');
        } else {
            // Se houver erros, volta para o formulário
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            
            header('Location: /usuarios/inserir');

        }
    }
}
