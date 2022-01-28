<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserRoleMiddleware
{

    public function handle(Request $request, Closure $next, $role = false)
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }

        if (!$user->getRole()) {
            abort(403, "Sizda harakatni davom ettirish uchun umuman ruxsat yo'q");
        }

        if ($role && $user->getRole() !== $role) {
            abort(403, "Sizda harakatni davom ettirish uchun kerakli ruxsat yo'q");
        }
        return $next($request);
    }
}
