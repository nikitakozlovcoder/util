<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.index');
    }

    public function edit_about()
    {
        $page = \App\AboutPage::All()->first();
        return view('admin.about', ['page' => $page]);
    }
    public function update_about(Request $request)
    {
        $page = \App\AboutPage::All()->first();
        $page->title1 =  $this->fallback('title1', $request);
        $page->title2 =  $this->fallback('title2', $request);
        $page->title3 =  $this->fallback('title3', $request);
        $page->data1 =  $this->fallback('text1', $request);
        $page->data2 =  $this->fallback('text2', $request);
        $page->data3 =  $this->fallback('text3', $request);
        $page->content =  $this->fallback('content', $request);
        $page->save();
        return redirect()->back();
    }

    public function edit_tariffs()
    {
        $page = \App\TariffPage::All()->first();
        return view('admin.tariffs', ['page' => $page]);
    }

    public function update_tariffs(Request $request)
    {
        $page = \App\TariffPage::All()->first();
        $page->content = $this->fallback('content', $request);
        $page->save();
        return redirect()->back();
    }

    public function news_index()
    {

    }

    public function news($id)
    {

    }
    
}
