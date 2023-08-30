<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view', [App\Http\Controllers\HomeController::class, 'viewpost'])->name('viewpost');
Route::get('/viewpost_home', [App\Http\Controllers\HomeController::class, 'viewpost_home'])->name('viewpost_home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::namespace('Auth')->post('/store-post', [HomeController::class, 'store']);

Route::get('delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('updateposts', [App\Http\Controllers\HomeController::class, 'updateposts'])->name('updateposts');

Route::get('edit/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::post('edit_save/{id}', [App\Http\Controllers\HomeController::class, 'edit_save'])->name('edit_save');

