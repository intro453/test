<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Task2_1409_controller extends Controller
{
    public function index()
    {
        return view('tasks.date1409.task2');
    }

    public function calculate(Request $request)
    {
        $date = (string)$request->input('date1');

        $dt = Carbon::parse($date);

        $output=$dt->format('d-m-Y');

        //TODO Изменить время на 10 часов 30 мин 15 сек. Показать дату на экран в формате ‘d/m/Y H:i:s’.

        return redirect()->route('tasks.1409.task2')->with('message', $output);
    }
}
