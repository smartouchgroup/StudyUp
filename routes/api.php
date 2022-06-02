<?php

use App\Http\Controllers\API\AccountController;
use App\Http\Controllers\API\AppController;
use App\Http\Controllers\API\BooksController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\paymentBookController;
use Illuminate\Http\Request;
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
    Route::get('/app', [AppController::class, 'index']); // pour obtenir les livres  recemment ajouté par l'utilisateur
    Route::post('/deconnexion', [AppController::class, 'deconnexion']);
    Route::post('/deposit',[AccountController::class,'store']);
    Route::get('categories',[AppController::class,'getCategories']);
    Route::get('payments',[paymentBookController::class,'index']); //recuperation des livres acheter
    Route::get('account',[AccountController::class,'index']); //show my account
    Route::post('buyBook',[paymentBookController::class,'store']);//buy  book
});
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);

