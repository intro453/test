<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Task12_1409_controller extends Controller
{
    public function index()
    {
        /*
            Дан массив дат бронирования номера в отеле.
            Элемент массива или одна дата, или период – две даты через дефис.
            Пример: $dates = [‘12.09.2017’, ‘14.09.2017-02.10.2017’];
            Выяснить можно ли добавить в массив данную дату или
            период для нового бронирования.
            Например, для указанного выше примера период
            ‘01.10.2017-05.10.2017’ добавлять нельзя,
            так как первые два дня уже забронированы.
        */

        $datesAleadyUsed = ['12.09.2017', '14.09.2017-02.10.2017'];
        $inputDate = '01.10.2017-05.10.2017';

        $datesAleadyUsedArray=$this->parceDates($datesAleadyUsed);
        $inputDateArray=$this->parceDates($inputDate);

        if (array_intersect($datesAleadyUsedArray, $inputDateArray)) {
            return "нельзя добавить";
        }else{
            return "можно добавить";
        }

    }

    private function parceDates(array|string $dates): array
    {
        if (is_string($dates)) {
            $dates = [$dates];
        }
        foreach ($dates as $date) {
            if (Str::contains($date, '-')) {
                $explode = explode('-', $date);
                $dateStart = Carbon::parse(trim($explode[0]));
                $dateEnd = Carbon::parse(trim($explode[1]));
                for ($date = $dateStart->copy(); $date->lte($dateEnd); $date->addDay()) {
                    $strDate = $date->format('d.m.Y');
                    $datesOutArray[$strDate] = $strDate;
                }
            } else {
                $datesOutArray[$date] = $date;
            }
        }
        return $datesOutArray;
    }
}
