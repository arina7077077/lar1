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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);


// ------


// Route::get('/hello/{name}', function(string $name)
// {
//     return "Hello, " . $name;
// });
Route::get('/hello/{name}', [\App\Http\Controllers\HomeController::class, 'index']);


// ------


Route::get('info', function() {
    return "Информация о проекта";
})->name('static-pages.info');

Route::get('articles', function() {
    return "тут должны быть новости";
})->name('static-pages.articles');

Route::get('articles/{id}', [\App\Http\Controllers\HomeController::class, 'show'])->name('get-article');
