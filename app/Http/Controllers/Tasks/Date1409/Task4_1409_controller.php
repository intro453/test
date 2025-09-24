<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Task4_1409_controller extends Controller
{
    public function index()
    {
        $days = Carbon::now()->daysInMonth;
        return $days;
    }
}
