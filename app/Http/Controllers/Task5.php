<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task5 extends Controller
{
    public function task5()
    {
        $array = [0, 1, 0, 0, 0, 2, 3, 0, 0];

        $count = 0;
        $max = 0;
        foreach ($array as $key => $value) {
            if ($value == 0) {
                $count++;
            } else {
                if ($count > $max) $max = $count;
                $count = 0;
            }
        }

        return $max;
    }
}
