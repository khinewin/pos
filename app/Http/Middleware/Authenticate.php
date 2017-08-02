<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Authenticate
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
        if (Auth::check())
        {
            if (Auth::User()->is_active != 'Y')
            {
                Auth::logout();
                return redirect()->to('/')->with('warning', 'Your session has expired because your account is deactivated.');
            }
        }
        return $next($request);
    }
}
