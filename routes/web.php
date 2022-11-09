<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/',function (){
   return redirect('/setting/lich-hen');
});
Route::get('/menu','HomeController@settingMenu');
Route::post('/menu','HomeController@createMenu');

Route::get('/edit/{str}','HomeController@edit');
Route::get('/edit/{str}/{str1}','HomeController@edit');
Route::get('/edit/{str}/{str1}/{str2}','HomeController@edit');

Route::get('/{str}/{str1}', 'HomeController@index');
Route::get('/{str}/{str1}/{str2}', 'HomeController@index');


//Route::group(['middleware' => 'auth'], function () {
//
//    Route::get('test', function () {
//        $message = 'ngon ngay';
//        $type = 'alert-danger';
////   return view('test',compact('message','type'));
//        return view('test')->with(['type' => 'alert-danger', 'message' => 'ngon ngay']);
//    });
//});
Route::post('/test','HomeController@test');
Route::post('/upload','HomeController@upload')->name('ckeditor.upload');
