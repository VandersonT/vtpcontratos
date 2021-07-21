<?php
namespace src\handlers;

use \src\models\Wedding1;
use \src\models\Support;
use \src\models\User;

class ContractsHandler {

    public static function getChatUser($id){
        $conversation = Support::select()->where('from_user', $id)->orWhere('to_user', $id)->get();

        return $conversation;
    }

    public static function sendMsg($msgToSuport, $id){
        Support::insert([
            'from_user' => $id,
            'to_user' => 0,
            'msg' => $msgToSuport,
            'dateT' => date('d/m/Y')
        ])->execute();
    }

    public static function saveInfo($id, $userName, $userEmail, $themeMode, $namePhoto, $nameLogo, $profilePictureChanged, $contractLogoChanged){
        User::update()
            ->set('name',$userName)
            ->set('email',$userEmail)
            ->set('themeMode', $themeMode)
            ->where('id', $id)
        ->execute();

        if($profilePictureChanged){
            User::update()
                ->set('photo',$namePhoto)
                ->where('id', $id)
            ->execute();
        }

        if($contractLogoChanged){
            User::update()
                ->set('contractLogo',$nameLogo)
                ->where('id', $id)
            ->execute();
        }

    }

}