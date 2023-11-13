<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\SearchController;

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





Route::get('/', [MovieController::class,'index'])->name('main');
Route::get('/movie/{id}', [MovieController::class,'show'])->name('movie');
Route::get('/popular-movies/page={page_num}', [MovieController::class,'popularMovies'])->name('popular-movies');
Route::get('/coming-soon/page={page_num}', [MovieController::class,'comingSoon'])->name('coming-soon');
Route::get('/popular-TVs/page={page_num}', [SerieController::class,'popularSeries'])->name('top-tvs');
Route::get('/serie/{id}', [SerieController::class,'show'])->name('tv-serie');
Route::get('/trending/page={page_num}', [SerieController::class,'trending'])->name('trending');
Route::get('/movies/genre-id={genre}/page={page_num}', [MovieController::class,'moviesGenre'])->name('movies-genre');
Route::post('search', [SearchController::class,'searchByName'])->name('movie-search');




