<?php

use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\PolicyController;
use App\Http\Controllers\Back\ProfileController;
use App\Http\Controllers\Back\UserController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gate',[AdminController::class,'index'])->name('gate.index');
Route::get('/profile',[ProfileController::class,'index'])->name('users.profile');
Route::post('/profile',[ProfileController::class,'store'])->name('users.store');
Route::get('/policy',[PolicyController::class,'index'])->name('policy.index');
Route::get('/policy/{policy}',[PolicyController::class,'show'])->name('policy.show');
Route::delete('/policy/delete/{policy}',[PolicyController::class,'destroy'])->name('policy.delete');
Route::get('/users/show',[UserController::class,'index'])->name('user.index');
