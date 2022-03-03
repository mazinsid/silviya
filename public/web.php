<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OrdersController;
use App\http\Controllers\DetailsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TourismsController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\offers;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
{

    Route::get(
        '/',
        [WelcomeController::class, 'index']
    )->name('welcome');

    Route::get(
        '/offer/{offerid}/details',
        [WelcomeController::class, 'details']
    )->name('OfferDetails');
    Route::get(
        '/tourism/{tourismid}/demo',
        [WelcomeController::class, 'demo']
    )->name('tourismdemo');
    Route::get(
        '/OurOffer',
        [OffersController::class, 'getAllOffers']
    )->name('AllOffers');

    Route::get(
        '/tourism',
        [TourismsController::class, 'getAllTourism']
    )->name('AllTourisms');


    Route::view('/contact','contact');

    Route::view('/about','about');

    Route::get('/demoall/{id}', [WelcomeController::class, 'getAlldemo'])->name('demo.all');

    Route::post('/orders' , [OrdersController::class , 'store'])->name('orders.store');
});


Route::group(
    [
        'middleware' => 'auth'    ], function()
{

    Route::get('/dashboard', [WelcomeController::class,'dashboard'])->name('dashboard');

    Route::resource('/orders' , OrdersController::class)->except('store');
    Route::get('/restore/{id}' , [OrdersController::class , 'restore'])->name('restore.orders');
    Route::get('/trashed/orders' , [OrdersController::class , 'GetTrashed'])->name('orders.trash');
    Route::get('/Users' , [RegisteredUserController::class , 'index'])->name('Users.AllUsers');
    Route::get('/Users/new' , [RegisteredUserController::class , 'NewUser'])->name('Users.create');
    Route::get('/Users/{id}/destroy' , [RegisteredUserController::class , 'destroy'])->name('user.destroy');
    Route::post('/Users/insert' , [RegisteredUserController::class , 'insert'])->name('user.insert');


    Route::resource('/details', 'App\Http\Controllers\DetailsController');

    Route::get('/details/{offerid}/create', ['App\Http\Controllers\DetailsController', 'insert'])->name('details.insert');;
    Route::resource('/offers', OffersController::class);
    Route::get('/offer/trashed' , [OffersController::class , 'GetTrashed'])->name('trash.offer');
    Route::get('/offer/{id}' , [OffersController::class , 'restore'])->name('restore.offer');

    Route::resource('/tourism', TourismsController::class);
    Route::resource('/demo', DemoController::class);
    Route::get('/demo/{offerid}/', [DemoController::class, 'insert'])->name('demo.insert');;


});

require __DIR__.'/auth.php';
