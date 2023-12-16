<?php

use App\Http\Controllers\AdminMaster;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Gallery;
use App\Http\Controllers\HeadController;
use App\Http\Controllers\IndexFe;
use App\Http\Controllers\Login;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use App\Models\Admins;
use App\Models\Articles;
use App\Models\Galleries;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// front end
Route::get('/', [Frontend::class, 'index']);

Route::middleware(['guest'])->group(function () {
    // login
    Route::get('/login', [Login::class, 'index'])->name('login');
    Route::post('/login/process', [Login::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    // post
    Route::post('/post/update/{admins}', [AdminMaster::class, 'update']);
    Route::get('/post/edit/{admins}', [AdminMaster::class, 'edit']);
    Route::get('/post/insert', [AdminMaster::class, 'create']);
    Route::get('/post/delete/{admins}', [AdminMaster::class, 'destroy']);
    Route::post('/post/store', [AdminMaster::class, 'store']);

    // unit
    Route::get('/unit', [UnitController::class, 'index']);
    Route::get('/unit/create', [UnitController::class, 'create']);
    Route::get('/unit/edit/{units}', [UnitController::class, 'edit']);
    Route::post('/unit/update/{units}', [UnitController::class, 'update']);
    Route::get('/unit/destroy/{units}', [UnitController::class, 'destroy']);
    Route::post('/unit/store', [UnitController::class, 'store']);

    // back end
    Route::get('/admin', [AdminMaster::class, 'index']);

    Route::get('/logout', [Login::class, 'logout'])->name('logout');
});

// index fe
Route::get('/indexfe', [IndexFe::class, 'index']);

Route::get('/blog', [Frontend::class, 'indexbtr']);

Route::get('/detilformthem/{id}', [Frontend::class, 'detilformthem']);

// detil
// Route::get('/detil/{id}', [Frontend::class, 'show']); //mine
Route::get('/detil/{id}', [Frontend::class, 'showdetil']); //mine
// Route::get('/detilformthem/{id}', [Frontend::class, 'recentpost']); //mine
Route::get('/detil', [Frontend::class, 'showdetil']);
Route::get('/summernote', [AdminMaster::class, 'summernote']);
Route::get('/ckeditor', [AdminMaster::class, 'ckeditor']);
Route::post('/frontend/detil/comment', [Frontend::class, 'store']);
Route::post('/detilformthem/frontend/detil/comment', [Frontend::class, 'store']);

// head
Route::get('/head', [HeadController::class, 'index']);
Route::get('/head/create', [HeadController::class, 'create']);
Route::get('/head/edit', [HeadController::class, 'edit']);
Route::post('/head/store', [HeadController::class, 'store']);

// register
Route::get('/register', [Login::class, 'reg']);
Route::post('/registerProses', [Login::class, 'store']);

// artikel
Route::get('/admin/articles', [ArtikelController::class, 'index']);
Route::get('/admin/article/create', [ArtikelController::class, 'create']);
Route::get('/admin/article/destroy/{articles}', [ArtikelController::class, 'destroy']);
Route::post('/admin/article/store', [ArtikelController::class, 'store']);
Route::get('/admin/article/edit/{articles}', [ArtikelController::class, 'edit']);
Route::post('/admin/article/update/{categories}', [ArtikelController::class, 'update']);

// categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/store', [CategoryController::class, 'store']);
Route::get('/categories/destroy/{categories}', [CategoryController::class, 'destroy']);
Route::get('/categories/edit/{categories}', [CategoryController::class, 'edit']);
Route::post('/categories/update/{categories}', [CategoryController::class, 'update']);

// user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/edit/{user}', [UserController::class, 'edit']);
Route::post('/user/update/{user}', [UserController::class, 'update']);

// commetn
Route::get('/comment', [CommentController::class, 'commentbe']);

// gallery
Route::get('/gallery', [Gallery::class, 'index']);
Route::get('/gallery/create', [Gallery::class, 'create']);
Route::post('/gallery/store', [Gallery::class, 'store']);