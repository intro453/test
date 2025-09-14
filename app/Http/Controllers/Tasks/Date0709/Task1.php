<?php

namespace App\Http\Controllers\Tasks\Date0709;

use App\Http\Controllers\Controller;

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

        //$date="123{$test}";
        //$date2="123{$test}";
        //$date3="123{$test}";

        //$products=array(1,2,3);

        //return view("test.test",['date' => $date,'date2' => $date],'date3' => $date]);
        //return view("test.test",compact('date,date2,date3',$products));
        //
    }
}
