<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function blogShow()
    {
        return view('landing.blog');
    }

    public function blogArticleShow(Request $request, int $id)
    {
        return view('landing.blog_article');
    }
}
