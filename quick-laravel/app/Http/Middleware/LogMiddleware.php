<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Storage;

class LogMiddleware
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
        $url = $request->fullurl();
        $method = $request->method();

        Storage::append('access.log', "$url $method 実行前 ".date('Y-m-d H:i:s')."\n");
        // file_put_contents('./storge/logs/access.log', date('Y-m-d H:i:s')."\n", FILE_APPEND);
        // return $next($request);
        $response = $next($request);

        Storage::append('access.log', "$url $method 実行後 ".date('Y-m-d H:i:s')."\n");

        return $response;
    }
}
