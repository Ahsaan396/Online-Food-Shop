<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use Auth;
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

Route::get('/home',[HomeController::class,'index'])->name('index');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/user_profile',[HomeController::class,'user_profile'])->name('user_profile');
Route::get('/user_home',[HomeController::class,'user_home'])->name('user_home');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
