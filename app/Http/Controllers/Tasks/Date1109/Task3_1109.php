<?php

namespace App\Http\Controllers\Tasks\Date1109;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
class Task3_1109 extends Controller
{
    public function index(){
        //Task3. На странице отображаются 10 случайных чисел от 1 до 10 случайного цвета.


        for ($i = 0; $i < 10; $i++) {
            $values[] = rand(0, 10);
        }


        $palette = [
            'red','blue','green','orange','purple',
            'teal','brown','black','gray','pink','yellow','cyan'
        ];
        $colors = Arr::random($palette, 10);

        $items = [];
        foreach ($values as $i => $v) {
            $items[] = ['value' => $v, 'color' => $colors[$i]];
        }


        return view('tasks.date1109.task3', ['items' => $items]);
    }
}
