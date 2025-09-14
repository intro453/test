<?php

namespace App\Http\Controllers\Tasks\Date0709;

use App\Http\Controllers\Controller;

class Task2 extends Controller
{
    public function task2()
    {
        $row = "23456789";

        $row_rev = strrev($row);
        $row_result = "";
        for ($i = 0; $i < strlen($row_rev); $i++) {
            $row_result .= $row_rev[$i];
            if ($i % 3 == 2) {
                $row_result .= " ";
            }
        }
        $row_result = strrev($row_result);
        return $row_result;
    }
}
