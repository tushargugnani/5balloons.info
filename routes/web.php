<?php

use App\Http\Controllers\{
    HomeController,
    FilterPostsByCategoryController,
};
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{category}', [FilterPostsByCategoryController::class, 'index'])->name('filter-posts-by-category');
