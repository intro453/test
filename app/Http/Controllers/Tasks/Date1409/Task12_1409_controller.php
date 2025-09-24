<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Task12_1409_controller extends Controller
{
    public function index(){
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

        $dates = ['12.09.2017', '14.09.2017-02.10.2017'];
        $inputDate = '01.10.2017-05.10.2017';

        $inputDates = $this->parseInputDates($inputDate);



    }
}
