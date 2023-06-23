<?php

use Illuminate\Support\Facades\Route;
use  \App\Models\Categoria;
use  \App\Http\Controllers\PostController;
use  \App\Http\Controllers\login;


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
Route::get('/create' , [PostController::class , "create" ] )->middleware('auth')->name('post.create');

//busqueda por filtro
Route::get('/categoria/{id}' , [PostController::class , "categoriaShow" ] )->name('categoria.busqueda');
Route::get('/subcategoria/{id}' , [PostController::class , "subcategoriaShow" ] )->name('subcategorias.busqueda');


Route::post('/subiendo' , [PostController::class , "store" ] )->name('post.store');

Route::get('/descaga{id}/mods' , [PostController::class , "descarga" ] )->name('post.descarga');

Route::post('/comentario-post' , [PostController::class , "comentario" ] )->middleware('auth')->name('comentario.post');

//reacciones
Route::post(   '/like-post-conter'  , [PostController::class , 'like'] )->middleware('auth')->name('like.add');
Route::post(   '/dislike-post-conter'  , [PostController::class , 'dislike'] )->middleware('auth')->name('dislike.add');
Route::post(   '/ilove-post-conter'  , [PostController::class , 'ilove'] )->middleware('auth')->name('ilove.add');
//login 

Route::get('/register' , [login::class , 'register'])->name('register');
Route::post('/register' , [login::class , 'registerAuht'])->name('register.post');




Route::get('/login'  , [login::class , 'login'])->name('login');
Route::post('/login'  , [login::class , 'auht'])->name('login');

Route::get( '/selectSub/{id}' , function ($id) {
    $subcategorias = Categoria::find($id);
    return json_encode( $subcategorias->subcategorias );
})->name('select');

Route::get('/', function () {
    return redirect('/inicio');
});
