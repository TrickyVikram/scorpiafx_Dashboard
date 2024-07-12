<?php

namespace App\Http\Middleware;

use App\Models\User_ip;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class IPBasedSecurity
{
    public function handle($request, Closure $next)
    {
        $user_ip = User_ip::all();

        $allowedIPs = ['127.0.0.1', '10.0.0.1'];
        
        // foreach ($user_ip as $value) {
        //     // $allowedIPs = ['127.0.0.1', '10.0.0.1'];
        //     $allowedIPs = [$value['ip'], '10.0.0.1'];
        // }



        $clientIP = $request->ip();

        if (!in_array($clientIP, $allowedIPs)) {


            abort(403, 'This ' . $clientIP . ' ip is not allowed');

        }

        return $next($request);
    }
}