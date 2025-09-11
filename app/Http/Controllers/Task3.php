<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task3 extends Controller
{
    public function task3()
    {
        $row = "  abc";
        $num = 9;

        $text = trim($row);
        $text_count = strlen($text);

        $need_spaces_left = intval(($num - $text_count) / 2);
        $need_spaces_right = $num - ($need_spaces_left + $text_count);

        //$need_spaces=intdiv($need_spaces,2); // удерживать симметрию

        //$row_result=str_pad($text, $num, " ", STR_PAD_BOTH); //проще всего

        $row_result = str_repeat('&nbsp', $need_spaces_left) . $text . str_repeat('&nbsp', $need_spaces_right);

        return ":" . $row_result . ":";
    }
}
