<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
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