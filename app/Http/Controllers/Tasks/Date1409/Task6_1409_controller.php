<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Task6_1409_controller extends Controller
{
    public function index()
    {
        //Дана дата. Вывести, сколько дней до нее осталось (или сколько дней прошло).
        $date = '31.12.2024';

        $dt = carbon::parse($date);
        $now = carbon::now();

        $diff = $now->diffInDays($dt,false);

        if ($diff > 0) {
            return 'до даты осталось ' . abs($diff) . ' дней';
        } else {
            return 'дней прошло ' . abs($diff) . ' дней';
        }
    }
}
