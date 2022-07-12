<?php

use App\Http\Controllers\API\AccountController;
use App\Http\Controllers\API\AppController;
use App\Http\Controllers\API\BooksController;
use App\Http\Controllers\API\FavorisController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\LikeController;
use App\Http\Controllers\API\paymentBookController;
use App\Http\Controllers\API\UpdateDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::post('/logout',[HomeController::class, 'logout']);
    Route::get('/books',[BooksController::class,'index']); // admin
    Route::get('/appHome', [AppController::class, 'index']); // pour obtenir les livres  recemment ajouté par l'utilisateur
    Route::post('/deconnexion', [AppController::class, 'deconnexion']);
    Route::post('/deposit',[AccountController::class,'store']);
    Route::get('categories',[AppController::class,'getCategories']);
    Route::get('payments',[paymentBookController::class,'index']); //recuperation des livres acheter
    Route::delete('deletePayment/{id}',[paymentBookController::class,'deletePayment']);
    Route::get('account',[AccountController::class,'index']); //show my account
    Route::post('buyBook',[paymentBookController::class,'store']);//buy  book
    Route::post('favoris',[FavorisController::class,'store']); // ajout du livre gratuit a la bibliotheque
    Route::get('getFavoris',[FavorisController::class,'getFavoris']); // recuperation des livres gratuits ajoutés a la bibliotheque
    Route::delete('delete/{id}',[FavorisController::class,'delete']);
    Route::post('changeData',[UpdateDataController::class,'changeData']);//mise à jour du nom et prénom de l'utilisateur
    Route::post('changeProfile',[UpdateDataController::class,'upload']); //mise à jour de la photo de profiile
    Route::post('changePassword',[UpdateDataController::class,'changePassword']); //mise à jour du mot de passe
    Route::post('liked',[LikeController::class,'liked']);
    Route::post('disliked',[LikeController::class,'disliked']);
    Route::get('getBestLiked',[LikeController::class,'getBestLiked']);
});
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);



