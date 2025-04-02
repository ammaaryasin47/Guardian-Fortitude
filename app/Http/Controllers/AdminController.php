<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        
        return view('admin.users.index', compact('users'));
    }

    
    public function approve(User $user)
{
    \DB::beginTransaction();
    
    try {
        // 1. Verify current state
        $currentStatus = \DB::table('users')
            ->where('user_id', $user->user_id)
            ->value('status');
            
        \Log::info("Approval starting", [
            'user_id' => $user->user_id,
            'current_status' => $currentStatus
        ]);

        // 2. Update using direct assignment
        $user->status = 'Approved';
        $user->timestamps = false; // Temporarily disable timestamps
        
        // 3. Save and verify
        if (!$user->save()) {
            throw new \Exception("Eloquent save failed");
        }
        
        // 4. Verify database update
        $newStatus = \DB::table('users')
            ->where('user_id', $user->user_id)
            ->value('status');
            
        if ($newStatus !== 'Approved') {
            throw new \Exception("Database verification failed");
        }

        \DB::commit();
        
        return response()->json([
            'status' => 'success',
            'db_status' => $newStatus,
            'message' => 'User approved successfully'
        ]);

    } catch (\Exception $e) {
        \DB::rollBack();
        \Log::error("Approval failed", [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        
        return response()->json([
            'status' => 'error',
            'message' => 'Approval failed: ' . $e->getMessage()
        ], 500);
    }
}
    
    public function reject(User $user)
    {
        $user->update(['status' => 'rejected']);
        
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'User rejected successfully',
                'user_id' => $user->user_id,
                'new_status' => 'rejected'
            ]);
        }
        
        return back()->with('success', 'User rejected successfully');
    }


    public function updateServices(Request $request)
    {
        $validatedData = $request->validate([
            'users.*.user_id' => 'required|uuid',
            'users.*.personal_protection' => 'nullable|boolean',
            'users.*.asset_protection' => 'nullable|boolean',
            'users.*.surveillance_monitoring' => 'nullable|boolean',
            'users.*.site_security' => 'nullable|boolean',
            'users.*.training_consultation' => 'nullable|boolean',
            'users.*.emergency_extraction' => 'nullable|boolean',
            'users.*.special_assault_team' => 'nullable|boolean',
            'users.*.emergency_crisis_management' => 'nullable|boolean',
            'users.*.cyber_security' => 'nullable|boolean',
            'users.*.private_detectives' => 'nullable|boolean',
        ]);

        foreach ($validatedData['users'] as $userData) {
            $subscription = Subscription::where('user_id', $userData['user_id'])->first();
            if ($subscription) {
                $subscription->update($userData);
            }
        }

    }

}