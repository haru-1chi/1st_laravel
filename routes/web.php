<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog',[AdminController::class,'index'])->name('blog');

Route::get('create',[AdminController::class,'create']);

Route::get('about',[AdminController::class,'about'])->name('about');

Route::fallback(function () {
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});