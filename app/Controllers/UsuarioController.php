<?php
namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController{

    // Busca os usuarios e chama a tela de listar
    public function listar(){
        // Chama a model e a função que busca dados e armazena na VAR
        $lista_usuarios = Usuario::buscarTodos();

        render("usuarios/lista_usuarios.php", [
            'title' => "Lista de Usuários",
            'usuarios' => $lista_usuarios 
        ]);
    }
}
?>