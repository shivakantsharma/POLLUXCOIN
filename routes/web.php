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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::group(['namespace'=>'App\Http\Controllers\web'], function(){
    Route::get('about',  'IndexController@about');
    Route::get('services',  'IndexController@service');
    Route::get('mining-plans',  'IndexController@miningPlan');
    Route::get('faq',  'IndexController@faq');
    Route::get('contact',  'IndexController@contact');
    Route::post('subscribe',  'IndexController@subscribe');
});
Route::group(['namespace'=>'App\Http\Controllers\Backend','prefix'=>'backend'],
 function(){
    Route::get('dashboard', 'IndexController@index');
    Route::get('newslatter', 'IndexController@newslatter');
});