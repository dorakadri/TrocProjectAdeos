<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ContactController;


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

Route::get('/home/associations', [AssociationController::class, 'index2']);
//just for test mba3ed bich tkoun 3ana ressources 


Route::resource('associations',AssociationController::class);
Route::resource('contacts', ContactController::class);
    
Route::get('/Admin/dashboard', function () {
    return view('admin.components.Dashboard');
});