<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Task1_1409_controller extends Controller
{
    public function index()
    {
        return view('tasks.date1409.task1');
    }

    public function calculate(Request $request)
    {
        $num1 = (int)$request->input('num1');
        $num2 = (int)$request->input('num2');

        $sum = $num1 + $num2;
        return redirect()->route('tasks.1409.task1')->with('message', $sum);
    }
}
