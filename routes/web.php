<?php

use App\Models\BlogCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogCategoryController;

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

Route::get('/', function () {
    return view('frontEnd.index');
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('index');
    Route::get('/blog-detail/{url}', 'blogDetail')->name('blog-detail');
    Route::get('/blog-list', 'blogList')->name('blog-list');
    Route::get('/blog-list/category/{category_id}', 'blogList')->name('blog-list-category');
    Route::get('/blog-list/tag/{tag_name}', 'blogList')->name('blog-list-tag');
});
Route::controller(UserController::class)->group(function () {
    Route::get('login', 'show')->name('login-view');
    Route::post('login', 'login')->name('login');
    Route::get('register', 'register_view')->name('register-view');
    Route::post('register', 'register')->name('register');
    Route::get('logout', 'logout')->name('logout');
});
Route::middleware(['auth', 'admin'])->controller(DashboardController::class)->prefix('admin')->group(function () {
    Route::get('/dashboard', 'show')->name('dashboard');
});
Route::middleware(['auth', 'admin'])->controller(BlogCategoryController::class)->prefix('admin')->group(function () {
    Route::get('blog-category', 'index')->name('blog-category');
    Route::get('/blog-category/add-blog', 'addBlogCategoryView')->name('blog-category-add');
    Route::post('/blog-category/add-blog', 'saveCategory')->name('blog-category-save');
    Route::get('/blog-category/edit/{id}', 'edit')->name('blog-category-edit');
    Route::get('/blog-category/delete/{id}', 'destroy')->name('delete-blog-category');
});
Route::middleware(['auth', 'admin'])->controller(BlogTagController::class)->prefix('admin')->group(function () {
    Route::get('blog-tag', 'index')->name('blog-tag');
    Route::get('/blog-tag/add-tag', 'addBlogTagView')->name('blog-tag-add');
    Route::post('/blog-tag/add-tag', 'saveTag')->name('blog-tag-save');
    Route::get('/blog-tag/edit/{id}', 'edit')->name('blog-tag-edit');

    Route::get('/blog-tag/delete/{id}', 'destroy')->name('delete-blog-tag');
});
Route::middleware(['auth', 'admin'])->controller(BlogController::class)->prefix('admin')->group(function () {
    Route::get('blog', 'index')->name('blog');
    Route::get('/blog/add-blog', 'addBlogView')->name('blog-add');
    Route::post('/blog/add-blog', 'saveBlog')->name('blog-add-save');
    Route::get('/blog/edit/{id}', 'edit')->name('blog-edit');
    Route::get('/blog/delete/{id}', 'destroy')->name('delete-blog');
});
