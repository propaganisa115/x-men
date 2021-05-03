<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superhero;

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

Route::get('/', [superhero::class,'index']);
Route::post('/search', [superhero::class,'search'])->name('search');;
Route::get('/searchSkill', [superhero::class,'searchSkill']);
Route::get('/search/{id}', [superhero::class,'getSuperhero']);
