<?php

use App\Http\Controllers\DesignController;
use App\Http\Controllers\PublicController;
use App\Models\Design;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class,"welcome"])->name('welcome');

Route::get('/article/create',[DesignController::class,"create"])->name('article_create');

Route::post('/article/store',[DesignController::class,"store"])->name('article_store');
Route::get('/article/index',[DesignController::class,"index"])->name('article_index');

Route::get('/article/show/{product}',[DesignController::class,"show"])->name('article_show');

Route::get('/article/edit/{product}',[DesignController::class,'edit'])->name('article_edit');
Route::post('/article/update/{product}',[DesignController::class,'update'])->name('article_update');

Route::delete('/article/destroy/{product}',[DesignController::class,'destroy'])->name('article_destroy');

Route::get('/profile',[PublicController::class, "profile"])->name('profile_page');

Route::get('/console/filter/{console}',[PublicController::class, "console_filter"])->name('console_filter');
