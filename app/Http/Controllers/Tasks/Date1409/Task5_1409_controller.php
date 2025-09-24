<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class Task5_1409_controller extends Controller
{
    public function index()
    {
        //Дан номер месяца текущего года. Вывести все его даты.
        $month = 9;
        $year = Carbon::now()->year;
        // Первая и последняя даты месяца
        $start = Carbon::create($year, $month, 1);
        $end = $start->copy()->endOfMonth();

        // Перебор всех дат
        $period = CarbonPeriod::create($start, $end);
        $out = '';
        foreach ($period as $date) {
            $out .= $date->toDateString() . '<br>';
        }
        return $out;
    }
}
