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

$router->get('/l1ex1','Aluno\ListasPhp\Controller\Lista1_Ex1Controller::exibir');
$router->post("/l1ex1-resultado", 'Aluno\ListasPhp\Controller\Lista1_Ex1Controller::exibirResultado');

$router->get('/L1Ex2','Aluno\ListasPhp\Controller\Lista1_Ex2Controller::exibir');
$router->post("/L1Ex2-resultado", 'Aluno\ListasPhp\Controller\Lista1_Ex2Controller::exibirResultado');


//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());