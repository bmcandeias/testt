<?php

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

use App\Http\Controllers\API\PostController;
use Illuminate\Routing\RouteBinding;

Route::get('/', function () {
    return view('Index.index');
});

Auth::routes();

Auth::routes();
Route::get('/index', 'HomeController@home');
Route::get('/encomendar', 'MercadoriasController@create');
Route::resource('perfil','HomeController');

Route::group(['middleware' => ['auth']],function(){

    Route::group(['middleware' => ['admin']],function(){

        Route::resource('cliente','ClienteController');
        Route::resource('encomenda','MercadoriasController');

    });
    Route::resource('encomendar','EncomendarController');
});
