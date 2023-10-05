<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ReponseController;
/*
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


Route::resource('reclamation',ReclamationController::class);

Route::resource('reponse',ReponseController::class);

// add response taking id of reclam
Route::get('/reponse/create/{reclamation_id}', 'App\Http\Controllers\ReponseController@create')->name('reponse.create');

// New route for admin reclamations index
Route::get('/admin/reclamation', 'App\Http\Controllers\ReclamationController@index2')->name('admin.reclamations.index');



