<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class InactiveSupplierMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('supplier')->check() && !Auth::guard('supplier')->user()->status) {
            return $next($request);
        }

        return redirect()->route('supplier.index');
    }
}

