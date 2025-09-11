<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task1 extends Controller
{
    public function task1()
    {
        $array=[1,2,3,4,5,6,7];
        $status=[
            'up' => true,
            'down' => true
        ];
        foreach ($array as $key=>$value){
            if(!empty($array[$key+1])){
                if($array[$key+1]!=$value+1) {$status['up']=false;break;}
                if($array[$key+1]!=$value-1) {$status['down']=false;break;}
            }
        }

        return $status;
    }
}
