<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/contratos', 'HomeController@index');
$router->get('/salvos', 'HomeController@saves');

$router->get('/contratos/packages/{type}', 'HomeController@contractType');
$router->get('/criação/{type}/{id}', 'HomeController@criation');
$router->post('/salvar/{type}', 'HomeController@saveContract');

$router->get('/login', 'LoginController@signin');
$router->get('/cadastro', 'LoginController@signup');
$router->get('/sair', 'LoginController@logout');
$router->post('/login', 'LoginController@signinAction');
$router->post('/cadastro', 'LoginController@signupAction');