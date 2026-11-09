<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) { 
        return redirect()->route('login'); 
        } 
        if (session('user_role') === 1) { 
        return $next($request); 
        } 
        return back()->with('error', 
        'Akses ditolak. Anda tidak memiliki izin.');
    }
}
