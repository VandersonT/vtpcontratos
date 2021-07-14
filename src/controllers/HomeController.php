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

        $savesWedding = ContractsHandler::getSavesWedding1($this->loggedUser->id);

        $this->render('saves', [
            'user' => $this->loggedUser,
            'flash' => $flash,
            'savesWedding' => $savesWedding
        ]);
        exit;
    }

    public function contractType($args) {
        $this->render('contractType', [
            'user' => $this->loggedUser,
            'type' => $args['type']
        ]);
        exit;
    }

    public function criation($args){

        if($args['type'] == 'casamento1'){

            $this->contract = ContractsHandler::getContractWedding($args['id'], $this->loggedUser->id);
            
            if($this->contract){
                $this->render('contracts/wedding/casamento1',[
                    'contract' => $this->contract,
                    'idContract' => $args['id'],
                    'user' => $this->loggedUser
                ]);
            }else{
                $this->render('404');
            }
        }else{
            $this->render('404');
        }
        exit;
    }

    public function saveContract($args){

        switch($args['type']){
            case 'casamento1':
                $contractName = filter_input(INPUT_POST, 'contractName');
                $cmp1 = filter_input(INPUT_POST, 'cmp1');
                $service = filter_input(INPUT_POST, 'service');
                $cmp2 = filter_input(INPUT_POST, 'cmp2');
                $cmp3 = filter_input(INPUT_POST, 'cmp3');
                $hired_info = filter_input(INPUT_POST, 'hired_info');
                $cmp4 = filter_input(INPUT_POST, 'cmp4');
                $name = filter_input(INPUT_POST, 'name');
                $cpf = filter_input(INPUT_POST, 'cpf');
                $rg = filter_input(INPUT_POST, 'rg');
                $email = filter_input(INPUT_POST, 'email');
                $cell = filter_input(INPUT_POST, 'cell');
                $address = filter_input(INPUT_POST, 'address');
                $city = filter_input(INPUT_POST, 'city');
                $bride = filter_input(INPUT_POST, 'bride');
                $engaged = filter_input(INPUT_POST, 'engaged');
                $cmp5 = filter_input(INPUT_POST, 'cmp5');
                $cmp6 = filter_input(INPUT_POST, 'cmp6');
                $cmp7 = filter_input(INPUT_POST, 'cmp7');
                $cmp8 = filter_input(INPUT_POST, 'cmp8');
                $date = filter_input(INPUT_POST, 'date');
                $time = filter_input(INPUT_POST, 'time');
                $place = filter_input(INPUT_POST, 'place');
                $cmp9 = filter_input(INPUT_POST, 'cmp9');
                $goals = filter_input(INPUT_POST, 'goals');
                $cmp10 = filter_input(INPUT_POST, 'cmp10');
                $cmp11 = filter_input(INPUT_POST, 'cmp11');
                $price = filter_input(INPUT_POST, 'price');
                $cmp12 = filter_input(INPUT_POST, 'cmp12');
                $cmp13 = filter_input(INPUT_POST, 'cmp13');
                $deadline = filter_input(INPUT_POST, 'deadline');
                $cmp14 = filter_input(INPUT_POST, 'cmp14');
                $cmp15 = filter_input(INPUT_POST, 'cmp15');
                $cmp16 = filter_input(INPUT_POST, 'cmp16');
                $cmp17 = filter_input(INPUT_POST, 'cmp17');
                $cmp18 = filter_input(INPUT_POST, 'cmp18');
                $warranty = filter_input(INPUT_POST, 'warranty');
                $cmp19 = filter_input(INPUT_POST, 'cmp19');
                $cmp20 = filter_input(INPUT_POST, 'cmp20');
                $cmp21 = filter_input(INPUT_POST, 'cmp21');
                $name_hired = filter_input(INPUT_POST, 'name_hired');
                $date_today = filter_input(INPUT_POST, 'date_today');
                $action = filter_input(INPUT_POST, 'action');
                $idContract = filter_input(INPUT_POST, 'idContract');

                $flash = ContractsHandler::saveContractWedding($contractName,$cmp1,$service,$cmp2,$cmp3,$hired_info,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$name_hired,$date_today, $this->loggedUser->id,$action,$idContract);

                $_SESSION['flash'] =  $flash;

                $this->redirect('/salvos');
                break;
            default:
                $this->redirect('/404');
                break;
        }
        exit;
    }

    public function deleteContract($args){
        $answer = ContractsHandler::deleteSaveContract($args['type'], $args['id']);
        
        if($answer){
            $_SESSION['flash'] = 'Contrato deletado com sucesso.';
        }else{
            $_SESSION['flash'] = 'Ocorreu algum erro no processo.';
        }
        
        $this->redirect('/salvos');
        exit;
    }

    public function support(){

        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $chatSingle = ContractsHandler::getChatUser($this->loggedUser->id);

        $this->render('support', [
            'user' => $this->loggedUser,
            'chatSingle' => $chatSingle,
            'flash' => $flash
        ]);
        exit;
    }

    public function sendMsg(){
        $msgToSuport = filter_input(INPUT_POST, 'msgToSuport', FILTER_SANITIZE_SPECIAL_CHARS);
        

        if($msgToSuport){
            ContractsHandler::sendMsg($msgToSuport, $this->loggedUser->id);
            $_SESSION['flash'] = 'Mensagem enviada com sucesso, em breve responderemos!';
        }

        $this->redirect('/suporte');
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

    public function saveInfoProfile(){
        $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
        $userEmail = filter_input(INPUT_POST, 'userEmail', FILTER_VALIDATE_EMAIL);
        $profilePictureChanged = false;
        $contractLogoChanged = false;
        $namePhoto = '';
        $namePhoto = '';
        $allowed = ['image/jpeg', 'image/jpg', 'image/png'];

        if(!empty($_FILES['photoProfile']['size'])){
            $profilePictureChanged = true;
        }

        if(!empty($_FILES['logoContract']['size'])){
            $contractLogoChanged = true;
        }
        
        /*------------------------------IMAGE VERIFY---------------------------------------*/
        if($profilePictureChanged){
            if($_FILES['photoProfile']['size'] > 2000000){
                $_SESSION['error'] = 'A foto de perfil enviada é muito grande. (maximo 2MB)';
                $this->redirect('/perfil');
                exit;
            }
    
            //if type is not allowed
            if(!in_array($_FILES['photoProfile']['type'], $allowed)){
                $_SESSION['error'] = 'O tipo de foto enviada não é permitido. (somente: jpeg, jpg e png)';
                $this->redirect('/perfil');
                exit;
            } 

            //if that's ok
            $namePhoto = md5(time().rand(0,9999)).'.jpg';
            move_uploaded_file($_FILES['photoProfile']['tmp_name'], 'media/avatars/'.$namePhoto);
        }

        if($contractLogoChanged){
            if($_FILES['logoContract']['size'] > 2000000){
                $_SESSION['error'] = 'A foto de logo enviada é muito grande. (maximo 2MB)';
                $this->redirect('/perfil');
                exit;
            }
    
            //if type is not allowed
            if(!in_array($_FILES['logoContract']['type'], $allowed)){
                $_SESSION['error'] = 'O tipo de foto enviada não é permitido. (somente: jpeg, jpg e png)';
                $this->redirect('/perfil');
                exit;
            } 

            //if that's ok
            $nameLogo = md5(time().rand(0,9999)).'.jpg';
            move_uploaded_file($_FILES['logoContract']['tmp_name'], 'media/logo/'.$nameLogo);
        }
        /*---------------------------------------------------------------------------------*/
        
        ContractsHandler::saveInfo($this->loggedUser->id, $userName, $userEmail, $namePhoto, $nameLogo, $profilePictureChanged, $contractLogoChanged);


        $_SESSION['success'] = 'Seu perfil foi atualizado com sucesso.';
        $this->redirect('/perfil');
        exit;
    }

}