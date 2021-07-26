<?php
namespace src\handlers;

use \src\models\User;
use \src\models\Users_on;
use \src\models\System;

class LoginadminHandler {

    public static function checkLoginAdmin(){
        if(!empty($_SESSION['tokenAdmin'])){
            $tokenAdmin = $_SESSION['tokenAdmin'];

            $verifyData = User::select()->where('tokenAdmin', $tokenAdmin)->execute();
            if(count($verifyData) > 0){
                $dataAdmin = User::select()->where('tokenAdmin', $tokenAdmin)->one();

                $loggedAdmin = new User();
                $loggedAdmin->id = $dataAdmin['id'];
                $loggedAdmin->name = $dataAdmin['name'];
                $loggedAdmin->email = $dataAdmin['email'];
                $loggedAdmin->access = $dataAdmin['access'];
                $loggedAdmin->photo = $dataAdmin['photo'];

                return $loggedAdmin;

            }

        }
        return false;
        exit;
    }

    public static function verifyLoginAdmin($email, $password){
        
        $userAdmin = User::select()->where('email', $email)->one();
        if($userAdmin){
            if(password_verify($password, $userAdmin['password'])){
                $tokenAdmin  = md5(time().rand(0,9999).time());

                User::update()
                    ->set('tokenAdmin', $tokenAdmin)
                    ->where('email', $email)
                ->execute();

                if($userAdmin['access'] > 1){
                    return $tokenAdmin;
                }
                
            }
        }
        return false;

    }

    public static function searchUser($idSearch){
        $data = User::select()->where('id', $idSearch)->one();

        return $data;
    }

    public static function banUser($id){
        User::update()
            ->set('access', 0)
            ->where('id', $id)
        ->execute();
    }

    public static function changePositionUser($userId, $newPosition){
        User::update()
            ->set('access', $newPosition)
            ->where('id', $userId)
        ->execute();
    }

    public static function getStaffsMembers(){
        $members = User::select()->where('access', 2)->orWhere('access', 3)->orderBy(['access' => 'desc'])->execute();

        return $members;
    }

    public static function getOnlineMembers(){
        $supposedMembersOn = Users_on::select()->execute();

        foreach($supposedMembersOn as $supposedMemberOn){
            if($supposedMemberOn['last_action'] + 600 < time()){
                Users_on::delete()->where('id', $supposedMemberOn['id'])->execute();
                //mais de 10 minutos, ou seja, não esta mais online;
            }
        }

        $membersOn = Users_on::select()->execute();

        return $membersOn;
    }

    public static function getTotalAccountCreated(){
        $account = User::select()->execute();
        return count($account);
    }

    public static function changeSystemStatus($action){
        if($action == 'on'){
            System::update()
                ->set('systemActive', 1)
                ->where('id', 1)
            ->execute();
        }else{
            System::update()
                ->set('systemActive', 0)
                ->where('id', 1)
            ->execute();
        }
    }

}