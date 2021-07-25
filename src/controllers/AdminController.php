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

        $staffMembers = LoginadminHandler::getStaffsMembers();

        $this->render('admin/controle', [
            'user' => $this->loggedAdmin,
            'staffMembers' => $staffMembers
        ]);
        exit;
    }

    public function logout(){
        $_SESSION['tokenAdmin'] = '';
        $this->redirect("/Painel/loginStaff");
        exit;
    }

    public function ban(){

        $userFound = [];
        if(!empty($_SESSION['userFound'])){
            $userFound = $_SESSION['userFound'];
            $_SESSION['userFound'] = '';
        }

        $error = [];
        if(!empty($_SESSION['error'])){
            $error = $_SESSION['error'];
            $_SESSION['error'] = '';
        }

        $success = [];
        if(!empty($_SESSION['success'])){
            $success = $_SESSION['success'];
            $_SESSION['success'] = '';
        }

        $this->render('admin/ban',[
            'user' => $this->loggedAdmin,
            'userFound' => $userFound,
            'error' => $error,
            'success' => $success
        ]);
        exit;
    }

    public function banSearch(){
        $idSearch = filter_input(INPUT_POST, 'idSearch');
        if($idSearch){
            $_SESSION['userFound'] = LoginadminHandler::searchUser($idSearch);
        }
        $this->redirect("/Painel/ban");
        exit;
    }

    public function banAction($args){

        if($args['id'] == $this->loggedAdmin->id){
            $_SESSION['error'] = 'Você não pode banir você mesmo.';
            $this->redirect("/Painel/ban");
            exit;
        }

        if($args['access'] > 1){
            $_SESSION['error'] = 'Você não pode banir um usuário da staff.';
            $this->redirect("/Painel/ban");
            exit;
        }

        if($args['access'] == 0){
            $_SESSION['error'] = 'Esse usuário já foi banido.';
            $this->redirect("/Painel/ban");
            exit;
        }

        LoginadminHandler::banUser($args['id']);
        $_SESSION['success'] = 'Usuário banido com sucesso.';

        $this->redirect("/Painel/ban");
        exit;
    }

    public function newStaff(){
        $userFound = [];
        if(!empty($_SESSION['userFound'])){
            $userFound = $_SESSION['userFound'];
            $_SESSION['userFound'] = '';
        }

        $error = [];
        if(!empty($_SESSION['error'])){
            $error = $_SESSION['error'];
            $_SESSION['error'] = '';
        }

        $success = [];
        if(!empty($_SESSION['success'])){
            $success = $_SESSION['success'];
            $_SESSION['success'] = '';
        }

        $this->render('admin/newStaff',[
            'user' => $this->loggedAdmin,
            'userFound' => $userFound,
            'error' => $error,
            'success' => $success
        ]);
        exit;
    }

    public function searchUserToStaff(){
        $idSearch = filter_input(INPUT_POST, 'idSearch');
        if($idSearch){
            $_SESSION['userFound'] = LoginadminHandler::searchUser($idSearch);
        }
        $this->redirect("/Painel/novoStaff");
        exit;
    }

    public function newStaffAction($args){
        
        if($this->loggedAdmin->access < 3){
            $_SESSION['error'] = 'Somente Administrador pode editar cargos.';
            $this->redirect("/Painel/novoStaff");
            exit;
        }

        LoginadminHandler::changePositionUser($args['id'], $args['newposition']);
        $_SESSION['success'] = 'O cargo do usuario foi alterado com sucesso.';
        
        $this->redirect("/Painel/novoStaff");
        exit;
    }

}