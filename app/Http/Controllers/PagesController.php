<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
        return view('pages.home');
    }
    public function about()
    {
        $page = \App\AboutPage::All()->first();      
        return view('pages.about', ['page' => $page]);
    }
    public function news()
    {
        return view('pages.news');
    }
    public function tariffs()
    {
        return view('pages.tariffs');
    }
    
}
