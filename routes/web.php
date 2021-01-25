<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();
route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin');
route::post('/admin', [App\Http\Controllers\adminController::class, 'store'])->name('add.project');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');