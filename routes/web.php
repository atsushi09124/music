<?php

use App\Http\Controllers\NiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ScaleController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/scales/index', function () {
    return view('scales.index');
})->middleware(['auth'])->name('scales.index');

Route::get('/scales/scale/{key}',[ScaleController::class,'scale'])
->middleware(['auth'])->name('scales.scale');

Route::resource('/posts',PostController::class);

Route::get('/niceArtisan',[NiceController::class,'niceArtisan'])
->middleware('auth')->name('nices.niceArtisan');


require __DIR__.'/auth.php';
