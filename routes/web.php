<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ArticlesController;
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
    return view('admin.articles');
});

Route::group(['prefix'=>'admin'],function(){

    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::resource('categories',CategoriesController::class);
    Route::resource('articles',ArticlesController::class);

});
