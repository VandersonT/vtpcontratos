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
        $contract = '';
        
        if($args['id'] == 1){
            $contract = ContractsHandler::getModelContract($args);
        }else{
            $contract = ContractsHandler::getContract($args);
        }

        if(!$contract){
            $this->render('404');
            exit;
        }

        $this->render('contracts/'.$args['type'], [
            'user' => $this->loggedUser,
            'contract' => $contract,
            'contractInfo' => $args
        ]);
        exit;

    }

    public function saveContract($args){

        switch($args['type']){
            case 'wedding1':
                $contractId = filter_input(INPUT_POST, 'contractId');
                $contractName = filter_input(INPUT_POST, 'contractNameInput');
                $cmp1 = filter_input(INPUT_POST, 'cmp1Input');
                $service = filter_input(INPUT_POST, 'serviceInput');
                $cmp2 = filter_input(INPUT_POST, 'cmp2Input');
                $cmp3 = filter_input(INPUT_POST, 'cmp3Input');
                $hiredInfo = filter_input(INPUT_POST, 'hiredInfoInput');
                $cmp4 = filter_input(INPUT_POST, 'cmp4Input');
                $name = filter_input(INPUT_POST, 'nameInput');
                $cpf = filter_input(INPUT_POST, 'cpfInput');
                $rg = filter_input(INPUT_POST, 'rgInput');
                $email = filter_input(INPUT_POST, 'emailInput');
                $cell = filter_input(INPUT_POST, 'cellInput');
                $address = filter_input(INPUT_POST, 'addressInput');
                $city = filter_input(INPUT_POST, 'cityInput');
                $bride = filter_input(INPUT_POST, 'brideInput');
                $engaged = filter_input(INPUT_POST, 'engagedInput');
                $cmp5 = filter_input(INPUT_POST, 'cmp5Input');
                $cmp6 = filter_input(INPUT_POST, 'cmp6Input');
                $cmp7 = filter_input(INPUT_POST, 'cmp7Input');
                $cmp8 = filter_input(INPUT_POST, 'cmp8Input');
                $date = filter_input(INPUT_POST, 'dateInput');
                $time = filter_input(INPUT_POST, 'timeInput');
                $place = filter_input(INPUT_POST, 'placeInput');
                $cmp9 = filter_input(INPUT_POST, 'cmp9Input');
                $goals = filter_input(INPUT_POST, 'cgoalsInput');
                $cmp10 = filter_input(INPUT_POST, 'cmp10Input');
                $cmp11 = filter_input(INPUT_POST, 'cmp11Input');
                $price = filter_input(INPUT_POST, 'priceInput');
                $cmp12 = filter_input(INPUT_POST, 'cmp12Input');
                $cmp13 = filter_input(INPUT_POST, 'cmp13Input');
                $deadline = filter_input(INPUT_POST, 'deadlineInput');
                $cmp14 = filter_input(INPUT_POST, 'cmp14Input');
                $cmp15 = filter_input(INPUT_POST, 'cmp15Input');
                $cmp16 = filter_input(INPUT_POST, 'cmp16Input');
                $cmp17 = filter_input(INPUT_POST, 'cmp17Input');
                $cmp18 = filter_input(INPUT_POST, 'cmp18Input');
                $warranty = filter_input(INPUT_POST, 'warrantyInput');
                $cmp19 = filter_input(INPUT_POST, 'cmp19Input');
                $cmp20 = filter_input(INPUT_POST, 'cmp20Input');
                $cmp21 = filter_input(INPUT_POST, 'cmp21Input');
                $nameHired = filter_input(INPUT_POST, 'nameHiredInput');
                $dateToday = filter_input(INPUT_POST, 'dateTodayInput');

                if($contractId == 1){
                    $_SESSION['flash'] = ContractsHandler::saveNewContract($this->loggedUser->id,$contractId,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday);
                }else{
                    $_SESSION['flash'] = ContractsHandler::updateNewContract($contractId, $this->loggedUser->id,$contractId,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday);
                }
                $this->redirect('/salvos');
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