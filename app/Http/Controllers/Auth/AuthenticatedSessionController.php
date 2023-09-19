<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
 
    public function create(): View
    {
        return view('pages.auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
       
        $request->authenticate();
        $request->session()->regenerate();
        $user=Auth::user();
        if ($user->hasRole('admin')) {
          
            Log::channel('daily')->info("Admin login: {$user->email}");
            return redirect()->route(RouteServiceProvider::ADMINDASHBOARD)->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0'); 
        }
        elseif ($user->hasRole('agent')) {
            Log::info("Agent login: {$user->email}");
            Log::channel('daily')->info("Agent login: {$user->email}");
            return redirect()->route(RouteServiceProvider::AGENTDASHBOARD)->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        }
        else{
            Log::channel('daily')->info("User login: {$user->email}");
            return redirect()->route(RouteServiceProvider::USERDASHBOARD);
        }
       
    }

    public function destroy(Request $request): RedirectResponse
    {
        $user=Auth::user();
        Auth::guard('web')->logout();
        Log::channel('daily')->info("User {$user->email} has logged out ");
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
