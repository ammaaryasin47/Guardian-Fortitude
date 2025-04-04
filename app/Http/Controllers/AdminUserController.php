<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Subscription;
    
    class AdminUserController extends Controller
    {
        public function index()
        {
            // Debugging - check if controller is reached
            \Log::info('AdminUserController@index executed');
                 // Get all users with their subscriptions
            $users = User::with('subscription')->get();

            $subscriptions = Subscription::with('user')->get();
            // Verify the view exists
            $viewPath = 'ADMINPANEL.adminpanel';
            if (!view()->exists($viewPath)) {
                $error = "View [{$viewPath}] not found at: ".resource_path("views/ADMINPANEL/adminpanel.blade.php");
                \Log::error($error);
                abort(500, $error);
            }
            
            return view('ADMINPANEL.adminpanel', [
                'users' => User::all(),
                'subscriptions' => \App\Models\Subscription::all() // Fully qualified name
            ]);
    }
}
