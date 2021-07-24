<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginadminHandler;

class AdminController extends Controller {
    public $loggedAdmin;
    public function __construct(){
        $this->loggedAdmin = LoginadminHandler::checkLoginAdmin();
        if($this->loggedAdmin === false){
            $this->redirect('/Painel/loginStaff');
            exit;
        }
    }

    public function index() {
        $this->render('admin/painel', [
            'user' => $this->loggedAdmin
        ]);
        exit;
    }

}