<?php
namespace src\handlers;

use \src\models\User;

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

}