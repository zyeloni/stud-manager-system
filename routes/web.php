<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/news/', [\App\Http\Controllers\NewsController::class, 'index'])->name('dashboard.news');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('dashboard.news.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/news/create', [\App\Http\Controllers\NewsController::class, 'create_store'])->name('dashboard.news.create_store');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/news/update/{id}', [\App\Http\Controllers\NewsController::class, 'update'])->name('dashboard.news.update');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/news/update', [\App\Http\Controllers\NewsController::class, 'update_store'])->name('dashboard.news.update_store');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/news/delete/{id}', [\App\Http\Controllers\NewsController::class, 'delete'])->name('dashboard.news.delete');

Route::get('/', function () {
    return redirect()->route("dashboard");
});

