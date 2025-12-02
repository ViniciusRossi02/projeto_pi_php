CREATE DATABASE IF NOT EXISTS rossi_fut_store
CHARACTER SET utf8mb4   
COLLATE utf8mb4_unicode_ci;

USE rossi_fut_store;

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    cpf VARCHAR(14), -- CPF no formato 000.000.000-00
    data_nascimento DATE, -- data no formato yyyy-mm-dd
    celular VARCHAR(20), -- celular com DDD
    rua VARCHAR(255), -- nome da rua
    numero VARCHAR(10), -- número da residência
    complemento VARCHAR(50), -- complemento (ex: apto)
    cidade VARCHAR(255), -- cidade
    cep VARCHAR(10), -- CEP
    estado VARCHAR(255), -- estado (ex: SP, RJ)
    email VARCHAR(255) NOT NULL, -- e-mail válido
    nivel_acesso ENUM('Administrador', 'Funcionario', 'Cliente') NOT NULL, -- tipo de usuário
    senha VARCHAR(255) NOT NULL, -- senha criptografada
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);

CREATE TABLE IF NOT EXISTS produtos (
    id_produto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    valor_unitario DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);

INSERT INTO produtos (nome, quantidade, valor_unitario, categoria)
VALUES ('Camisa Oficial Flamengo 2024', 50, 349.90, 'Camisas de Time');


