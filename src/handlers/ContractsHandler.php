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

    public static function saveNewContract($user_id,$contractId,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday){

        if($contractName == ''){
            $contractName = 'Sem Nome';
        }

        Wedding1::insert([
            'user_id' => $user_id,
            'contract_name' => $contractName,
            'cmp1' => $cmp1,
            'service' => $service,
            'cmp2' => $cmp2,
            'cmp3' => $cmp3,
            'hired_info' => $hiredInfo,
            'cmp4' => $cmp4,
            'name' => $name,
            'cpf' => $cpf,
            'rg' => $rg,
            'email' => $email,
            'cell' => $cell,
            'address' => $address,
            'city' => $city,
            'bride' => $bride,
            'engaged' => $engaged,
            'cmp5' => $cmp5,
            'cmp6' => $cmp6,
            'cmp7' => $cmp7,
            'cmp8' => $cmp8,
            'date' => $date,
            'place' => $place,
            'cmp9' => $cmp9,
            'goals' => $goals,
            'cmp10' => $cmp10,
            'cmp11' => $cmp11,
            'price' => $price,
            'cmp12' => $cmp12,
            'cmp13' => $cmp13,
            'deadline' => $deadline,
            'cmp14' => $cmp14,
            'cmp15' => $cmp15,
            'cmp16' => $cmp16,
            'cmp19' => $cmp17,
            'cmp18' => $cmp18,
            'warranty' => $warranty,
            'cmp19' => $cmp19,
            'cmp20' => $cmp20,
            'cmp21' => $cmp21,
            'name_hired' => $nameHired,
            'date_today' => $dateToday
        ])->execute();
        return 'Seu contrato foi salvo com sucesos!';
    }

    public static function updateNewContract($contractId, $user_id,$contractName,$cmp1,$service,$cmp2,$cmp3,$hiredInfo,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$nameHired,$dateToday){

        if($contractName == ''){
            $contractName = 'Sem Nome';
        }

        Wedding1::update()
            ->set('user_id', $user_id)
            ->set('contract_name', $contractName)
            ->set('cmp1', $cmp1)
            ->set('service', $service)
            ->set('cmp2', $cmp2)
            ->set('cmp3', $cmp3)
            ->set('hired_info', $hiredInfo)
            ->set('cmp4', $cmp4)
            ->set('name', $name)
            ->set('cpf', $cpf)
            ->set('rg', $rg)
            ->set('email', $email)
            ->set('cell', $cell)
            ->set('address', $address)
            ->set('city', $city)
            ->set('bride', $bride)
            ->set('engaged', $engaged)
            ->set('cmp5', $cmp5)
            ->set('cmp6', $cmp6)
            ->set('cmp7', $cmp7)
            ->set('cmp8', $cmp8)
            ->set('date', $date)
            ->set('time', $time)
            ->set('place', $place)
            ->set('cmp9', $cmp9)
            ->set('goals', $goals)
            ->set('cmp10', $cmp10)
            ->set('cmp11', $cmp11)
            ->set('price', $price)
            ->set('cmp12', $cmp12)
            ->set('cmp13', $cmp13)
            ->set('deadline', $deadline)
            ->set('cmp14', $cmp14)
            ->set('cmp15', $cmp15)
            ->set('cmp16', $cmp16)
            ->set('cmp17', $cmp17)
            ->set('cmp18', $cmp18)
            ->set('warranty', $warranty)
            ->set('cmp19', $cmp19)
            ->set('cmp20', $cmp20)
            ->set('cmp21', $cmp21)
            ->set('name_hired', $nameHired)
            ->set('date_today', $dateToday)
            ->where('id', $contractId)
        ->execute();
        return 'Seu contrato foi editado com sucesos!';
    }

    public static function getSavesContracts($user_id){
        $data = Wedding1::select()->where('user_id', $user_id)->execute();
        return $data;
        exit;
    }

}