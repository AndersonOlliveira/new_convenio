<?php
// Define o timezone para o horário de Brasília
date_default_timezone_set('America/Sao_Paulo');
// 1. Carrega o autoload do Composer (APENAS UMA VEZ)
require_once __DIR__ . '/../vendor/autoload.php';



$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use App\Helpers\Auth; // para controller de login e criacao de token de entrada 
use Core\Controller;

// 2. Instancia o Roteador
$router = new \Bramus\Router\Router();

// 3. Define suas rotas (Web e API)
$router->get('/', function () {
    require_once '../app/Views/home.php';
});
// rota para termno de uso 
$router->get('/termo-uso', function () {
    require_once '../app/Views/termos/termoUso.php';
});

// rota para termno de privacidade 
$router->get('/termo-privacidade', function () {
    require_once '../app/Views/termos/termoPrivacty.php';
});

$router->get('/login', function () {
    require_once '../app/Views/home.php';
});
$router->get('/home', function () {
    Auth::check();
    require_once '../app/Views/painel/index.php';
});

$router->get('/auth/api', function () {
    Auth::check();
    require_once '../app/Views/painel/index.php';
});



$router->before('OPTIONS', '/api/.*', function () {
    Controller::handleCorsPreflight();
    http_response_code(204);
    exit();
});


$router->post('/api/auth', function () {
    header('Content-Type: application/json');
    $controller = new \App\Controllers\Api\LoginController();
    echo $controller->autenticar();
});


$router->post('/home', function () {


    // $controller = new \App\Controllers\Api\DadosController();
    // echo $controller->salvar();

});

$router->post('/api/push_register', function () {
    $controller = new \App\Controllers\Api\ApiHomeController();
    $controller->process_register();
});

// BUSCA DOS PLANOS
$router->get('/api/get_all_palnos', function () {
    $controller = new \App\Controllers\Api\ApiHomeController();
    $controller->process_planos();
});

// 4. Executa o roteador
$router->run();
