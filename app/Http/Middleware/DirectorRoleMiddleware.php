<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DirectorRoleMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->getRole() !== 'director') {
            abort(403, "Sizda director roli yo'q");
        }
        return $next($request);
    }
}
