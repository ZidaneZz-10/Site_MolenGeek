<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\demandePcController;
use App\Models\User;
use App\Http\Controllers\BanniereController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\FormationController;
use App\Models\Description;
use App\Models\Formation;
use App\Models\Card;
use App\Models\Contact;
use App\Models\Banniere;


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
    $description = Description::all();
    $formations = Formation::all();
    $cards = Card::all();
    $contact = Contact::all();
    $banniere = Banniere::all();
    return view('welcome',compact('description','formations','cards','contact','banniere'));
});
Route::get('/demandeFormation', function () {
    $formation = formation::all();
    return view('pages.demandeFormation',compact('formation'));   
});
Route::get('/demandeDePc', function () {
    $datas = User::all();
    return view('pages.demandeDePc',compact('datas'));   
})->middleware('auth');

Route::resource('Inscription', InscriptionController::class)->middleware(['auth','PasAdmin']);
Route::resource('Pc', demandePcController::class)->middleware(['auth','PasAdmin']);
Route::resource('formation', FormationController::class)->middleware(['auth','PasAdmin']);

Route::post('/InscriptionEnvoie', [InscriptionController::class,'store']);
Route::post('/DemandePcEnvoie', [demandePcController::class,'store'])->middleware('auth');

//banniere
Route::get('/banniere',[BanniereController::class,'index'])->middleware(['auth','PasAdmin']);
Route::get('/edit-banniere/{id}', [BanniereController::class, 'edit'])->middleware(['auth','PasAdmin']);
Route::post('/update-banniere/{id}', [BanniereController::class, 'update'])->middleware(['auth','PasAdmin']);

//description
Route::get('/description',[DescriptionController::class,'index'])->middleware(['auth','PasAdmin']);
Route::get('/edit-description/{id}', [DescriptionController::class, 'edit'])->middleware(['auth','PasAdmin']);
Route::post('/update-description/{id}', [DescriptionController::class, 'update'])->middleware(['auth','PasAdmin']);

//contact
Route::get('/contact',[ContactController::class,'index'])->middleware(['auth','PasAdmin']);
Route::get('/edit-contact/{id}', [ContactController::class, 'edit'])->middleware(['auth','PasAdmin']);
Route::post('/update-contact/{id}', [ContactController::class, 'update'])->middleware(['auth','PasAdmin']);

//cards
Route::post('/delete-card/{id}',[CardController::class,'destroy'])->middleware(['auth','PasAdmin']);
Route::post('/add-card',[CardController::class,'store'])->middleware(['auth','PasAdmin']);
Route::get('/card',[CardController::class,'index'])->middleware(['auth','PasAdmin']);
Route::get('/edit-card/{id}', [CardController::class, 'edit'])->middleware(['auth','PasAdmin']);
Route::post('/update-card/{id}', [CardController::class, 'update'])->middleware(['auth','PasAdmin']);

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware(['auth','PasAdmin']);

Route::get('/register')->middleware(['auth','PasAdmin']);
