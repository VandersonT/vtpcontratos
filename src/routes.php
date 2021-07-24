<?php
use core\Router;

$router = new Router();


/*------------------------------------USERS ROUTES--------------------------------------------------*/
/*HOME*/
$router->get('/', 'HomeController@index');
$router->get('/contratos', 'HomeController@index');
$router->get('/salvos', 'HomeController@saves');
$router->get('/perfil', 'HomeController@profile');
$router->get('/suporte', 'HomeController@support');
$router->get('/sair', 'HomeController@logout');

/*USER*/
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');
$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

/*CONTRACT*/
$router->post('/enviarMsg', 'ContractController@sendMsg');
$router->get('/contratos/packages/{type}', 'ContractController@contractType');
$router->get('/criação/{type}/{id}', 'ContractController@criation');
$router->post('/salvar/{type}', 'ContractController@saveContract');
$router->get('/deletar/{type}/{id}', 'ContractController@deleteContract');
$router->post('/salvarPerfil', 'ContractController@saveInfoProfile');
/*--------------------------------------------------------------------------------------------------*/



/*------------------------------------ADMINS ROUTES-------------------------------------------------*/

/*HOME-ADMIN*/
$router->get('/Painel', 'AdminController@index');

/*USER_ADMIN*/
$router->get('/Painel/loginStaff', 'LoginadminController@login');
$router->post('/Painel/loginStaff', 'LoginadminController@loginAdminAction');
/*--------------------------------------------------------------------------------------------------*/

