<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackofficeController;
use App\Models\Article;
use App\Models\Backoffice;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

// Route::resource('articles', Article::class);
// Route::resource('backoffice', Backoffice::class);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/backoffice', [BackofficeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
