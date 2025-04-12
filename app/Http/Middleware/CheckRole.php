<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::user() || !in_array(Auth::user()->role, $roles)) {
            return redirect()->route('information.events.index')
                ->with('error', 'Vous n\'avez pas les permissions nécessaires.');
        }

        return $next($request);
    }
} 