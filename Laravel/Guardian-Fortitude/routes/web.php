<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'edit']);
});

require __DIR__.'/auth.php';

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


// ------------------------- MAIN PAGES ------------------------------------------------------------------
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'INDEX')->name('index');
    Route::get('/aboutus', 'ABOUTUS');
    Route::get('/services', 'SERVICES');
    Route::get('/products', 'PRODUCTS');
    Route::get('/contactus', 'CONTACTUS');
    Route::get('/quote', 'QUOTE');
    Route::get('/login', 'LOGIN')->name('login');
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
    Route::get('/registerlegal', 'registerLegal')->name('register.legal');
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
    Route::get('/confirmationFailed', 'confirmationFailed')->name('register.confirmation.failed'); // Success page
    Route::get('/confirmationwaiting', 'confirmationwaiting')->name('register.confirmation.waiting'); // Success page
    Route::post('/storelegal', 'storeLegal')->name('register.storelegal'); 
});

//<------------------------------ MIDDLEWARE ----------------------------------------------------------------------


// In routes/web.php
Route::post('/login', [LoginController::class, 'login'])->name('login');



Route::middleware(['auth', 'checkUserStatus'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    // Add other routes that require authentication and approval here
});

Route::post('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.picture.update');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
