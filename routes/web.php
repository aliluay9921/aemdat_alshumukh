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



Auth::routes();
route::middleware(['auth'])->group(function () {

    // route::get('/admin', [App\Http\Controllers\adminController::class, 'getinfo'])->name('getinfo');



    route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin');
    route::get('project', [App\Http\Controllers\adminController::class, 'get'])->name('project');
    route::post('project', [App\Http\Controllers\adminController::class, 'store'])->name('add.project');
    route::put('project', [App\Http\Controllers\adminController::class, 'update'])->name('update.project');
    route::post('delete', [App\Http\Controllers\adminController::class, 'delete'])->name('delete');

    route::get('project-not', [App\Http\Controllers\adminController::class, 'fetch'])->name('projectnot');
    route::get('project-completed/{id}', [App\Http\Controllers\adminController::class, 'completed'])->name('completed.project');


    route::get('get-staf-machen', [App\Http\Controllers\adminController::class, 'staf'])->name('add.staf');
    route::put('staf', [App\Http\Controllers\adminController::class, 'edit'])->name('edit.staf');
    route::put('machin', [App\Http\Controllers\adminController::class, 'machin'])->name('edit.machin');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');