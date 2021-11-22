<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

    public function __construct(){
        
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser != false){
            $this->redirect('/');
            exit;
        } 
       
    }

    public function initial() {
        $this->render('initial');
        exit;
    }

    public function signin() {
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('signin',[
            'flash' => $flash
        ]);
        exit;
    }

    public function signinAction(){
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        if($email && $password){

            $token = LoginHandler::verifyLogin($email, $password);

            if($token){
                $_SESSION['token'] = $token;
                $this->redirect('/');
            }else{
                $_SESSION['flash'] = 'Email e/ou senha estão errados.';
                $this->redirect('/login');
            }

        }else{
            $_SESSION['flash'] = 'Não envie campos vazios.';
            $this->redirect('/login');
        }
        exit;

    }

    public function signup() {
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('signup',[
            'flash' => $flash
        ]);
        exit;
    }

    public function signupAction(){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_SPECIAL_CHARS);
        $passwordConfirm = filter_input(INPUT_POST, 'passwordConfirm',FILTER_SANITIZE_SPECIAL_CHARS);

        if($name && $email && $password && $passwordConfirm){
            
            if($password == $passwordConfirm){

                if(!LoginHandler::emailExists($email)){
                    $token = LoginHandler::addUser($name, $email, $password);
                    $_SESSION['token'] = $token;
                    $this->redirect('/');
                }else{
                    $_SESSION['flash'] = 'E-mail já esta cadastrado.';
                    $this->redirect('/cadastro');
                }

            }else{
                $_SESSION['flash'] = 'As senhas não coincidem.';
                $this->redirect('/cadastro');
            }

        }else{
            $_SESSION['flash'] = 'Não envie campos vazios.';
            $this->redirect('/cadastro');
        }
        exit;
    }

}