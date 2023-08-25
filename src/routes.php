<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');


$router->post('/addCliente', 'AcoesController@adicionarCliente');
$router->post('/addProduto', 'AcoesController@adicionarEstoque');

$router->get('/deletar/{id}', 'AcoesController@deletar');
$router->get('/delete/{id}', 'AcoesController@deletecliente');

$router->get('/updateCliente/{id}', 'AcoesController@updateCliente');
$router->post('/updateProduto', 'AcoesController@updateProduto');
$router->post('/updateAction_cliente/{id}', 'AcoesController@updateAction_cliente');
$router->post('/updateaction_produtos/{id}', 'AcoesController@updateAction_produto');                        


$router->post('/home', 'LoginController@home');
$router->get('/cadastro', 'AcoesController@adicionar');
$router->get('/tela', 'EstoqueController@tela');
$router->get('/clientes', 'ClienteController@cliente');
$router->get('/clienteTela', 'ClienteController@clienteView');
$router->get('/produtoTela', 'EstoqueController@produtosView');

$router->get('/logout', 'HomeController@logout');
$router->get('/search', 'AcoesController@searchView');
$router->post('/searching', 'AcoesController@search');

$router->get('/relatorioProduto', 'EstoqueController@relatorio');


?>