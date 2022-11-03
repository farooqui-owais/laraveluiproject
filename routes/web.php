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

Route::get('/', function () {
    return view('welcomepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware'=>'checkloggin','checksession'],function(){    
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/first', [App\Http\Controllers\HomeController::class, 'first'])->name('first');
    Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account');
    Route::get('/transactions', [App\Http\Controllers\HomeController::class, 'transactions'])->name('transactions');
    Route::get('/transfer', [App\Http\Controllers\HomeController::class, 'transfer'])->name('transfer');
    Route::get('/beneficary', [App\Http\Controllers\BeneficaryController::class, 'index'])->name('beneficary');
    Route::get('/addbeneficary', [App\Http\Controllers\HomeController::class, 'addBeneficary'])->name('addbeneficary');
    Route::post('/addbeneficary', [App\Http\Controllers\BeneficaryController::class, 'store'])->name('addbeneficary');
    Route::get('/update/{id}', [App\Http\Controllers\BeneficaryController::class, 'update'])->name('update');
    Route::post('/updatebeneficary', [App\Http\Controllers\BeneficaryController::class, 'edit'])->name('updatebeneficary');
    Route::get('/delete/{id}', [App\Http\Controllers\BeneficaryController::class, 'destroy'])->name('delete');
});