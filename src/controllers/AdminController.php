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
        if($this->loggedAdmin->access < 2){
            $_SESSION['tokenAdmin'] = '';
            $this->redirect("/Painel/loginStaff");
            exit;
        }
    }

    public function index() {
        $this->render('admin/controle', [
            'user' => $this->loggedAdmin
        ]);
        exit;
    }

    public function logout(){
        $_SESSION['tokenAdmin'] = '';
        $this->redirect("/Painel/loginStaff");
        exit;
    }

}