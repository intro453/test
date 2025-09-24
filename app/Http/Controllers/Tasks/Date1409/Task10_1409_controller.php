<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Task10_1409_controller extends Controller
{
    public function index()
    {
        //Дан режим работы интернет-магазина. ПН 9:00 – 21:00 ВТ 9:00 – 21:00 СР 9:00 – 21:00 ЧТ 9:00 – 21:00 ПТ 9:00 – 21:00 СБ 10:00 – 18:00 ВС 10:00 – 18:00.
        // И даны дата и время. Определить, работает ли в это время магазин и сколько минут до конца рабочей смены.

        $dt = Carbon::parse('24.09.2025 20:15'); // текущая дата

        $day = $dt->isoWeekday(); // 1-7

        if ($day >= 1 && $day <= 5) {
            $start = $dt->copy()->setTime(9, 0);
            $end = $dt->copy()->setTime(21, 0);
        } else {
            $start = $dt->copy()->setTime(10, 0);
            $end = $dt->copy()->setTime(18, 0);
        }

        if ($dt->gte($start) && $dt->lte($end)) {
            echo "Магазин работает\n";
            echo "Осталось минут: " . $dt->diffInMinutes($end);
        } else {
            echo "Магазин закрыт\n";
        }
    }
}
