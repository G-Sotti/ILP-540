<?php


require_once __DIR__ . "/vendor/autoload.php";

//AQUI A GENTE RECUPERA O QUE O USUÁRIO DIGITOU E QUAL MÉTODO HTTP ELE UTILIZOU

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//INSTANCIAR CLASSE ROUTER

$router = new \Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO
$router->post('/cliente/novo','Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioInserir');
$router->post('/cliente/inserir','Aluno\ProjetoPhp\Controller\ClientesController::inserirClientes');
$router->get("/ola-mundo", function(){
    return "Olá Mundo!";
});

$router->get('/exemplo','Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

$router->post("/exemplo-resultado", 'Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');
//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());