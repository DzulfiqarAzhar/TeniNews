<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Web\WebNewsController;
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

Route::get('/admin', function () {
    return redirect()->route('login');
});

Route::get('/', function () {
    return redirect()->route('web.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'ShowLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'ProcessLogin'])->name('login.process');
    Route::get('/logout', [AuthController::class, 'Logout'])->name('logout')->middleware('auth');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
    Route::get('/news', [NewsController::class, 'index'])->name('news.index')->middleware('auth');
    Route::get('/news/add', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
    Route::post('/news/add', [NewsController::class, 'store'])->name('news.store')->middleware('auth');
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index')->middleware('auth');
    Route::get('/categories/add', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');
    Route::post('/categories/add', [CategoryController::class, 'store'])->name('category.store')->middleware('auth');
    Route::get('/comments', [CommentController::class, 'index'])->name('comment.index')->middleware('auth');
});

Route::prefix('/web/news')->group(function () {
    Route::get('/index', [WebNewsController::class, 'index'])->name('web.index');
    Route::get('/content', [WebNewsController::class, 'show'])->name('web.show');
});
