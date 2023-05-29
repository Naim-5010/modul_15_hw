<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class requestmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // // 👀👀 Task 3: Global Middleware

        //        $logMessage = 'Request Method: ' . $request->method() . ', URL: ' . $request->fullUrl();
        //        Log::info($logMessage);

        // return $next($request);


        // //👀👀Task 4: Route Middleware

        // $pass = $request->header('pass');
        // if($pass == 1234){
        //     return $next($request);
        // }else{
        //     return response()->json("unautorize", 401);
        // }

        return $next($request);
      
        
    }
}
