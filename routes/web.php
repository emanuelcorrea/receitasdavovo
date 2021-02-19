<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;

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


Route::get('/receitas', [RecipeController::class, 'list']);

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/perfil', [ProfileController::class, 'index'])->name('profile');

Route::resource('recipe', RecipeController::class);

/**
 *--------------------------------------------------------------------------
 * Recipes by slug
 *--------------------------------------------------------------------------
 */
Route::get('/{slug}', [RecipeController::class, 'show'])->name('recipe');
