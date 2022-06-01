<?php


require_once __DIR__ . "/vendor/autoload.php";

//AQUI A GENTE RECUPERA O QUE O USUÁRIO DIGITOU E QUAL MÉTODO HTTP ELE UTILIZOU

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//INSTANCIAR CLASSE ROUTER

$router = new \Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get("/ola-mundo", function(){
    return "Olá Mundo!";
});

$router->get('/cliente/novo','Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioInserir');
$router->post('/cliente/inserir','Aluno\ProjetoPhp\Controller\ClientesController::inserirCliente');

$router->get('/clientes','Aluno\ProjetoPhp\Controller\ClientesController::abrirListaClientes');

$router->get('/cliente/alterar/{id}','Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioAlterar');

$router->post('/cliente/editar/{id}','Aluno\ProjetoPhp\Controller\ClientesController::editarCliente');

$router->get('/cliente/excluir/{id}','Aluno\ProjetoPhp\Controller\ClientesController::excluirCliente');


$router->get('/produto/novo','Aluno\ProjetoPhp\Controller\ProdutoController::abrirFormularioInserir');
$router->post('/produto/inserir','Aluno\ProjetoPhp\Controller\ProdutoController::inserirProduto');

$router->get('/produtos','Aluno\ProjetoPhp\Controller\ProdutoController::abrirListaProdutos');

$router->get('/produto/alterar/{id}','Aluno\ProjetoPhp\Controller\ProdutoController::abrirFormularioAlterar');

$router->post('/produto/editar/{id}','Aluno\ProjetoPhp\Controller\ProdutoController::editarProduto');

$router->get('/produto/excluir/{id}','Aluno\ProjetoPhp\Controller\ProdutoController::excluirProduto');


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