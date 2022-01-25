<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homeDaily');
Route::post('/date', [App\Http\Controllers\HomeController::class, 'date'])->name('date');
Route::get('/homeWeek', [App\Http\Controllers\weekController::class, 'index'])->name('homeWeekly');
Route::get('/data', [App\Http\Controllers\dataController::class, 'index'])->name('data');
Route::get('/import', [App\Http\Controllers\importController::class, 'index'])->name('import');
Route::post('/dataimport', [App\Http\Controllers\importController::class, 'dataImport'])->name('dataImport');
