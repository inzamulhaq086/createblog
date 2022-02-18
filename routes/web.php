<?php

use App\Http\Controllers\BlogController;
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
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blogfrom', [BlogController::class, 'blogfrom'])->name('blogfrom');
Route::post('/createblog', [BlogController::class, 'blogstore'])->name('blogstore');