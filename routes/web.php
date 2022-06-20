<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditorsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\paymentBookController;
use App\Http\Controllers\QuestsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NotificationsController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/deconnexion', [HomeController::class, 'deconnexion']);
    // CRUDs admin
    Route::resource('categories', CategoriesController::class);
    Route::resource('authors', AuthorsController::class);
    Route::resource('editors', EditorsController::class);
    Route::resource('articles', ArticlesController::class);
    Route::resource('language', LanguagesController::class);
    Route::resource('countrie', CountriesController::class);
    Route::resource('Faqs', FaqsController::class);
    Route::get('quest', [QuestsController::class, 'index']);

    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::post('/deposit', [AccountController::class, 'store'])->name('account.store');
    Route::post('payments', [paymentBookController::class, 'store'])->name('payment.store');
    Route::get('payments', [paymentBookController::class, 'index'])->name('payment.index');
});
// Route::resource('/', 'HomesController');


Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
//Routes articles/blog
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
//Routes a propos
Route::get('a_propos', [AproposController::class, 'vue'])->name('a_propos');
//Routes books
Route::resource('books', BooksController::class);
//Routes Notifications

Route::resource('notifications', NotificationsController::class);
Route::get('/appHome', [AppController::class, 'index'])->name('app.index');
Route::get('/app/show', [AppController::class, 'show']);
Route::get('/app/bookShow/{id}', [AppController::class, 'bookShow'])->name('show');
Route::post('/deconnexion', [AppController::class, 'deconnexion'])->name('deconnexion');
// Route::get('/favoris',[FavorisController::class,'index'])->name('favoris.index');
// Route::post('/favoris',[FavorisController::class,'store'])->name('favoris.store');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
