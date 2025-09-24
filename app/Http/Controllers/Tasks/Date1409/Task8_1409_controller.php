<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Task8_1409_controller extends Controller
{
    public function index(): string
    {
        // Дана дата. Сгенерировать расписание с этой даты на 30 дней по такому принципу: сутки через трое.
        // Если рабочий день приходится на воскресенье, то он переносится на понедельник.  В итоге показать даты рабочих дней.
        //lt() → less than → «меньше чем» (раньше по времени)
        //gt() → greater than → «больше чем» (позже по времени)
        //lte() → less than or equal → «меньше или равно»
        //gte() → greater than or equal → «больше или равно»
        //eq() → equal → «равно»
        //ne() → not equal → «не равно»

        $date = '1.01.2025';
        Carbon::setLocale('ru');
        $dtStart = carbon::parse($date);
        $dtEnd = $dtStart->copy()->addDays(30);

        $i = 0;
        $workDatesArray = [];
        while ($dtStart->lte($dtEnd)) {
            if ($dtStart->dayOfWeek == 6) {
                $dtStart->addDay();
            }

            if ($i == 0) {
                $workDatesArray[] = $dtStart->translatedFormat("d-m-Y (l)");
            }

            if ($i == 3) {
                $i = 0;
            } else {
                $i++;
            }
            $dtStart->addDay();
        }

        $out = '';
        foreach ($workDatesArray as $workDate) {
            $out .= $workDate . '<br>';
        }
        return $out;
    }
}
