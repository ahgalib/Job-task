<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FrontEnd\FrontEndController;


Auth::routes();

Route::get('/',[FrontEndController::class,'show'])->name('category.show');
Route::post('/show/category/ajax',[FrontEndController::class,'showDataInAjax']);

Route::get('/admin/category',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::post('/category/image/store',[CategoryController::class,'categoryImageStore'])->name('category.image.store');
