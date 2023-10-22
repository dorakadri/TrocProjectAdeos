<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ChariteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExchangedemandsController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PostController;
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
//Association and simple users

Route::middleware(['auth', 'checkrole:0,2'])->group(function () {
    Route::resource('Annonce', AnnonceController::class);
    Route::resource('Exchanges', ExchangedemandsController::class);
    Route::get('/Exchange/createbyid/{id}', [ExchangedemandsController::class, 'createbyid']);
    Route::get('/Exchange/confirmation/{action}/{id}', [ExchangedemandsController::class, 'confirmation']);
    Route::get('/profile', [AnnonceController::class, 'UserList']);
    // Reclamation //
    Route::resource('reponse', ReponseController::class);
    Route::get('/filter-reclamations', 'App\Http\Controllers\ReclamationController@filterReclamations')->name('filter-reclamations');
    // CHARITY EVENT + DONATION 

    Route::get('/Donation', [DonationController::class, 'index'])->name('donations.index');
    Route::get('/Donation/create', [DonationController::class, 'create'])->name('donations.create');
    Route::post('/Donation/create', [DonationController::class, 'add'])->name('donations.add');
    Route::get('/Donation/{donation}/edit', [DonationController::class, 'edit'])->name('donations.edit');
    Route::put('/Donation/{donation}/update', [DonationController::class, 'update'])->name('donations.update');
    Route::delete('/Donation/{donation}/delete', [DonationController::class, 'delete'])->name('donations.delete');

    Route::get('/Charite', [ChariteController::class, 'index'])->name('charites.index');

    Route::post('/charites/{charite}/show-donations', [ChariteController::class, 'showDonations'])->name('charites.showDonations');
    Route::post('donations/{donation}/choose-charite', [DonationController::class, 'chooseCharite'])->name('donations.chooseCharite');

    // Forum //
    Route::resource('post', PostController::class);
    Route::resource('comment', CommentController::class);
    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/comments', [CommentController::class, 'create'])->name('comments.create');
    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

    // like dislike
    
Route::post('/posts/{postId}/like', [PostController::class, 'likePost'])->name('posts.like');
Route::post('/posts/{postId}/dislike', [PostController::class, 'dislikePost'])->name('posts.dislike');

    //Communities 
    Route::resource ('Community',CommunityController::class) ;
    Route::get('/communities',[CommunityController::class,'CommunitiesList']);
    Route::resource('Event', EventController::class)->parameters(['communities' => 'community']);
});

//Association only
Route::middleware(['auth', 'checkrole:2'])->group(function () {
    //hne my charity event route jdida index2 
    Route::get('/Charite/create', [ChariteController::class, 'create'])->name('charites.create');
    Route::post('/Charite/create', [ChariteController::class, 'add'])->name('charites.add');
    Route::get('/Charite/{charite}/edit', [ChariteController::class, 'edit'])->name('charites.edit');
    Route::put('/Charite/{charite}/update', [ChariteController::class, 'update'])->name('charites.update');
    Route::delete('/Charite/{charite}/delete', [ChariteController::class, 'delete'])->name('charites.delete');
});


//Admin

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
    Route::get('/reponse/create/{reclamation_id}', 'App\Http\Controllers\ReponseController@create')->name('reponse.create');
    Route::resource('reponse', ReponseController::class);
    Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
    Route::get('/admin/reclamation', 'App\Http\Controllers\ReclamationController@index2')->name('admin.reclamations.index2');
     

});

// all
Route::middleware(['auth'])->group(function () {
    
    Route::resource('associations', AssociationController::class);
    Route::get('/home/associations', 'App\Http\Controllers\AssociationController@index2')->name('Userinterface.associations.index2');
    Route::resource('reclamation', ReclamationController::class);
});


Route::middleware(['auth', 'checkrole:1,2'])->group(function () {
    Route::resource('contacts', ContactController::class);
});
});

