<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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



// //  Route::get('/', 'MoviesController@index')->name('movies.index');
// Route::get('/film/{movie}', 'FilmController@show')->name('movies.show');

// Route::resource('/',MoviesController::class);

Route::resource('/movies',MoviesController::class);