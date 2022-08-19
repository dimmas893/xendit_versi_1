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


Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);
Route::post('/store', [App\Http\Controllers\XenditController::class, 'welcome'])->name('store');
Route::post('/invoice', [App\Http\Controllers\XenditController::class, 'invoice'])->name('invoice');
Route::get('/bayar', [App\Http\Controllers\XenditController::class, 'bayar'])->name('bayar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
