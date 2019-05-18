<?php

namespace App\Http\Middleware;

use Closure;

class QuanMiddleware
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

       $str = '[时间:'.date('Y-m-d H:i:s',time()).',ip地址:'.$request->ip().']'."\r\n";

        file_put_contents('msg.txt', $str,FILE_APPEND);

        return $next($request);
    }
}
