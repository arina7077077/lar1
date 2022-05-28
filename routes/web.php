<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
Route::get('home', [HomeController::class, 'index']);


// ------


// Route::get('/hello/{name}', function(string $name)
// {
//     return "Hello, " . $name;
// });
Route::get('/hello/{name}', [HomeController::class, 'index']);


// ------


Route::get('info', function() {
    return "Информация о проекта";
})->name('static-static-pages.info');

Route::get('articles', function() {
    return "тут должны быть новости";
})->name('static-static-pages.articles');

Route::get('articles/{id}', [HomeController::class, 'show'])->name('get-article');

Route::get('home', [HomeController::class, 'index'])->name('home-page');
Route::get('admin', [])->name('admin');
