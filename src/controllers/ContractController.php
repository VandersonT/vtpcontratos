<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ContractsHandler;

class ContractController extends Controller {

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

    public function sendMsg(){
        $msgToSuport = filter_input(INPUT_POST, 'msgToSuport', FILTER_SANITIZE_SPECIAL_CHARS);
        

        if($msgToSuport){
            ContractsHandler::sendMsg($msgToSuport, $this->loggedUser->id);
            $_SESSION['flash'] = 'Mensagem enviada com sucesso, em breve responderemos!';
        }

        $this->redirect('/suporte');
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
        
        switch($args['type']){
            case 'casamento1':
                $this->render('contracts/model', [
                    'user' => $this->loggedUser
                ]);
                break;
            default:
                $this->render('404');
                break;
        }
        exit;

    }

    public function saveContract($args){

        switch($args['type']){
            case 'casamento1':
                echo "Aqui ficará o codigo para salvar o casamento1";
                break;
            default:
                $this->redirect('/404');
                break;
        }
        exit;

    }

    public function saveInfoProfile(){
        $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
        $userEmail = filter_input(INPUT_POST, 'userEmail', FILTER_VALIDATE_EMAIL);
        $profilePictureChanged = false;
        $contractLogoChanged = false;
        $namePhoto = '';
        $namePhoto = '';
        $allowed = ['image/jpeg', 'image/jpg', 'image/png'];
        $themeMode = filter_input(INPUT_POST, 'themeMode', FILTER_SANITIZE_SPECIAL_CHARS);

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
        
        ContractsHandler::saveInfo($this->loggedUser->id, $userName, $userEmail, $themeMode, $namePhoto, $nameLogo, $profilePictureChanged, $contractLogoChanged);


        $_SESSION['success'] = 'Seu perfil foi atualizado com sucesso.';
        $this->redirect('/perfil');
        exit;
    }

}