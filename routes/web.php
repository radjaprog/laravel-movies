<?php

// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
//use Illuminate\Support\Facades\Auth;

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

Route::get('/', [MoviesController::class, 'index']);

Route::get('/movies/create', [MoviesController::class, 'create'])->name('createMovies');
Route::post('/movies', [MoviesController::class, 'store']);
Route::get('/movies/{id}/createComments', [CommentController::class, 'create'])->name('createComments');
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('singleMovie');
Route::get('/genres/{id}', [GenreController::class, 'show'])->name('singleGenre');
//Route::get('/login', [LoginController::class, 'create'])->name('login');

Route::get('/comments', [CommentController::class, 'index'])->name('comments');
//Route::post('/comments', [CommentController::class, 'store']);
Route::post('/movies/{id}/comments', [CommentController::class, 'store']);
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
