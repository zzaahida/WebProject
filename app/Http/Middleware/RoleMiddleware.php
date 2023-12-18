<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$rolenames)
    {
        if(Auth::check()){
            foreach($rolenames as $rname){
                if(Auth::user()->role->name == $rname)
                    return $next($request);
            }
        }else {
            return redirect()->route('login.form');
        }
        return response()->view('errors.noperm');
    }
}
