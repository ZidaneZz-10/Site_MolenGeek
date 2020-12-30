<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
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
Route::get('/demandeFormation', function () {
    return view('pages.demandeFormation');   
});
Route::resource('Inscription', InscriptionController::class)->middleware(['auth','PasAdmin']);
Route::post('/InscriptionEnvoie', [InscriptionController::class,'store']);
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware(['auth','PasAdmin']);

Route::get('/register')->middleware(['auth','PasAdmin']);
