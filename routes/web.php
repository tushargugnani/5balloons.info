<?php

use App\Http\Controllers\{
    HomeController,
    FilterPostsByCategoryController,
    FilterPostsByAuthorController
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

Route::get('posts', [App\Http\Controllers\HomeController::class, 'paginate'])->name('posts.paginate');

Route::get('/page/{pageNumber}', function ($pageNumber) {
    return redirect(route('posts.paginate', ['page' => $pageNumber]), 301);
});

Route::get('/author/{author}', [FilterPostsByAuthorController::class, 'index'])->name('filter-posts-by-author');
Route::get('author/{author}/page/{pageNumber}', function ($author, $pageNumber) {
    return redirect(route('filter-posts-by-author', ['author' => $author, 'page' => $pageNumber]), 301);
});

Route::get('/category/{category}', [FilterPostsByCategoryController::class, 'index'])->name('filter-posts-by-category');
