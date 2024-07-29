<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {

        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

            if ($guard == "stylist" && Auth::guard($guard)->check()) {
                return redirect('/stylist/dashboard');
            }
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }

        }
        return $next($request);
    }
}
