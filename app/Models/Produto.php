<?php
// Em qual pasta ele esta 

namespace App\Models;

use PDO;
USE PDOException;
use App\Core\Database;

// Mesmo nome do arquivo 
class Produto
{

    // Aqui declaramos uma função para cada operação do CRUD

    // Busca todos os usuarios no BD
    public static function buscarTodos()
    {
        // Primeiro vamos conectar no banco de dados 
        //  Precisamos Importar o PDO antes de criar a classe
        // Como vamos utilizar arquivos DATABASE, importamos ele tambem
        $pdo = Database::conectar();

        // Geraremos o script SQL de consulta 
        $sql = "SELECT * FROM produtos";

        // Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar();



            $sql = "INSERT INTO produtos (nome, quantidade, valor_unitario, categoria)";
            $sql .=   " VALUES (:nome, :quantidade, :valor_unitario, :categoria)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':quantidade', $dados['quantidade'], PDO::PARAM_INT);
            $stmt->bindParam(':valor_unitario', $dados['valor_unitario']); // DECIMAL não usa PARAM_INT
            $stmt->bindParam(':categoria', $dados['categoria'], PDO::PARAM_STR);

            $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
            exit;
        }
    }
}
