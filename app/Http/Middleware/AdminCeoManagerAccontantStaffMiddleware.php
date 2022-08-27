<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCeoManagerAccontantStaffMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->access_label == 0 || Auth::user()->access_label == 1 || Auth::user()->access_label == 2 || Auth::user()->access_label == 3 || Auth::user()->access_label == 4)
        {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'You dont have permission to view this page');
    }
}
