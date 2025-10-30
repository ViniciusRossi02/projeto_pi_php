<?php
// IMPORTA O AUTLOAD DO COMPOSER PARA CARREGAR AS ROTAS
require __DIR__ .'/../vendor/autoload.php';

//OBTEM A URL DO NAVEGADOR
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if ($url == "/"){
    require __DIR__ . '/../app/Views/home.php';
}
?>
