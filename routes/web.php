<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Navigations\WebController;
use App\Http\Controllers\Navigations\CctvController;
use App\Http\Controllers\Navigations\FaqsController;
use App\Http\Controllers\Navigations\HomeController;
use App\Http\Controllers\Navigations\BrandController;
use App\Http\Controllers\Navigations\ContactusController;
use App\Http\Controllers\Navigations\OnlineStoreController;
use App\Http\Controllers\Navigations\ServicepacksController;

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
Route::get('/register',[RegisterController::class , 'index'])->name('register')
->middleware('guest');

Route::post('/register',[RegisterController::class , 'store']);

Route::post('/logout',[LogoutController::class , 'store'])->name('logout');

Route::get('/login',[LoginController::class , 'index'])->name('login')
->middleware('guest');

Route::post('/login',[LoginController::class , 'store']);


Route::get('/home',[HomeController::class , 'index'])->name('home');

Route::get('/servicepacks',[ServicepacksController::class , 'index'])->name('servicepacks');

Route::get('/webdev',[WebController::class , 'index'])->name('webdev');

Route::get('/onlinestore',[OnlineStoreController::class , 'index'])->name('onlinestore');

Route::get('/brand',[BrandController::class , 'index'])->name('brand');

Route::get('/cctv',[CctvController::class , 'index'])->name('cctv');

Route::get('/faqs',[FaqsController::class , 'index'])->name('faqs');

Route::get('/contact-us',[ContactusController::class , 'index'])->name('contact-us');

Route::get('/dashboard',[DashController::class , 'index'])

->name('dashboard')
->middleware('guest')
->middleware('auth');
         
Route::get('/', function () {
    return view('layouts.base');
});
