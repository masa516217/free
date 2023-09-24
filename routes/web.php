<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RegisterController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::prefix('/main')->group(function() {
    Route::get('/', [MainController::class, 'main']);
    Route::get('/1', [MainController::class, 'game']);
    Route::get('/sarch', [MainController::class, 'sarch']);
    //
    Route::get('/today', [RankController::class, 'today']);
    Route::get('/week', [RankController::class, 'week']);
    Route::get('/total', [RankController::class, 'total']);
    //
    Route::get('/horror', [GenreController::class, 'horror']);
    Route::get('/rpg', [GenreController::class, 'RPG']);
    Route::get('/action', [GenreController::class, 'action']);
    Route::get('/puzzle', [GenreController::class, 'puzzle']);
    //
    Route::get('/register', [RegisterController::class, 'register']);
    
});

