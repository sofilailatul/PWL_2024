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

// Praktikum 2 No 11
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
    ]); 
    Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
    ]); 

// Praktikum 3 No 2 dan 6
Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Sofi']); 
    }); 

// Praktikum 3 No 9
Route::get('/greeting', [WelcomeController::class, 
'greeting']); 


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


