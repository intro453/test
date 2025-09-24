<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Task2_1409_controller extends Controller
{   //carbon задача 2
    public function index()
    {
        return view('tasks.date1409.task2');
    }

    public function calculate(Request $request)
    {
        $date = (string)$request->input('date1');

        $dt = Carbon::parse($date);

        $output[0] = $dt->format('d-m-Y');

        $dt->addHours(10)->addMinutes(30)->addSeconds(15);

        $output[1] = $dt->format('d/m/Y H:i:s');

        return redirect()->route('tasks.1409.task2')->with('message', $output);
    }
}
