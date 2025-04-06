<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Subscription;
use App\Models\Order; // Add this line
    
class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::with('subscription')->get();
        $subscriptions = Subscription::with('user')->get();
        $orders = Order::with('user')->get(); // Add this line to get orders with user data
        
        $viewPath = 'ADMINPANEL.adminpanel';
        if (!view()->exists($viewPath)) {
            $error = "View [{$viewPath}] not found at: ".resource_path("views/ADMINPANEL/adminpanel.blade.php");
            Log::error($error);
            abort(500, $error);
        }
        
        return view('ADMINPANEL.adminpanel', [
            'users' => $users,
            'subscriptions' => $subscriptions,
            'orders' => $orders // Add this line to pass orders to the view
        ]);
    }

    public function updateStatusPost(Request $request) {
        $user = User::findOrFail($request->id);
        
        $request->validate([
            'status' => 'required|in:approved,rejected,pending'
        ]);
    
        $user->update([
            'status' => $request->status
        ]);
    
        return back()->with('success', 'Status updated!');
    }
}