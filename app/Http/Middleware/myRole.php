<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class myRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

        public function handle($request, Closure $next, $role)
    {
        $roles=explode('|', $role);
        if(Auth::User()->hasRole($roles)) {
            return $next($request);
        }else{
            return redirect()->route('errors');
        }


    }

}
