<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    public function add(){
        return view('index.prize');
    }

    public function start(){
        $rand = mt_rand(1,10);
        $prize = 0;
        if($rand == 6){
            $prize = 1;
        }else if($rand == 2){
            $prize = 2;
        }else if($rand == 3){
            $prize = 3;
        }else{
            //谢谢惠顾
            $prize = 0;
        }
        $data = [
            'erron' => 0,
            'msg' => 'ok',
            'data' => [
                'prize'=>$prize
            ]
        ];
        return $data;
    }

    public function mvindex(){
        return view('index.movie');
    }
}
