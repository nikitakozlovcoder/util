<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//"/".implode(array_slice(explode("/", "http://localhost/storage/files/shares/LDrziA8 (1).png"), 3), "/");
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
        $news = \App\News::orderBy('id', 'DESC')->paginate(5);
        return view('admin.news_index', ['news'=> $news]);
    }
    public function delete_news($id)
    {
        $news = \App\News::destroy($id);
        return redirect()->back();
    }

    public function edit_news($id)
    {
        $news = \App\News::FindOrFail($id);
        return view('admin.news', ['news'=> $news]);
    }

    public function update_news($id, Request $request)
    {
        $news = \App\News::FindOrFail($id);
        $news->title = $this->fallback('title', $request);
        $news->mydate = $this->fallback('date', $request);
        $news->thumb = $this->fallback('thumb', $request);
        $news->content = $this->fallback('content', $request);
        $news->save();
        return redirect()->route('admin.news_index');
    }
    public function new_news()
    {
        $news = new \App\News();
        return view('admin.news', ['news'=> $news]);
    }

    public function create_news(Request $request)
    {
        $news = new \App\News();
        $news->title = $this->fallback('title', $request);
        $news->mydate = $this->fallback('date', $request);
        $news->thumb = $this->fallback('thumb', $request);
        $news->content = $this->fallback('content', $request);
        $news->save();
        return redirect()->route('admin.news_index');
    }

    public function new_house()
    {
        $house = new \App\House();
        return view('admin.house', ['house'=> $house]);
    }

    public function create_house(Request $request)
    {
        $house = new \App\House();
        $house->title = $this->fallback('title', $request);
        $house->date_in = $this->fallback('date_in', $request);
        $house->date_out = $this->fallback('date_out', $request);
        $house->thumb = $this->fallback('thumb_real', $request);
        $house->imgs = $this->fallback('imgs_real', $request, "[]");
        $house->content = $this->fallback('content', $request);
        $house->alive = $request->has('alive');
        $house->date_built = $this->fallback('date_built', $request);
        $house->cad_number = $this->fallback('cad_number', $request);
        $house->area_wide = $this->fallback('area_wide', $request);
        $house->area_small = $this->fallback('area_small', $request);
        $house->material_wall = $this->fallback('material_wall', $request);
        $house->material_floor = $this->fallback('material_floor', $request);
        $house->save();
        return redirect()->route('admin.house_index');
    }
    
}
