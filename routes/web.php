<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

//laravel 8 (new way)
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

//Posts endpoint
Route::get('/posts',[PostsController::class, 'index']);
