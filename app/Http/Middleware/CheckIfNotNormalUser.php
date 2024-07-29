<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckIfNotNormalUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::guard('web')->check()) {
            return redirect('/')->with('error', 'You are already logged in as a normal user.');
        }

        if (Auth::guard('stylist')->check()) {
            return redirect('/stylist/dashboard')->with('error', 'You are already logged in as a stylist.');
        }
        return $next($request);
    }
}
