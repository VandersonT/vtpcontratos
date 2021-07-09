<?php
namespace src\handlers;

use \src\models\Wedding1;

class ContractsHandler {

    public static function getContractWedding($id){

        $verificationData = Wedding1::select()->where('id', $id)->execute();
        if(count($verificationData) > 0){
            $data = Wedding1::select()->where('id', $id)->one();
            
            $contractChoosen = new Wedding1();
            $contractChoosen->id = $data['id'];
            $contractChoosen->cmp1 = $data['cmp1'];
            $contractChoosen->service = $data['service'];
            $contractChoosen->cmp2 = $data['cmp2'];
            $contractChoosen->cmp3 = $data['cmp3'];
            $contractChoosen->hired_info = $data['hired_info'];
            $contractChoosen->cmp4 = $data['cmp4'];
            $contractChoosen->name = $data['name'];
            $contractChoosen->cpf = $data['cpf'];
            $contractChoosen->rg = $data['rg'];
            $contractChoosen->email = $data['email'];
            $contractChoosen->cell = $data['cell'];
            $contractChoosen->address = $data['address'];
            $contractChoosen->city = $data['city'];
            $contractChoosen->bride = $data['bride'];
            $contractChoosen->engaged = $data['engaged'];
            $contractChoosen->cmp5 = $data['cmp5'];
            $contractChoosen->cmp6 = $data['cmp6'];
            $contractChoosen->cmp7 = $data['cmp7'];
            $contractChoosen->cmp8 = $data['cmp8'];
            $contractChoosen->date = $data['date'];
            $contractChoosen->time = $data['time'];
            $contractChoosen->place = $data['place'];
            $contractChoosen->cmp9 = $data['cmp9'];
            $contractChoosen->goals = $data['goals'];
            $contractChoosen->cmp10 = $data['cmp10'];
            $contractChoosen->cmp11 = $data['cmp11'];
            $contractChoosen->price = $data['price'];
            $contractChoosen->cmp12 = $data['cmp12'];
            $contractChoosen->cmp13 = $data['cmp13'];
            $contractChoosen->deadline = $data['deadline'];
            $contractChoosen->cmp14 = $data['cmp14'];
            $contractChoosen->cmp15 = $data['cmp15'];
            $contractChoosen->cmp16 = $data['cmp16'];
            $contractChoosen->cmp17 = $data['cmp17'];
            $contractChoosen->cmp18 = $data['cmp18'];
            $contractChoosen->warranty = $data['warranty'];
            $contractChoosen->cmp19 = $data['cmp19'];
            $contractChoosen->cmp20 = $data['cmp20'];
            $contractChoosen->cmp21 = $data['cmp21'];
            $contractChoosen->name_hired = $data['name_hired'];
            $contractChoosen->date_today = $data['date_today'];

            return $contractChoosen;
        }
        return false;
    }

    public static function saveContractWedding($cmp1,$service,$cmp2,$cmp3,$hired_info,$cmp4,$name,$cpf,$rg,$email,$cell,$address,$city,$bride,$engaged,$cmp5,$cmp6,$cmp7,$cmp8,$date,$time,$place,$cmp9,$goals,$cmp10,$cmp11,$price,$cmp12,$cmp13,$deadline,$cmp14,$cmp15,$cmp16,$cmp17,$cmp18,$warranty,$cmp19,$cmp20,$cmp21,$name_hired,$date_today,$id,$action,$idContract){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());


        if($action == 'save'){
            Wedding1::insert([
                'user_id' => $id,
                'cmp1' => $cmp1,
                'service' => $service,
                'cmp2' => $cmp2,
                'cmp3' => $cmp3,
                'hired_info' => $hired_info,
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
                'time' => $time,
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
                'cmp17' => $cmp17,
                'cmp18' => $cmp18,
                'warranty' => $warranty,
                'cmp19' => $cmp19,
                'cmp20' => $cmp20,
                'cmp21' => $cmp21,
                'name_hired' => $name_hired,
                'date_today' => $date_today
            ])->execute();
        }else{
            Wedding1::update()
                ->set('user_id', $id)
                ->set('cmp1', $cmp1)
                ->set('service', $service)
                ->set('cmp2', $cmp2)
                ->set('cmp3', $cmp3)
                ->set('hired_info', $hired_info)
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
                ->set( 'cmp21', $cmp21)
                ->set('name_hired', $name_hired)
                ->set('date_today', $date_today)
            ->where('id', $idContract)
            ->execute();
        }
        
        return true;
    }

    public static function getSavesWedding1($id){
        $verificationContracts = Wedding1::select()->where('user_id', $id)->execute();
        if(count($verificationContracts) > 0){
            $data = Wedding1::select()->where('user_id', $id)->execute();

            return $data;
        }
        return false;
    }

}