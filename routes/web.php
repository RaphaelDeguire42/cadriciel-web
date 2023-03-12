<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', [PortfolioController::class,'index']);
Route::get('/home', [PortfolioController::class,'index']);
Route::get('/about', [PortfolioController::class,'about']);
Route::get('/resume', [PortfolioController::class,'resume']);
Route::get('/portfolio', [PortfolioController::class,'portfolio']);
Route::get('/services', [PortfolioController::class,'services']);
Route::get('/contact', [PortfolioController::class,'contact']);
Route::post('/contact', [PortfolioController::class,'recuperateContact']);