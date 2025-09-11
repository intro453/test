<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task6 extends Controller
{
    public function task6()
    {
        $array = range(1, 10);
        shuffle($array);
        $nums = array_slice($array, 0, 3);
        return $nums;
    }
}
