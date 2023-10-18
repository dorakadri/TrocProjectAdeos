<?php

use App\Http\Controllers\AnnonceController;
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


Route::middleware(['auth'])->group(function () {

    Route::resource('reclamation', ReclamationController::class);

});