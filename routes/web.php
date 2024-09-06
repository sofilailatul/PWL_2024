<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController; 

Route::resource('photos', PhotoController::class); 
Route::get('/', [HomeController::class, 'welcome']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Praktikum 8 No 11
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
    ]); 
    Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
    ]); 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


