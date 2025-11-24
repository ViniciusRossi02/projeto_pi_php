<?php
// IMPORTA O AUTLOAD DO COMPOSER PARA CARREGAR AS ROTAS
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;
use App\Controllers\ProdutoController;

function render($view, $data = [])
{
    // Extrai os dados para a variavel
    extract($data);
    ob_start();
    //inclui a tela que enviamos específica 
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    //inclui layout base, que usará a variavel $content
    require __DIR__ . '/../app/Views/layouts/base.php';
}

function render_sem_template($view, $data = [])
{
    // Extrai os dados para a variavel
    extract($data);
    ob_start();
    //inclui a tela que enviamos específica 
    require __DIR__ . '/../app/Views/' . $view;
}


//OBTEM A URL DO NAVEGADOR
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Navegação geral
if ($url == "/" || $url == "/index.php") {
    render_sem_template('home.php', [
        'title' => 'Bem-vindo!',
        'lenda' => 'Sou uma lenda do php!'
    ]);
} else if ($url == "/sobre") {
    render('sobre.php', ['title' => 'Sobre a página!']);
}

//USUARIOS
else if ($url == "/usuarios") {
    // render('usuarios/lista_usuarios.php', ['title' => 'Lista de usuarios' ]);
    // Cria uma instância do Controller e chama a função listar
    $controller = new UsuarioController();
    $controller->listar();
} else if ($url == "/usuarios/inserir") {
    render('usuarios/form_usuarios.php', ['title' => 'Cadastrar Usuarios']);
}

//PRODUTOS
else if ($url == "/produtos") {
    // render('produtos/form_produtos.php', ['title' => 'Cadastro de produtos' ]);
    // Cria uma instância do Controller e chama a função listar
    $controller = new ProdutoController();
    $controller->listar();
} else if ($url == "/produtos/inserir") {
    render('produtos/form_produtos.php', ['title' => 'Cadastro de produtos']);
}
//HOME 
else if ($url == "/home") {
    render('home/home.php', ['title' => 'Home']);
} else if ($url == "/login") {
    render('login/login.php', ['title' => 'Login']);
}
