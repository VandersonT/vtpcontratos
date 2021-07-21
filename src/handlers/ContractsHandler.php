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

    public static function getModelContract($contract){

        switch($contract['type']){
            case 'wedding1':
                $data = Wedding1::select()->where('id', 1)->one();
                if(count($data) > 0){
                    $getContract = new Wedding1();
                    $getContract->id = $data['id'];
                    $getContract->user_id = $data['user_id'];
                    $getContract->contract_name = $data['contract_name'];
                    $getContract->cmp1 = $data['cmp1'];
                    $getContract->service = $data['service'];
                    $getContract->cmp2 = $data['cmp2'];
                    $getContract->cmp3 = $data['cmp3'];
                    $getContract->hired_info = $data['hired_info'];
                    $getContract->cmp4 = $data['cmp4'];
                    $getContract->name = $data['name'];
                    $getContract->cpf = $data['cpf'];
                    $getContract->rg = $data['rg'];
                    $getContract->email = $data['email'];
                    $getContract->cell = $data['cell'];
                    $getContract->address = $data['address'];
                    $getContract->city = $data['city'];
                    $getContract->bride = $data['bride'];
                    $getContract->engaged = $data['engaged'];
                    $getContract->cmp5 = $data['cmp5'];
                    $getContract->cmp6 = $data['cmp6'];
                    $getContract->cmp7 = $data['cmp7'];
                    $getContract->cmp8 = $data['cmp8'];
                    $getContract->date = $data['date'];
                    $getContract->time = $data['time'];
                    $getContract->place = $data['place'];
                    $getContract->cmp9 = $data['cmp9'];
                    $getContract->goals = $data['goals'];
                    $getContract->cmp10 = $data['cmp10'];
                    $getContract->cmp11 = $data['cmp11'];
                    $getContract->price = $data['price'];
                    $getContract->cmp12 = $data['cmp12'];
                    $getContract->cmp13 = $data['cmp13'];
                    $getContract->deadline = $data['deadline'];
                    $getContract->cmp14 = $data['cmp14'];
                    $getContract->cmp15 = $data['cmp15'];
                    $getContract->cmp16 = $data['cmp16'];
                    $getContract->cmp17 = $data['cmp17'];
                    $getContract->cmp18 = $data['cmp18'];
                    $getContract->warranty = $data['warranty'];
                    $getContract->cmp19 = $data['cmp19'];
                    $getContract->cmp20 = $data['cmp20'];
                    $getContract->cmp21 = $data['cmp21'];
                    $getContract->name_hired = $data['name_hired'];
                    $getContract->date_today = $data['date_today'];
                    return $getContract;
                }
                break;
        }

        return false;
    }
    
    public static function getContract($contract){

        switch($contract['type']){
            case 'wedding1':
                $data = Wedding1::select()->where('id', $contract['id'])->one();

                if(!$data){
                    return false;
                }

                if(count($data) > 0){
                    $getContract = new Wedding1();
                    $getContract->id = $data['id'];
                    $getContract->user_id = $data['user_id'];
                    $getContract->contract_name = $data['contract_name'];
                    $getContract->cmp1 = $data['cmp1'];
                    $getContract->service = $data['service'];
                    $getContract->cmp2 = $data['cmp2'];
                    $getContract->cmp3 = $data['cmp3'];
                    $getContract->hired_info = $data['hired_info'];
                    $getContract->cmp4 = $data['cmp4'];
                    $getContract->name = $data['name'];
                    $getContract->cpf = $data['cpf'];
                    $getContract->rg = $data['rg'];
                    $getContract->email = $data['email'];
                    $getContract->cell = $data['cell'];
                    $getContract->address = $data['address'];
                    $getContract->city = $data['city'];
                    $getContract->bride = $data['bride'];
                    $getContract->engaged = $data['engaged'];
                    $getContract->cmp5 = $data['cmp5'];
                    $getContract->cmp6 = $data['cmp6'];
                    $getContract->cmp7 = $data['cmp7'];
                    $getContract->cmp8 = $data['cmp8'];
                    $getContract->date = $data['date'];
                    $getContract->time = $data['time'];
                    $getContract->place = $data['place'];
                    $getContract->cmp9 = $data['cmp9'];
                    $getContract->goals = $data['goals'];
                    $getContract->cmp10 = $data['cmp10'];
                    $getContract->cmp11 = $data['cmp11'];
                    $getContract->price = $data['price'];
                    $getContract->cmp12 = $data['cmp12'];
                    $getContract->cmp13 = $data['cmp13'];
                    $getContract->deadline = $data['deadline'];
                    $getContract->cmp14 = $data['cmp14'];
                    $getContract->cmp15 = $data['cmp15'];
                    $getContract->cmp16 = $data['cmp16'];
                    $getContract->cmp17 = $data['cmp17'];
                    $getContract->cmp18 = $data['cmp18'];
                    $getContract->warranty = $data['warranty'];
                    $getContract->cmp19 = $data['cmp19'];
                    $getContract->cmp20 = $data['cmp20'];
                    $getContract->cmp21 = $data['cmp21'];
                    $getContract->name_hired = $data['name_hired'];
                    $getContract->date_today = $data['date_today'];

                    return $getContract;
                }
                break;
        }

        return false;
    }

}