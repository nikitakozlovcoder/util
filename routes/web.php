<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/news', 'PagesController@news');
Route::get('/tariffs', 'PagesController@tariffs');
Route::get('/houses', 'PagesController@houses');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/about', 'AdminController@edit_about');
Route::post('/admin/about', 'AdminController@update_about');
Route::get('/admin/tariffs', 'AdminController@edit_tariffs');
Route::post('/admin/tariffs', 'AdminController@update_tariffs');

Route::get('/admin/news', 'AdminController@news_index')->name('admin.news_index');
Route::get('/admin/news/new', 'AdminController@new_news');
Route::post('/admin/news/new', 'AdminController@create_news');
Route::get('/admin/news/{id}', 'AdminController@edit_news');
Route::post('/admin/news/{id}', 'AdminController@update_news');
Route::post('/admin/news/{id}/delete', 'AdminController@delete_news');
Route::get('/admin/houses', 'AdminController@house_index')->name('admin.house_index');
Route::get('/admin/house/new', 'AdminController@new_house');
Route::post('/admin/house/new', 'AdminController@create_house');
Route::get('/admin/house/{id}', 'AdminController@edit_house');
Route::post('/admin/house/{id}', 'AdminController@update_house');
Route::post('/admin/house/{id}/delete', 'AdminController@delete_house');

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

#filemanager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

#auth middleware
Auth::routes();
#POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web        |
#|        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web        |
#|        | POST     | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web        |
#|        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web        |
#|        | GET|HEAD | register               |                  | Closure                                                                | web        |
#|        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web        |
Route::get('/register', function(){abort(404);});
Route::post('/register', function(){abort(404);});
Route::get('/password/reset', function(){abort(404);});
Route::post('/password/reset', function(){abort(404);});
Route::get('password/reset/{token}', function(){abort(404);});
