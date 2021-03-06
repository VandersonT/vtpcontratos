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
$router->get('/inicio', 'LoginController@initial');
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
$router->get('/Painel/sair', 'AdminController@logout');
$router->get('/Painel/ban', 'AdminController@ban');
$router->get('/Painel/banidosLista', 'AdminController@bannedListed');
$router->get('/Painel/chatStaffs', 'AdminController@chatStaff');

/*USER_ADMIN*/
$router->get('/Painel/loginStaff', 'LoginadminController@login');
$router->post('/Painel/loginStaff', 'LoginadminController@loginAdminAction');
$router->post('/Painel/ban', 'AdminController@banSearch');
$router->get('/Painel/banindo/{id}/{access}', 'AdminController@banAction');
$router->get('/Painel/novoStaff', 'AdminController@newStaff');
$router->post('/Painel/novoStaff', 'AdminController@searchUserToStaff');
$router->get('/Painel/promovendo/{id}/{access}/{newposition}', 'AdminController@newStaffAction');
$router->get('/Painel/system/{action}', 'AdminController@systemStatus');
$router->get('/Painel/support/{action}', 'AdminController@supportStatus');
$router->get('/Painel/Desban/{id}', 'AdminController@desBanAction');
$router->post('/Painel/enviarMensagemS', 'AdminController@sendMsgStaff');
$router->get('/Painel/suporte/{tab}',  'AdminController@support');
$router->get('/Painel/mudaStatusSuporte/{id}/{newstatus}', 'AdminController@changeStatusSupportSingle');
$router->get('/Painel/suporte/{situation}/individual/{id}', 'AdminController@supportSingle');
$router->post('/Painel/responderUsuario', 'AdminController@replyUser');

/*--------------------------------------------------------------------------------------------------*/

