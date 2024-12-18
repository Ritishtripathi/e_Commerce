<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is an admin
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login')->withErrors(['error' => 'You must log in as admin to access this page.']);
        }

        return $next($request);
    }
}
