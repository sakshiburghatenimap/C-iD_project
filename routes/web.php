<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserauthController;
use App\Http\Controllers\ProductController;
 


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


/*-----------------------------------Users Routes----------------------------------------*/

Route::get('dashboard', [UserauthController::class, 'dashboard']); 
Route::get('login', [UserauthController::class, 'index'])->name('login');
Route::post('custom-login', [UserauthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [UserauthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserauthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [UserauthController::class, 'signOut'])->name('signout');


/*-------------------------Product Routes--------------------------------------------------*/


Route::resource('products', ProductController::class);