<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GobiernoController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('taraco/historia', function () {
    return view('taraco.historia');
})->name('taraco.historia');
Route::get('taraco/concejo-municipal', function () {
    return view('taraco.municipalidad');
})->name('taraco.municipalidad');
Route::get('taraco/himno-taraco', function () {
    return view('taraco.himno');
})->name('taraco.himno');
Route::get('taraco/hubicacion-taraco', function () {
    return view('taraco.ubicacion');
})->name('taraco.ubicacion');

Route::resource('contacto', ContactController::class)->names('taraco.contacts');


Route::get('gobierno/{doc}',[GobiernoController::class,'show'])->name('gobierno.show');

Route::get('documentos-categoria/{category}',[DocumentController::class,'category'])->name('documento.categoria');

Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('posts/categoria/{category}',[PostController::class,'category'])->name('posts.category');
Route::get('posts/etiqueta/{tag}',[PostController::class,'tag'])->name('posts.tag');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
