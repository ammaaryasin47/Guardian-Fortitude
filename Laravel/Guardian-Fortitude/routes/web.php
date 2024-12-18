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

use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

// ------------------------- MAIN PAGES ------------------------------------------------------------------
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'INDEX');
    Route::get('/aboutus', 'ABOUTUS');
    Route::get('/services', 'SERVICES');
    Route::get('/products', 'PRODUCTS');
    Route::get('/contactus', 'CONTACTUS');
    Route::get('/quote', 'QUOTE');
    Route::get('/login', 'LOGIN');
});

// ------------------------- PRODUCT SUB-PAGES -----------------------------------------------------------
Route::prefix('products')->controller(MainController::class)->group(function () {
    Route::get('/accessories', 'ACCESSORIES');
    Route::get('/armoury', 'ARMOURY');
    Route::get('/guides&books', 'GUIDESBOOKS');
    Route::get('/optics', 'OPTICS');
    Route::get('/protectivegears', 'PROTECTIVEGEARS');
    Route::get('/specializedvehicals', 'SPECIALIZEDVEHICALS');
    Route::get('/unmannedvehicals', 'UNMANNEDVEHICALS');
});

// ------------------------- REGISTER SUB-PAGES ----------------------------------------------------------
Route::prefix('register')->controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register');
    Route::get('/registerdetails', 'registerDetails');
    Route::get('/registerpreferences', 'registerPreferences');
    Route::get('/registerlegal', 'registerLegal');
    Route::get('/confirmationwaiting', 'confirmationWaiting');
    Route::get('/confirmationsuccess', 'confirmationSuccess');
    Route::get('/confirmationfailed', 'confirmationFailed');
});

// <------------------------------ ADMIN ROUTES --------------------------------------------------------------
Route::get('/adminphp', [AdminController::class, 'index']);
Route::get('/adminregister', [AdminController::class, 'register']);
Route::patch('/users/{id}/approve', [AdminController::class, 'approve'])->name('users.approve');
Route::patch('/users/{id}/reject', [AdminController::class, 'reject'])->name('users.reject');

//<------------------------------- TO DATABASE ----------------------------------------------------------------------

Route::prefix('register')->controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register'); // First page
    Route::post('/storebasicinfo', 'storeBasicInfo')->name('register.storebasicinfo'); // Store basic info
    Route::get('/registerdetails', 'registerDetails')->name('registerdetails'); // Second page
    Route::post('/storeadditionaldetails', 'storeAdditionalDetails')->name('register.storeadditionaldetails'); // Store additional details
    Route::get('/registerpreferences', 'registerpreferences')->name('registerpreferences'); // Third page
    Route::post('/storepreferences', 'storePreferences')->name('register.storepreferences'); // Store preferences
    Route::get('/confirmationSuccess', 'confirmationSuccess')->name('register.confirmation.success'); // Success page
    Route::get('/confirmationwaiting', 'confirmationwaiting')->name('register.confirmation.waiting'); // Success page
});

