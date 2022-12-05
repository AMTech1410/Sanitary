<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\dashboard;
use  App\Http\Controllers\homeController;
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
    // return view('welcome');
   return view('auth.login');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard',[App\Http\Controllers\dashboard::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/register',[App\Http\Controllers\Auth\RegisteredUserController::class,'create'])->name('register');
// Route::post('/insert-drop-down-value',[App\Http\Controllers\dashboard::class,'statusChange']);
Route::get('changeStatus',[App\Http\Controllers\dashboard::class,'statusChange']);
Route::get('removeUser/{id}',[dashboard::class,'removeUser'])->name('removeUser');
Route::get('editUser/{id}',[dashboard::class,'editUser']);
Route::post('/updateUser',[dashboard::class,'updateUser']);
Route::get('/home',[homeController::class,'index'])->middleware(['auth'])->name('home');
Route::post('/storeSubAdmin',[dashboard::class,'storeSubAdmin'])->name('storeSubAdmin');
Route::get('/insertSubAdmin',[dashboard::class,'insertSubAdmin'])->name('insertSubAdmin');
require __DIR__.'/auth.php';


