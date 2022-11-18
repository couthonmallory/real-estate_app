<?php

use App\Models\Properties;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Route::get('/home', function(){
    return view('website_pages.home');
})->name('home'); */

Route::post('/home', function(){
    return view('website_pages.home');
})->name('home');

Route::get('/locations', function(){
    return view('website_pages.location');
})->name('locations');

Route::middleware('auth')->group(function(){
    Route::get('/properties', [PropertiesController::class, 'index'])->name('properties');
});


Route::get('/mail', [PropertiesController::class, 'send'])->name('envoyer_mail');

Route::get('/mails', function(){
    return view('emails.sendEmail');
});

Route::get('/admin', function(){
    return view('admin_pages.dashboard');
})->name('admin')->middleware(['auth', 'isAdmin']);

Route::get('/transactions/{id}',[TransactionController::class, 'save'])->middleware('auth');

Route::get('/admtransac', function(){
    return view('admin_pages.transactions');
})->name('admtransac')->middleware(['auth', 'isAdmin']);

Route::get('/show/{id}',[PropertiesController::class, 'show'])->name('showTransac')
                                                                ->middleware(['auth', 'isAdmin']);

Route::get('/deleteTransac/{id}',[TransactionController::class, 'destroy'])->name('deleteTransac')
                                                                ->middleware(['auth', 'isAdmin']);

Route::get('/adminDash',function(){
    return view('admin_pages.dashboard');
})->name('adminDash')->middleware(['auth', 'isAdmin']);

Route::get('/deleteUser/{id}',[UserController::class, 'destroy'])->middleware(['auth', 'isAdmin']);
Route::post('/updateUser/{id}',[UserController::class, 'update'])->middleware(['auth', 'isAdmin']);

Route::get('/UserManagement',function(){
    return view('admin_pages.UserManagement');
})->name('UserManagement')->middleware(['auth', 'isAdmin']);

Route::get('/qqch', function(){ 
    return view('website_pages.cart');
});

Auth::routes();

require __DIR__.'/auth.php';
