<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        if (in_array(Auth::user()->role, $role)) {
            return $next($request);
        }

        // if ($request->user()->role === 'Admin') {
        //     return redirect('/admin/pengaduan');
        // }
        return redirect('/dashboard');
    }
}
