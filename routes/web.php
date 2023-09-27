<?php

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
