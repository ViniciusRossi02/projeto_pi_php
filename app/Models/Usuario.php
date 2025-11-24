<?php
// Em qual pasta ele esta 

namespace App\Models;

USE PDO;
USE PDOException;
USE App\Core\Database;

// Mesmo nome do arquivo 
Class Usuario{

    // Aqui declaramos uma função para cada operação do CRUD

    // Busca todos os usuarios no BD
    public static function buscarTodos(){
        // Primeiro vamos conectar no banco de dados 
        //  Precisamos Importar o PDO antes de criar a classe
        // Como vamos utilizar arquivos DATABASE, importamos ele tambem
        $pdo = Database::conectar();

        // Geraremos o script SQL de consulta 
        $sql = "SELECT * FROM usuarios";

        // Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados) {
        try{
            $pdo = Database::conectar();

            $senha_criptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios (nome, cpf, data_nascimento, celular, rua, numero, complemento, cidade, cep, estado, email, nivel_acesso, senha)";
            $sql .= " VALUES (:nome, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :cidade, :cep, :estado, :email, :nivel_acesso, :senha)";

            //  PREPARA O SQL para ser inserido no BD e limpa codigos maliciosos
            $stmt = $pdo->prepare($sql);

            // Pasa as variaveis para o SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
             $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':cpf', $dados['cpf']);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);
            $stmt->bindParam(':celular', $dados['celular']);
            $stmt->bindParam(':rua', $dados['rua']);
            $stmt->bindParam(':numero', $dados['numero']);
            $stmt->bindParam(':complemento', $dados['complemento']);
            $stmt->bindParam(':cidade', $dados['cidade']);
            $stmt->bindParam(':cep', $dados['cep']);
            $stmt->bindParam(':estado', $dados['estado']);
            $stmt->bindParam(':email', $dados['email']);
            $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso']);
            $stmt->bindParam(':senha', $senha_criptografada); // senha já criptografada

        }catch(PDOException $e){
            echo "Erro ao inserir: ". $e->getMessage();
            exit;
        }
    }
}


?>