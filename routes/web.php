<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('blog', [BlogController::class, 'blog'])->name('blog');
    Route::get('blogfrom', [BlogController::class, 'blogfrom'])->name('blogfrom');
    Route::post('/createblog', [BlogController::class, 'blogstore'])->name('blogstore');
    Route::get('/copyblog/{id}', [BlogController::class, 'copyblog'])->name('copyblog');
    Route::get('/editblog/{id}', [BlogController::class, 'editblog'])->name('editblog');
    Route::post('/updateblog/{id}', [BlogController::class, 'updateblog'])->name('updateblog');
    Route::get('/deleteblog/{id}', [BlogController::class, 'deleteblog'])->name('deleteblog');

    Route::resource('/tests', TestController::class);
});
