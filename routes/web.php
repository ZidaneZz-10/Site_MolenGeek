<?php

use App\Http\Controllers\BanniereController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DescriptionController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//banniere
Route::get('/banniere',[BanniereController::class,'index']);
Route::get('/edit-banniere/{id}', [BanniereController::class, 'edit']);
Route::post('/update-banniere/{id}', [BanniereController::class, 'update']);

//description
Route::get('/description',[DescriptionController::class,'index']);
Route::get('/edit-description/{id}', [DescriptionController::class, 'edit']);
Route::post('/update-description/{id}', [DescriptionController::class, 'update']);

//contact
Route::get('/contact',[ContactController::class,'index']);
Route::get('/edit-contact/{id}', [ContactController::class, 'edit']);
Route::post('/update-contact/{id}', [ContactController::class, 'update']);