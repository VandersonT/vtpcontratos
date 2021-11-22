<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ContractsHandler;

class ContractController extends Controller {

    public function __construct(){
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false){
            $this->redirect('/inicio');
            exit;
        }
        if($this->loggedUser->access == 0){
            $_SESSION['token'] = '';
            $this->render('banned');
            exit;
        }

        LoginHandler::updateLastAction($this->loggedUser->id, $this->loggedUser->name);

    }

    public function sendMsg(){
        $msgToSuport = filter_input(INPUT_POST, 'msgToSuport', FILTER_SANITIZE_SPECIAL_CHARS);
        

        if($msgToSuport){
            ContractsHandler::sendMsg($msgToSuport, $this->loggedUser);
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
                $contractId = filter_input(INPUT_POST, 'contractId', FILTER_SANITIZE_SPECIAL_CHARS);
                $contractName = filter_input(INPUT_POST, 'contractNameInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp1 = filter_input(INPUT_POST, 'cmp1Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $service = filter_input(INPUT_POST, 'serviceInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp2 = filter_input(INPUT_POST, 'cmp2Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp3 = filter_input(INPUT_POST, 'cmp3Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $hiredInfo = filter_input(INPUT_POST, 'hiredInfoInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp4 = filter_input(INPUT_POST, 'cmp4Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $name = filter_input(INPUT_POST, 'nameInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cpf = filter_input(INPUT_POST, 'cpfInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $rg = filter_input(INPUT_POST, 'rgInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, 'emailInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cell = filter_input(INPUT_POST, 'cellInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $address = filter_input(INPUT_POST, 'addressInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $city = filter_input(INPUT_POST, 'cityInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $bride = filter_input(INPUT_POST, 'brideInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $engaged = filter_input(INPUT_POST, 'engagedInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp5 = filter_input(INPUT_POST, 'cmp5Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp6 = filter_input(INPUT_POST, 'cmp6Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp7 = filter_input(INPUT_POST, 'cmp7Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp8 = filter_input(INPUT_POST, 'cmp8Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $date = filter_input(INPUT_POST, 'dateInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $time = filter_input(INPUT_POST, 'timeInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $place = filter_input(INPUT_POST, 'placeInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp9 = filter_input(INPUT_POST, 'cmp9Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $goals = filter_input(INPUT_POST, 'goalsInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp10 = filter_input(INPUT_POST, 'cmp10Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp11 = filter_input(INPUT_POST, 'cmp11Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, 'priceInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp12 = filter_input(INPUT_POST, 'cmp12Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp13 = filter_input(INPUT_POST, 'cmp13Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $deadline = filter_input(INPUT_POST, 'deadlineInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp14 = filter_input(INPUT_POST, 'cmp14Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp15 = filter_input(INPUT_POST, 'cmp15Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp16 = filter_input(INPUT_POST, 'cmp16Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp17 = filter_input(INPUT_POST, 'cmp17Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp18 = filter_input(INPUT_POST, 'cmp18Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $warranty = filter_input(INPUT_POST, 'warrantyInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp19 = filter_input(INPUT_POST, 'cmp19Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp20 = filter_input(INPUT_POST, 'cmp20Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp21 = filter_input(INPUT_POST, 'cmp21Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $nameHired = filter_input(INPUT_POST, 'nameHiredInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $dateToday = filter_input(INPUT_POST, 'dateTodayInput', FILTER_SANITIZE_SPECIAL_CHARS);
 

                if($contractId == 1){
                    $_SESSION['flash'] = ContractsHandler::saveNewContractWedding1($this->loggedUser->id,$contractId,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday);
                }else{
                    $_SESSION['flash'] = ContractsHandler::updateContractWedding1($contractId, $this->loggedUser->id,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday);
                }
                $this->redirect('/salvos');
                break;
            case 'birthday1':
                $contractId = filter_input(INPUT_POST, 'contractId', FILTER_SANITIZE_SPECIAL_CHARS);
                $contractName = filter_input(INPUT_POST, 'contractNameInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp1 = filter_input(INPUT_POST, 'cmp1Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $service = filter_input(INPUT_POST, 'serviceInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp2 = filter_input(INPUT_POST, 'cmp2Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp3 = filter_input(INPUT_POST, 'cmp3Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $hiredInfo = filter_input(INPUT_POST, 'hiredInfoInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp4 = filter_input(INPUT_POST, 'cmp4Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $name = filter_input(INPUT_POST, 'nameInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cpf = filter_input(INPUT_POST, 'cpfInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $rg = filter_input(INPUT_POST, 'rgInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, 'emailInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cell = filter_input(INPUT_POST, 'cellInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $address = filter_input(INPUT_POST, 'addressInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $city = filter_input(INPUT_POST, 'cityInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $birthdayPerson = filter_input(INPUT_POST, 'birthday_personInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp5 = filter_input(INPUT_POST, 'cmp5Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp6 = filter_input(INPUT_POST, 'cmp6Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp7 = filter_input(INPUT_POST, 'cmp7Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp8 = filter_input(INPUT_POST, 'cmp8Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $date = filter_input(INPUT_POST, 'dateInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $time = filter_input(INPUT_POST, 'timeInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $place = filter_input(INPUT_POST, 'placeInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp9 = filter_input(INPUT_POST, 'cmp9Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $goals = filter_input(INPUT_POST, 'goalsInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp10 = filter_input(INPUT_POST, 'cmp10Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp11 = filter_input(INPUT_POST, 'cmp11Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, 'priceInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp12 = filter_input(INPUT_POST, 'cmp12Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp13 = filter_input(INPUT_POST, 'cmp13Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $deadline = filter_input(INPUT_POST, 'deadlineInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp14 = filter_input(INPUT_POST, 'cmp14Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp15 = filter_input(INPUT_POST, 'cmp15Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp16 = filter_input(INPUT_POST, 'cmp16Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp17 = filter_input(INPUT_POST, 'cmp17Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp18 = filter_input(INPUT_POST, 'cmp18Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $warranty = filter_input(INPUT_POST, 'warrantyInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp19 = filter_input(INPUT_POST, 'cmp19Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp20 = filter_input(INPUT_POST, 'cmp20Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp21 = filter_input(INPUT_POST, 'cmp21Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $nameHired = filter_input(INPUT_POST, 'nameHiredInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $dateToday = filter_input(INPUT_POST, 'dateTodayInput', FILTER_SANITIZE_SPECIAL_CHARS);

                if($contractId == 1){
                    $_SESSION['flash'] = ContractsHandler::saveNewContractBirthday1($this->loggedUser->id,$contractId,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$birthdayPerson,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday);
                }else{
                    $_SESSION['flash'] = ContractsHandler::updateContractBirthday1($contractId, $this->loggedUser->id,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$birthdayPerson,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday);
                }
                $this->redirect('/salvos');
                break;
            case 'devweb1':
                $contractId = filter_input(INPUT_POST, 'contractId', FILTER_SANITIZE_SPECIAL_CHARS);
                $contractName = filter_input(INPUT_POST, 'contractNameInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $title = filter_input(INPUT_POST, 'titleInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp1Input = filter_input(INPUT_POST, 'cmp1Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp2Input = filter_input(INPUT_POST, 'cmp2Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $titleInfoHiredInput = filter_input(INPUT_POST, 'titleInfoHiredInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $infoHiredInput = filter_input(INPUT_POST, 'infoHiredInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $titleInfoContractorInput = filter_input(INPUT_POST, 'titleInfoContractorInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $infoContractorInput = filter_input(INPUT_POST, 'infoContractorInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp3Input = filter_input(INPUT_POST, 'cmp3Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp4Input = filter_input(INPUT_POST, 'cmp4Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp4aTitleInput = filter_input(INPUT_POST, 'cmp4aTitleInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp4aContentInput = filter_input(INPUT_POST, 'cmp4aContentInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp5Input = filter_input(INPUT_POST, 'cmp5Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp6Input = filter_input(INPUT_POST, 'cmp6Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $nameContractorInput = filter_input(INPUT_POST, 'nameContractorInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp7Input = filter_input(INPUT_POST, 'cmp7Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $aboutProductInput = filter_input(INPUT_POST, 'aboutProductInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp10Input = filter_input(INPUT_POST, 'cmp10Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp11Input = filter_input(INPUT_POST, 'cmp11Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $hiredObligationInput = filter_input(INPUT_POST, 'hiredObligationInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp12Input = filter_input(INPUT_POST, 'cmp12Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $contractorObligationInput = filter_input(INPUT_POST, 'contractorObligationInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp13Input = filter_input(INPUT_POST, 'cmp13Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp14Input = filter_input(INPUT_POST, 'cmp14Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $deadlineInput = filter_input(INPUT_POST, 'deadlineInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp15Input = filter_input(INPUT_POST, 'cmp15Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp16Input = filter_input(INPUT_POST, 'cmp16Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp17Input = filter_input(INPUT_POST, 'cmp17Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp18Input = filter_input(INPUT_POST, 'cmp18Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp19Input = filter_input(INPUT_POST, 'cmp19Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp20Input = filter_input(INPUT_POST, 'cmp20Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp21Input = filter_input(INPUT_POST, 'cmp21Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp22Input = filter_input(INPUT_POST, 'cmp22Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp23Input = filter_input(INPUT_POST, 'cmp23Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp24Input = filter_input(INPUT_POST, 'cmp24Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp25Input = filter_input(INPUT_POST, 'cmp25Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $warrantyInput = filter_input(INPUT_POST, 'warrantyInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp26Input = filter_input(INPUT_POST, 'cmp26Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp27Input = filter_input(INPUT_POST, 'cmp27Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp28Input = filter_input(INPUT_POST, 'cmp28Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $priceInput = filter_input(INPUT_POST, 'priceInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $installmentsInput = filter_input(INPUT_POST, 'installmentsInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $dividedInInput = filter_input(INPUT_POST, 'dividedInInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp29Input = filter_input(INPUT_POST, 'cmp29Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp30Input = filter_input(INPUT_POST, 'cmp30Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp31Input = filter_input(INPUT_POST, 'cmp31Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp32Input = filter_input(INPUT_POST, 'cmp32Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $cmp33Input = filter_input(INPUT_POST, 'cmp33Input', FILTER_SANITIZE_SPECIAL_CHARS);
                $dateTodayInput = filter_input(INPUT_POST, 'dateTodayInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $hiredNameInput = filter_input(INPUT_POST, 'hiredNameInput', FILTER_SANITIZE_SPECIAL_CHARS);
                $contractorNameInput = filter_input(INPUT_POST, 'contractorNameInput', FILTER_SANITIZE_SPECIAL_CHARS);

                if($contractId == 1){
                    $_SESSION['flash'] = ContractsHandler::saveNewContractDevweb1($this->loggedUser->id,$contractId,$contractName,$title,$cmp1Input,$cmp2Input,$titleInfoHiredInput,$infoHiredInput,$titleInfoContractorInput,$infoContractorInput,$cmp3Input,$cmp4Input,$cmp4aTitleInput,$cmp4aContentInput,$cmp5Input,$cmp6Input,$nameContractorInput,$cmp7Input,$aboutProductInput,$cmp10Input,$cmp11Input,$hiredObligationInput,$cmp12Input,$contractorObligationInput,$cmp13Input,$cmp14Input,$deadlineInput,$cmp15Input,$cmp16Input,$cmp17Input,$cmp18Input,$cmp19Input,$cmp20Input,$cmp21Input,$cmp22Input,$cmp23Input,$cmp24Input,$cmp25Input,$warrantyInput,$cmp26Input,$cmp27Input,$cmp28Input,$priceInput,$installmentsInput,$dividedInInput,$cmp29Input,$cmp30Input,$cmp31Input,$cmp32Input,$cmp33Input,$dateTodayInput,$hiredNameInput,$contractorNameInput);
                }else{
                    $_SESSION['flash'] = ContractsHandler::updateContractDevweb1($this->loggedUser->id,$contractId,$contractName,$title,$cmp1Input,$cmp2Input,$titleInfoHiredInput,$infoHiredInput,$titleInfoContractorInput,$infoContractorInput,$cmp3Input,$cmp4Input,$cmp4aTitleInput,$cmp4aContentInput,$cmp5Input,$cmp6Input,$nameContractorInput,$cmp7Input,$aboutProductInput,$cmp10Input,$cmp11Input,$hiredObligationInput,$cmp12Input,$contractorObligationInput,$cmp13Input,$cmp14Input,$deadlineInput,$cmp15Input,$cmp16Input,$cmp17Input,$cmp18Input,$cmp19Input,$cmp20Input,$cmp21Input,$cmp22Input,$cmp23Input,$cmp24Input,$cmp25Input,$warrantyInput,$cmp26Input,$cmp27Input,$cmp28Input,$priceInput,$installmentsInput,$dividedInInput,$cmp29Input,$cmp30Input,$cmp31Input,$cmp32Input,$cmp33Input,$dateTodayInput,$hiredNameInput,$contractorNameInput);
                }
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
            $_SESSION['flash'] = $answer;
        }

        $this->redirect('/salvos');
        exit;
    }

    public function saveInfoProfile(){
        $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
        $userEmail = filter_input(INPUT_POST, 'userEmail', FILTER_VALIDATE_EMAIL);
        $profilePictureChanged = false;
        $contractLogoChanged = false;
        $contractSignatureChanged = false;
        $namePhoto = '';
        $nameLogo = '';
        $allowed = ['image/jpeg', 'image/jpg', 'image/png'];
        $themeMode = filter_input(INPUT_POST, 'themeMode', FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($_FILES) && empty($_POST)){
            $_SESSION['error'] = 'Ocorreu um erro inesperado com o arquivo que você enviou.';
            $this->redirect('/perfil');
            exit;
        }

        if(!empty($_FILES['photoProfile']['size'])){
            $profilePictureChanged = true;
        }

        if(!empty($_FILES['logoContract']['size'])){
            $contractLogoChanged = true;
        }

        if(!empty($_FILES['signatureContract']['size'])){
            $contractSignatureChanged = true;
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

        if($contractSignatureChanged){
            if($_FILES['signatureContract']['size'] > 2000000){
                $_SESSION['error'] = 'A foto da assinatura enviada é muito grande. (maximo 2MB)';
                $this->redirect('/perfil');
                exit;
            }
    
            //if type is not allowed
            if(!in_array($_FILES['signatureContract']['type'], $allowed)){
                $_SESSION['error'] = 'O tipo de foto enviada não é permitido. (somente: jpeg, jpg e png)';
                $this->redirect('/perfil');
                exit;
            } 

            //if that's ok
            $nameSignature = md5(time().rand(0,9999)).'.png';
            move_uploaded_file($_FILES['signatureContract']['tmp_name'], 'media/signature/'.$nameSignature);
        }
        /*---------------------------------------------------------------------------------*/

        ContractsHandler::saveInfo($this->loggedUser->id, $userName, $userEmail, $themeMode, $namePhoto, $nameLogo, $profilePictureChanged, $contractLogoChanged,$nameSignature,$contractSignatureChanged);


        $_SESSION['success'] = 'Seu perfil foi atualizado com sucesso.';
        $this->redirect('/perfil');
        exit;
    }

}