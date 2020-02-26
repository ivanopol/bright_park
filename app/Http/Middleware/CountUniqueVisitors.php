<?php


namespace App\Http\Middleware;

use Illuminate\Support\Facades\Cache;
use Closure;
use Illuminate\Support\Facades\Redis;

class CountUniqueVisitors
{
    function handle($request, Closure $next)
    {
        $user_ip = $_SERVER['REMOTE_ADDR'];
        if (!isset($_COOKIE['visitor'])) {
            setcookie('visitor', $user_ip, time() + 60 * 60 * 24);
            if(Redis::exists(date('Y-m-d'))){
                Redis::incr(date('Y-m-d'));
            } else {
                Redis::set(date('Y-m-d'), 1);
            }
        }
        return $next($request);
    }
}
