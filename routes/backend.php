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
Route::get('/admin-page', "adminController@adminHome")->name("adminHome");
Route::post('/admin-page/save-category', "adminController@saveCategory")->name("saveCategory");
Route::get('/add', [servicesController::class,'index'])->name("services");
Route::post('/add/services', [servicesController::class,'store']);
Route::get('/show/services', [servicesController::class,'show'])->name('services.show');
Route::get('/edit/services/{id}', [servicesController::class,'edit'])->name('services.edit');
Route::post('/update/services/{id}', [servicesController::class,'update']);
Route::get('/destroy/services/{id}', [servicesController::class,'destroy'])->name('services.destroy');


Route::get('/admin-page/add-Post', "adminController@addPost")->name("addPost");
Route::get('/admin-page/contact', "adminController@contact")->name("contact");
Route::get('/admin-page/edit-Post/{id}', "adminController@editPost")->name("editPost");
Route::post('/admin-page/save-Post', "adminController@savePost")->name("savePost");
Route::put('/admin-page/update-Post/{id}', "adminController@updatePost")->name("updatePost");
Route::DELETE('/admin-page/delete-Post/{id}', "adminController@deletePost")->name("deletePost");

Route::delete('/delete-contact/{id}', "adminController@deletecontact")->name("deletecontact");


Route::post('/admin-page/save-area', "adminController@savearea")->name("savearea");


Route::put('/admin-page/option/{id}', "adminController@optionupdate")->name("optionupdate");
