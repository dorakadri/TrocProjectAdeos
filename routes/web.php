<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ChariteController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ExchangedemandsController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ReponseController;
use App\Models\Exchangedemands;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth', 'checkrole:0'])->group(function () {
    Route::resource('Annonce', AnnonceController::class);
    Route::resource('Exchanges', ExchangedemandsController::class);
    Route::get('/Exchange/createbyid/{id}', [ExchangedemandsController::class, 'createbyid']);
    Route::get('/Exchange/confirmation/{action}/{id}', [ExchangedemandsController::class, 'confirmation']);
    Route::get('/profile', [AnnonceController::class, 'UserList']);
    // Reclamation //
    Route::resource('reponse', ReponseController::class);
    Route::get('/filter-reclamations', 'App\Http\Controllers\ReclamationController@filterReclamations')->name('filter-reclamations');
    // CHARITY EVENT + DONATION 
    
Route::get('/Donation', [DonationController::class,'index'])->name( 'donations.index'); 
Route::get('/Donation/create', [DonationController::class,'create'])->name( 'donations.create');
Route::post('/Donation/create', [DonationController::class,'add'])->name( 'donations.add');  
Route::get('/Donation/{donation}/edit', [DonationController::class,'edit'])->name( 'donations.edit'); 
Route::put('/Donation/{donation}/update', [DonationController::class,'update'])->name( 'donations.update');
Route::delete('/Donation/{donation}/delete', [DonationController::class,'delete'])->name( 'donations.delete');  

Route::get('/Charite', [ChariteController::class,'index'])->name( 'charites.index'); 
Route::get('/Charite/create', [ChariteController::class,'create'])->name( 'charites.create');
Route::post('/Charite/create', [ChariteController::class,'add'])->name( 'charites.add');
Route::get('/Charite/{charite}/edit', [ChariteController::class,'edit'])->name( 'charites.edit'); 
Route::put('/Charite/{charite}/update', [ChariteController::class,'update'])->name( 'charites.update');
Route::delete('/Charite/{charite}/delete', [ChariteController::class,'delete'])->name( 'charites.delete');  

Route::post('donations/{donation}/choose-charite', [DonationController::class, 'chooseCharite'])->name('donations.chooseCharite');
Route::post('/charites/{charite}/show-donations', [ChariteController::class,'showDonations'])->name('charites.showDonations');

});




Route::middleware(['auth', 'checkrole:1'])->group(function () {
    Route::get('/Admin/dashboard', function () {
        return view('admin.components.Dashboard');
    });

    Route::get('/Admin/ExchangeClaims', function () {
        return view('admin.components.ExchangeClaims');
    });
    Route::get('/Admin/ExchangeClaims/{id}', function () {
        return view('admin.components.ClaimsDetail');
    });
    Route::get('/Admin/Profile', function () {
        return view('admin.components.Profile');
    });

    // reclamation
    Route::get('/reponse/create/{reclamation_id}', 'App\Http\Controllers\ReponseController@createbyid')->name('reponse.createbyid');
    Route::resource('reponse', ReponseController::class);

    Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
    Route::get('/Admin/reclamation', 'App\Http\Controllers\ReclamationController@index2')->name('admin.reclamations.index2');
});

//ken andkom method inajm yaccedilha ladmin or il user
Route::middleware(['auth'])->group(function () {

    Route::resource('reclamation', ReclamationController::class);

});