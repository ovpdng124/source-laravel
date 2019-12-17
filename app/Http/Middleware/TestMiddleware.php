<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->name == 'Ong Van Phat') {
            return $next($request);
        }
        Auth::logout();
        return redirect('/login');
    }
}
