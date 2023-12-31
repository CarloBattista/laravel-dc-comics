<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController as ComicController;
use App\Models\Comic;
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

// Route::resource("/comics", ComicController::class);

Route::get('/', function () {
    return view('pages.home' );
})->name('home');

Route::get('/', [ComicController::class, 'getHome'])->name('home');

Route::get('/{comics}', [ComicController::class, 'show'])->name('show');

// Route::get('/edit', [ComicController::class, 'edit'])->name('edit');


Route::resource('/comics', ComicController::class);