<?php

namespace App\Http\Middleware;

use Closure;

class Login_Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($rRequest, Closure $next)
    {
        $strParameter = $rRequest ->get('parameter');
        if (is_null($strParameter))
            return redirect('/fallo');

        return $next($rRequest);
    }
}
