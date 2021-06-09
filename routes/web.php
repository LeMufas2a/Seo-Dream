<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/backoffice', function () {
    return view('backoffice.main');
})->name('backoffice');

Route::resource('/home', HomeController::class);
Route::resource('/feature', FeatureController::class);
Route::resource('/about', AboutController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/portfolio', PortfolioController::class);
Route::resource('/contact', ContactController::class);
