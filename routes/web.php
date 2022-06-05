<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\ArticleController;

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


// Route::get('info', function() {
//     return "Информация о проекта";
// })->name('static-static-pages.info');
//
// Route::get('articles', function() {
//     return "тут должны быть новости";
// })->name('static-static-pages.articles');

Route::view('/', 'home')->name('home');

Route::get('articles', [HomeController::class, 'index'])->name('static-pages.articles');
Route::get('articles/{article}', [HomeController::class, 'show'])->name('get-article');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::group([
        'prefix' => 'articles',
        'as' => 'articles.'
    ], function () {
        Route::get('create', [ArticleController::class, 'create'])->name('create');
        Route::post('/', [ArticleController::class, 'store'])->name('store');
    });
});
