<?php

use App\Http\Controllers\services\servicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::post('/change-language', 'mainController@changeLanguage')->name('changeLanguage');

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Route::get('/', "mainController@index")->name("index");
Route::get('/projects', "mainController@projects")->name("projects");
Route::get('/services', "mainController@services")->name("services");
Route::get('/contact', "mainController@contact")->name("contact");
Route::post('/save-contact', "mainController@savecontact")->name("savecontact");

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





});
