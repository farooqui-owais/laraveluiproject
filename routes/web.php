<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
//use App\Http\Controllers\MainController;
use App\Http\Controllers\BeneficaryController;

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


/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Auth::routes();
/*Route::group(['middleware'=>'checkloggin','checksession','auth:api'],function(){    
    
});*/

//Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');

Route::post('api/fetch-states', [DropdownController::class, 'fetchState']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
/*
Route::controller(AuthOtpController::class)->group(function(){
    
    //Route::post('otpgenerate', 'generate')->name('otpgenerate');
 //   Route::get('otp/verification/{user_id}', 'verification')->name('otpverification');
   // Route::get('otplogin','login')->name('otplogin');
   // Route::post('otplogin','loginWithOtp')->name('otpgetlogin');
});*/


Route::group(['middleware' => 'authcheck'],function () {
   // Route::get('otplogin',[AuthOtpController::class, 'login'])->name('otplogin');
   // Route::post('otplogin',[AuthOtpController::class,'loginWithOtp'])->name('otpgetlogin');
  //  Route::post('otpgenerate',[AuthOtpController::class, 'generate'])->name('otpgenerate');
   // Route::get('otpverification/{user_id}',[AuthOtpController::class,'verification'])->name('otpverification');
    Route::get('register', [DropdownController::class, 'index'])->name('register');
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::get('home', [HomeController::class,'index'])->name('home');
    Route::get('profile', [HomeController::class,'profile'])->name('profile');
    Route::get('getHome',  [HomeController::class,'getHome'])->name('gethome');
    Route::get('first',  [HomeController::class,'first'])->name('first');
    Route::get('account', [HomeController::class,'account'])->name('account');
    Route::get('transactions', [HomeController::class,'transactions'])->name('transactions');
    Route::get('transfer', [HomeController::class,'transfer'])->name('transfer');
    Route::get('beneficary', [BeneficaryController::class,'index'])->name('beneficary');
    Route::post('savebeneficary', [BeneficaryController::class,'store'])->name('savebeneficary');
    Route::get('update/{id}', [BeneficaryController::class,'update'])->name('update');
    Route::post('updatebeneficary', [BeneficaryController::class,'edit'])->name('updatebeneficary');
    Route::get('delete/{id}',  [BeneficaryController::class,'destroy'])->name('delete');
    Route::get('addbeneficary', [BeneficaryController::class,'addBeneficary'])->name('addbeneficary');

});