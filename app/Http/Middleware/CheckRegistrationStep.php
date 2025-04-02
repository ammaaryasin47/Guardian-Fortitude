<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRegistrationStep
{
    public function handle(Request $request, Closure $next, string $step): Response
    {
        // Check if user is progressing through proper flow
        $currentRoute = $request->route()->getName();
        
        switch ($step) {
            case 'details':
                if (!session('basic_info_completed') && $currentRoute !== 'register.storebasicinfo') {
                    return redirect()->route('register')->with('error', 'Please complete the basic information first.');
                }
                break;
                
            case 'preferences':
                if (!session('additional_details_completed') && $currentRoute !== 'register.storedetails') {
                    return redirect()->route('registerdetails')->with('error', 'Please complete the additional details first.');
                }
                break;
                
            case 'legal':
                $requiredSteps = [
                    'basic_info_completed',
                    'additional_details_completed',
                    'preferences_completed'
                ];
                
                foreach ($requiredSteps as $stepFlag) {
                    if (!session($stepFlag)) {
                        return redirect()->route('register')->with('error', 'Please complete all registration steps first.');
                    }
                }
                break;
                
            default:
                abort(403, 'Invalid registration step');
        }
        
        return $next($request);
    }
}