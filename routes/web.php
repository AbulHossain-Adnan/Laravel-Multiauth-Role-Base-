<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\PostController;

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

// Route::PUT('/student/update/{id}',[App\Http\Controllers\StudentController::class,'update']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/login',[App\Http\Controllers\AdminController::class, 'showlogin']);





