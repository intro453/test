<?php

namespace App\Http\Controllers\Tasks\Date0709;

use App\Http\Controllers\Controller;

class Task4 extends Controller
{
    public function task4()
    {
        $codes = ['495','499','812','900','901','902']; // варианты кодов
        $code = $codes[array_rand($codes)];             // случайный код
        $number = str_pad(rand(0, 9999999), 7, '0', STR_PAD_LEFT); // 7 цифр
        $phone = "+7($code)$number";
        return $phone;
    }
}
