<?php


require_once __DIR__ . "/vendor/autoload.php";

//AQUI A GENTE RECUPERA O QUE O USUÁRIO DIGITOU E QUAL MÉTODO HTTP ELE UTILIZOU

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//INSTANCIAR CLASSE ROUTER

$router = new \Usuario\ListasPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get("/ola-mundo", function(){
    return "Olá Mundo!";
});

$router->get('/l1ex1','Usuario\ListasPhp\Controller\ExercicioController1::exibir');
$router->post('/l1ex1-resultado', 'Usuario\ListasPhp\Controller\ExercicioController1::exibirResultado');

$router->get('/l1ex2','Usuario\ListasPhp\Controller\ExercicioController2::exibir');
$router->post('/l1ex2-resultado', 'Usuario\ListasPhp\Controller\ExercicioController2::exibirResultado');

$router->get('/l1ex3','Usuario\ListasPhp\Controller\ExercicioController3::exibir');
$router->post('/l1ex3-resultado', 'Usuario\ListasPhp\Controller\ExercicioController3::exibirResultado');

$router->get('/l1ex4','Usuario\ListasPhp\Controller\ExercicioController4::exibir');
$router->post('/l1ex4-resultado', 'Usuario\ListasPhp\Controller\ExercicioController4::exibirResultado');

$router->get('/l1ex5','Usuario\ListasPhp\Controller\ExercicioController5::exibir');
$router->post('/l1ex5-resultado', 'Usuario\ListasPhp\Controller\ExercicioController5::exibirResultado');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());