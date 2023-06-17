<?php

use Illuminate\Support\Facades\Route;
use  \App\Models\Categoria;
use  \App\Http\Controllers\PostController;
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
Route::get('/inicio' , [PostController::class , "index" ] )->name('post.index');
Route::get('/inicio/{id}' , [PostController::class , "show" ] )->name('post.show');



Route::get('/', function () {
    return view('welcome');
});
