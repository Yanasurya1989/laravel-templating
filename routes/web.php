<?php

use App\Http\Controllers\AdminMaster;
use App\Http\Controllers\MasterController;
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
Route::get('/', [MasterController::class, 'index']);

// back end
Route::get('/admin', [AdminMaster::class, 'index']);

// post
Route::get('/post/insert', [AdminMaster::class, 'create']);
Route::post('/post/store', [AdminMaster::class, 'store']);