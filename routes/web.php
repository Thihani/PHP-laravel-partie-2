<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', [HomeController::class, 'show']);

Route::get('/product', [ProductController::class, 'showList']);

Route::get('/product/{id}', [ProductController::class, 'showDetail'])->name('product-detail');

Route::get('/cart', [CartController::class, 'show']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/backoffice',[\App\Http\Controllers\BackofficeController::class,'index']);
Route::post('/backoffice',[\App\Http\Controllers\BackofficeController::class,'add'])->name('backoffice-add');

Route::get('/backoffice/update/{id}',[\App\Http\Controllers\BackofficeController::class,'update']);
Route::put('backoffice/update/{id}', [\App\Http\Controllers\BackofficeController::class,'update'])->name('backoffice-update');

Route::get('/backoffice/delete/{id}',[\App\Http\Controllers\BackofficeController::class,'delete']);
Route::delete('/backoffice/delete/{id}',[\App\Http\Controllers\BackofficeController::class,'delete'])->name('backoffice-delete');

Route::get('category',[\App\Http\Controllers\CategoryController::class,'index']);
