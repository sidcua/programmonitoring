<?php

namespace App\Http\Middleware\Users;

use Closure;

class Personnel
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
        if($request->user() && $request->user()->type != '2'){
            return redirect()->back();
        }
        return $next($request);
    }
}
