<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminSubscriptionController;
use App\Http\Controllers\UserSubscriptionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //---------------------PROFILE--------------------------------------------
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //---------------------SUBSCRIPTION--------------------------------------------
    Route::post('/subscriptions', [AdminSubscriptionController::class, 'storeSubscription'])->name('subscriptions.store');
    Route::get('/subscriptions', [UserSubscriptionController::class, 'show'])->name('subscriptions.show');
    Route::get('/dashboard', [UserSubscriptionController::class, 'showDashboard'])->name('dashboard');

    //---------------------CART------------------------------------------------------------
    Route::get('/cart', [CartController::class, 'Cart'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/add-to-cart', [CartController::class, 'addToCart']);
    Route::delete('/cart/remove/{cartItemId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

    //---------------------PAYMENT------------------------------------------------------------
    Route::match(['get', 'post'], '/payment', function () {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
    
        if (request()->isMethod('post')) {
            return app(\App\Http\Controllers\PaymentController::class)->processPayment(request());
        }
    
        return view('payment');
    })->name('payment');
});

require __DIR__.'/auth.php';


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
Route::patch('/users/{user_id}/approve', [AdminController::class, 'approve'])->name('users.approve');
Route::patch('/users/{user_id}/reject', [AdminController::class, 'reject'])->name('users.reject');

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

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.picture.update');
Route::post('/admin/update-services', [AdminSubscriptionController::class, 'updateServices'])->name('admin.update.services');
Route::post('/admin/subscription/update/{userId}', [AdminSubscriptionController::class, 'updateSubscription'])->name('admin.subscription.update');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/items', [ProductController::class, 'index']); // Change /products to /items
Route::get('/items/{id}', [ProductController::class, 'show']); // Change /products/{id} to /items/{id}
Route::post('/items', [ProductController::class, 'store']); // Change /products to /items
