<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

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
Route::get('/posts/create',[BlogPostController::class, 'create'])->name('create');
Route::post('/posts', [BlogPostController::class, 'store'])->name('store');
Route::get('/searchitem',[BlogPostController::class, 'searchitem'])->name('searchitem');
Route::post('/search', [BlogPostController::class, 'search'])->name('search');
Route::get('/welcome',[BlogPostController::class, 'index'])->name('index');
Route::get('update/{id}', [BlogPostController::class, 'update'])->name('update');
Route::post('/blog/update', [BlogPostController::class, 'updateblog'])->name('updateblog');
Route::get('delete/{id}', [BlogPostController::class, 'delete'])->name('delete');


