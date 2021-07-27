<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ContractsHandler;

class HomeController extends Controller {

    private $loggedUser;
    private $contract;

    public function __construct(){

        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false){
            $this->redirect('/login');
            exit;
        }

        if($this->loggedUser->access == 0){
            $_SESSION['token'] = '';
            $this->render('banned');
            exit;
        }

        $isSystemActive = LoginHandler::isSystemActive();
        
        if(!$isSystemActive && $this->loggedUser->access < 2){
            $_SESSION['token'] = '';
            $this->render('inactive');
            exit;
        }

        LoginHandler::updateLastAction($this->loggedUser->id, $this->loggedUser->name);

    }

    public function index() {
        $this->render('home', [
            'user' => $this->loggedUser
        ]);
        exit;
    }

    public function logout(){
        $_SESSION['token'] = '';
        $this->redirect("/login");
        exit;
    }

    public function saves(){

        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $contractsWedding1 = ContractsHandler::getSavesContracts($this->loggedUser->id, 'wedding1');
        $contractsBirthday1 = ContractsHandler::getSavesContracts($this->loggedUser->id, 'birthday1');

        $this->render('saves', [
            'user' => $this->loggedUser,
            'flash' => $flash,
            'contractsWedding1' => $contractsWedding1,
            'contractsBirthday1' => $contractsBirthday1
        ]);
        exit;
    }

    public function support(){

        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $chatSingle = ContractsHandler::getChatUser($this->loggedUser->id);

        if($this->loggedUser->access < 2){
            $isSupportActive = LoginHandler::isSupportActive();
        }else{
            $isSupportActive = true;
        }

        $this->render('support', [
            'user' => $this->loggedUser,
            'chatSingle' => $chatSingle,
            'flash' => $flash,
            'isSupportActive' => $isSupportActive
        ]);
        exit;
    }

    public function profile(){
        $success = '';
        $error = '';
        if(!empty($_SESSION['success'])){
            $success = $_SESSION['success'];
            $_SESSION['success'] = '';
        }

        if(!empty($_SESSION['error'])){
            $error = $_SESSION['error'];
            $_SESSION['error'] = '';
        }

        $this->render('profile',[
            'user' => $this->loggedUser,
            'success'=>$success,
            'error'=>$error
        ]);
    }
}