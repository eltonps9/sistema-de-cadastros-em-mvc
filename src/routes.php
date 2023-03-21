<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');


$router->post('/adicionarCliente', 'HomeController@adicionarCliente');
$router->post('/adicionarItem', 'HomeController@adicionarEstoque');

$router->get('/deletar/{id}', 'HomeController@deletar');
$router->get('/delete/{id}', 'HomeController@deletecliente');

$router->get('/updateCliente/{id}', 'HomeController@updateCliente');
$router->get('/updateItem/{id}', 'HomeController@updateEstoque');
$router->post('/updateAction_cliente/{id}', 'HomeController@updateAction_cliente');
$router->post('/updateItem/{id}', 'HomeController@updateAction_item');


$router->post('/home', 'HomeController@home');
$router->get('/config', 'HomeController@config');
$router->get('/tela', 'HomeController@tela');
$router->get('/clientes', 'HomeController@cliente');

$router->get('/logout', 'HomeController@logout');
$router->get('/search', 'HomeController@searchView');
$router->post('/searching', 'HomeController@search');
