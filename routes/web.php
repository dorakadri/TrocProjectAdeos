<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ChariteController;
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

//just for test mba3ed bich tkoun 3ana ressources 
Route::get('/profile', function () {
    return view('components.profile');
});
Route::get('/', function () {
    return view('welcome');
});

//just for test mba3ed bich tkoun 3ana ressources 
Route::get('/Admin/dashboard', function () {
    return view('admin.components.Dashboard');
});



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
