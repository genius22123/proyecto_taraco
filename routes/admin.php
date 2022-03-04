<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Slider_PrincipalController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\Gobierno_docController;
use App\Http\Controllers\Admin\Category_documentController;
use App\Http\Controllers\Admin\Post_documentController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Admin\contacto;

Route::get('',[HomeController::class,'index'])->name('admin.home');

Route::resource('sliders', Slider_PrincipalController::class)->names('admin.sliders');

Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('portfolios', PortfolioController::class)->names('admin.portfolios');
Route::resource('files', Gobierno_docController::class)->names('admin.files');

Route::resource('documentos/normativos/categories', Category_documentController::class)->names('admin.documentos-normativos-categories');

Route::resource('documentos/normativos/posts', Post_documentController::class)->names('admin.documentos-normativos-posts');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::get('contacto',[contacto::class,'index'])->name('admin.contacts.index');