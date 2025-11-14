<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $allowRoles=explode('|', $role);
        if(in_array($request->user()->role, $allowRoles))
        {
            return $next($request);
        }
        return redirect('/');
    }

}
