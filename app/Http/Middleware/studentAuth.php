<?php

namespace App\Http\Middleware;

use Closure;

class studentAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth(“student”)->check()) {
            return $next($request);
        } else {
            return response()->redirectTo('/students/login');
        }
    }
}
