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
use App\Http\Controllers\OrderController;
use App\Models\User;
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
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

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
    Route::get('/armoury', 'ARMOURY')->middleware(['auth', 'arms_license']);
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
// Route::get('/adminphp', [AdminController::class, 'index'])->middleware(['auth', 'admin']);
// Route::get('/adminregister', [AdminController::class, 'register']);
// Route::patch('/users/{user_id}/approve', [AdminController::class, 'approve'])->name('users.approve');
// Route::patch('/users/{user_id}/reject', [AdminController::class, 'reject'])->name('users.reject');

//<------------------------------- TO DATABASE ----------------------------------------------------------------------
Route::prefix('register')->controller(RegisterController::class)->group(function () {
    Route::get('/', 'register')->name('register');
    Route::post('/storebasicinfo', 'storeBasicInfo')->name('register.storebasicinfo');
    
    Route::middleware(['registration.step:details'])->group(function () {
        Route::get('/details', 'registerDetails')->name('registerdetails');
        Route::post('/storedetails', 'storeAdditionalDetails')->name('register.storedetails');
    });
    
    Route::middleware(['registration.step:preferences'])->group(function () {
        Route::get('/preferences', 'registerPreferences')->name('registerpreferences');
        Route::post('/storepreferences', 'storePreferences')->name('register.storepreferences');
    });
    
    Route::get('/legal', 'registerLegal')->name('register.legal');
    Route::middleware(['registration.step:legal'])->post('/storelegal', 'storeLegal')->name('register.storelegal');
    
    // Confirmation routes
    Route::get('/confirmation/waiting', 'confirmationWaiting')->name('register.confirmation.waiting');
    Route::get('/confirmation/success', 'confirmationSuccess')->name('register.confirmation.success');
    Route::get('/confirmation/failed', 'confirmationFailed')->name('register.confirmation.failed');
});

//<------------------------------ MIDDLEWARE ----------------------------------------------------------------------

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.picture.update');
Route::post('/admin/update-services', [AdminSubscriptionController::class, 'updateServices'])->name('admin.update.services');
Route::post('/admin/subscription/update/{userId}', [AdminSubscriptionController::class, 'updateSubscription'])->name('admin.subscription.update');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/items', [ProductController::class, 'index']);
Route::get('/items/{id}', [ProductController::class, 'show']); 
Route::post('/items', [ProductController::class, 'store']); 

// Route::post('/submit-service', [ServiceController::class, 'submit'])->name('service.submit');
Route::get('/debug-session', function () {
    dd(session()->all());
});

Route::get('/paymentcomplete', function () {
    return view('paymentcomplete');
})->name('paymentcomplete');

Route::get('/checkout', [OrderController::class, 'index'])->name('checkout');
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.submit');

//------------------------- ADMIN PANEL -----------------------------------------------------------
Route::middleware(['auth', 'admin'])->group(function () {
    
    // Main Admin Dashboard
    Route::get('/adminpanel', function () {
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        return view('ADMIN PANEL.adminpanel', compact('users'));
    })->name('admin.panel');

    // User Management Routes
    Route::prefix('users')->group(function () {
        // User Approval
       
        Route::patch('/{user}/reject', [AdminController::class, 'reject'])->name('users.reject');
       
        // User Registration (if needed)
        Route::get('/register', [AdminController::class, 'register'])
            ->name('admin.register');
            
        // User Listing
        Route::get('/', [AdminController::class, 'index'])
            ->name('admin.users.index');
    });

    Route::get('/debug-routes', function() {
        $routes = Route::getRoutes()->getRoutes();
        return view('debug', ['routes' => $routes]);
    });

    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::patch('users/{user}/approve', [AdminController::class, 'approve'])
            ->name('users.approve');
    });

});

Route::get('/test-db', function() {
    try {
        $testUpdate = \DB::table('users')
            ->where('user_id', 'b4393740-c758-4e1d-a4da-05fef3f8678f')
            ->update(['status' => 'approved']);
            
        return response()->json([
            'affected_rows' => $testUpdate,
            'current_status' => \DB::table('users')
                ->where('user_id', 'b4393740-c758-4e1d-a4da-05fef3f8678f')
                ->value('status')
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}); 