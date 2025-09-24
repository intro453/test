<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Task3_1409_controller extends Controller
{
    public function index()
    {
        return view('tasks.date1409.task3');
    }

    public function calculate(Request $request)
    {
        //Дано две даты. Вывести ту, которая раньше, в формате ‘день-месяц (год)’
        $date1 = (string)$request->input('date1');
        $date2 = (string)$request->input('date2');

        $dt1 = Carbon::parse($date1);
        $dt2 = Carbon::parse($date2);

        //dd($dt1->lt($dt2)); //dt1 раньше чем dt2
        //dd($dt1->gt($dt2)); //dt1 позже чем dt2

        if($dt1->lt($dt2)){
            $output=$dt1->format('d-m (Y)');
        }else{
            $output=$dt2->format('d-m (Y)');
        }

        return redirect()->route('tasks.1409.task3')->with('message', $output);
    }
}
