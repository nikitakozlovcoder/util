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
Route::get('/admin', 'AdminController@index');
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
