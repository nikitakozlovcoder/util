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
        $news = \App\News::paginate(5);
        return view('pages.news', ['news'=> $news]);
    }
    public function tariffs()
    {
        $page = \App\TariffPage::All()->first();      
        return view('pages.tariffs', ['page' => $page]);
    }
    
}
