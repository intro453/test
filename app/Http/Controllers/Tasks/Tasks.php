<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tasks extends Controller
{
    public function index()
    {
        return view('tasks.tasks');
    }
}
