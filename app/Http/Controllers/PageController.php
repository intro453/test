<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request, int $id)
    {
        return 'Это число ' . $id;
    }

}
