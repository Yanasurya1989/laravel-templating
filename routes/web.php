<?php

use App\Http\Controllers\AdminMaster;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\HeadController;
use App\Http\Controllers\IndexFe;
use App\Http\Controllers\Login;
use App\Http\Controllers\MasterController;
use App\Models\Admins;
use App\Models\Articles;
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

    // back end
    Route::get('/admin', [AdminMaster::class, 'index']);

    Route::get('/logout', [Login::class, 'logout'])->name('logout');
});

// index fe
Route::get('/indexfe',[IndexFe::class,'index']);

Route::get('/blog', [Frontend::class, 'indexbtr']);

Route::get('/detilformthem/{id}',[Frontend::class,'detilformthem']);

// detil
// Route::get('/detil/{id}', [Frontend::class, 'show']); //mine
Route::get('/detil/{id}', [Frontend::class, 'showdetil']); //mine
Route::get('/detil', [Frontend::class, 'showdetil']);

Route::get('/summernote', [AdminMaster::class, 'summernote']);
Route::get('/ckeditor', [AdminMaster::class, 'ckeditor']);

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
Route::post('/admin/article/store', [ArtikelController::class, 'store']);