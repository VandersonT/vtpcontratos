<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\LoginadminHandler;

class AdminController extends Controller {
    public $loggedAdmin;
    public $isSystemActive;
    public $isSupportActive;

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

        $this->isSystemActive = LoginHandler::isSystemActive();

        $this->isSupportActive = LoginHandler::isSupportActive();
    }

    public function index() {
        

        $staffMembers = LoginadminHandler::getStaffsMembers();

        $onlineMembers = LoginadminHandler::getOnlineMembers();
        date_default_timezone_set('America/Sao_Paulo');

        $accountsCreated = LoginadminHandler::getTotalAccountCreated();

        $this->render('admin/controle', [
            'user' => $this->loggedAdmin,
            'staffMembers' => $staffMembers,
            'onlineMembers' => $onlineMembers,
            'accountsCreated' => $accountsCreated,
            'isSystemActive' => $this->isSystemActive,
            'isSupportActive' => $this->isSupportActive
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
            $_SESSION['error'] = 'Voc?? n??o pode banir voc?? mesmo.';
            $this->redirect("/Painel/ban");
            exit;
        }

        if($args['access'] > 1){
            $_SESSION['error'] = 'Voc?? n??o pode banir um usu??rio da staff.';
            $this->redirect("/Painel/ban");
            exit;
        }

        if($args['access'] == 0){
            $_SESSION['error'] = 'Esse usu??rio j?? foi banido.';
            $this->redirect("/Painel/ban");
            exit;
        }

        LoginadminHandler::banUser($args['id']);
        $_SESSION['success'] = 'Usu??rio banido com sucesso.';

        $msg = $this->loggedAdmin->name.' baniu o usu??rio id '.$args['id'];'.';
        LoginadminHandler::sendMsgToChatStaff(-1, 'automatic', '', $msg);

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
        
        if($args['access'] == 4){
            $_SESSION['error'] = 'Voc?? n??o pode trocar o cargo do dono.';
            $this->redirect("/Painel/novoStaff");
            exit;
        }
        
        if($this->loggedAdmin->access < 3){
            $_SESSION['error'] = 'Somente Administrador pode editar cargos.';
            $this->redirect("/Painel/novoStaff");
            exit;
        }

        LoginadminHandler::changePositionUser($args['id'], $args['newposition']);
        $_SESSION['success'] = 'O cargo do usuario foi alterado com sucesso.';

        $msg = $this->loggedAdmin->name.' alterou o cargo do usu??rio id '.$args['id'];'.';
        LoginadminHandler::sendMsgToChatStaff(-1, 'automatic', '', $msg);
        
        $this->redirect("/Painel/novoStaff");
        exit;
    }

    public function systemStatus($args){
        LoginadminHandler::changeSystemStatus($args['action']);
        $this->redirect("/Painel");
        exit;
    }

    public function supportStatus($args){
        LoginadminHandler::changeSupportStatus($args['action']);
        $this->redirect("/Painel");
        exit;
    }

    public function bannedListed(){

        $bannedMembers = LoginadminHandler::getBannedMembers();

        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('admin/bannedList',[
            'user' => $this->loggedAdmin,
            'bannedMembers' => $bannedMembers,
            'flash' => $flash
        ]);
        exit;
    }

    public function desBanAction($args){
        LoginadminHandler::desBanMember($args['id']);

        $_SESSION['flash'] = 'O usu??rio id '.$args['id'].' foi desbanido com sucesso.';

        $msg = $this->loggedAdmin->name.' desbaniu o usu??rio id '.$args['id'].'.';
        LoginadminHandler::sendMsgToChatStaff(-1, 'automatic', '', $msg);

        $this->redirect("/Painel/banidosLista");
        exit;
    }

    public function chatStaff(){
        $chatSingle = LoginadminHandler::getMessageChatStaff();
        $this->render('admin/chatStaff',[
            'user' => $this->loggedAdmin,
            'chatSingle' => $chatSingle
        ]);
        exit;
    }

    public function sendMsgStaff(){
        $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_SPECIAL_CHARS);

        if($msg){
            LoginadminHandler::sendMsgToChatStaff($this->loggedAdmin->id, $this->loggedAdmin->name, $this->loggedAdmin->photo, $msg);
        }
        $this->redirect("/Painel/chatStaffs");
        exit;
    }

    public function support($args){

        if($args['tab'] != 'resolvido' && $args['tab'] != 'pendente'){
            $this->render("/404");
            exit;
        }

        $contents = LoginadminHandler::getContentSupport($args['tab']);

        date_default_timezone_set('America/Sao_Paulo');

        $this->render('admin/supportStaff',[
            'user' => $this->loggedAdmin,
            'tab' => $args['tab'],
            'contents' => $contents
        ]);
        exit;
    }

    public function changeStatusSupportSingle($args){
        
        LoginadminHandler::changeStatusSupport($args);

        if($args['newstatus'] == 'resolvido'){
            $this->redirect("/Painel/suporte/pendente");
            exit;
        }else{
            $this->redirect("/Painel/suporte/resolvido");
            exit;
        }
    }

    public function supportSingle($args){

        $conversations = LoginadminHandler::getMessageUserSingle($args['id']);

        $this->render('admin/supportSingle',[
            'user' => $this->loggedAdmin,
            'conversations'=>$conversations,
            'userId' => $args['id']
        ]);
        exit;
    }

    public function replyUser(){

        $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_SPECIAL_CHARS);
        $toUser = filter_input(INPUT_POST, 'toUser');

        LoginadminHandler::replyToUser($msg, $toUser);
        
        echo "<script>window.history.back()</script>";
    }

}