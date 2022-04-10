<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{

    public function handle($request, Closure $next, ...$roles)
    {
        if (in_array($request->user()->role, $roles)){
            return $next($request);
        }
        return redirect('/error');

        // if (auth()->user()->role="admin"){
        //     return redirect('/admin/dashboard');
        // } elseif (auth()->user()->role="resepsionis") {
        //     return redirect('/resepsionis/dashboard');
        // }
    }
}
