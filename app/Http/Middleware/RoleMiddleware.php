<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();
    
        // If the user doesn't have the required role, redirect them
        if ($role === 'admin' && !$user->isAdmin()) {
            return redirect('/dashboard'); // Redirect to home if not admin
        }
    
        return $next($request);
    }
    

}
