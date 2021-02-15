<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

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
Route::get('/', HomeController::class);
Route::get('/{slug}', [RecipeController::class, 'show'])->name('recipe');

Route::resource('recipe', RecipeController::class);

