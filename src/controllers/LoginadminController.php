<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginadminHandler;

class LoginadminController extends Controller {

    public function __construct(){
        if(!empty($_SESSION['tokenAdmin'])){
            $this->redirect('/painel');
            exit;
        }
    }

    public function login() {

        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('admin/loginAdmin',[
            'flash' => $flash
        ]);
        exit;

    }

    public function loginAdminAction(){
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        if($email && $password){
            
            $tokenAdmin = LoginadminHandler::verifyLoginAdmin($email, $password);

            if($tokenAdmin){

                $_SESSION['tokenAdmin'] = $tokenAdmin;
                $this->redirect('/Painel');
                exit;

            }else{
                $_SESSION['flash'] = 'Essa conta não faz parte da staff.';
                $this->redirect('/Painel/loginStaff');
                exit;
            }

        }else{
            $_SESSION['flash'] = 'Não envie campos vazios.';
            $this->redirect('/Painel/loginStaff');
            exit;
        }

    }

}