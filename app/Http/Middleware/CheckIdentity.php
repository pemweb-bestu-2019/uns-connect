<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIdentity
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
        /**
         * Check where as the user not have information
         * redirect to spesific route
         */

        if (Auth::check()) {
            if (is_null(Auth::user()->member)) {
                // Redirect to profile page
                return redirect()->route('me.profile', ['redirectTo' => $request->path()]);
            }
        }

        return $next($request);
    }
}
