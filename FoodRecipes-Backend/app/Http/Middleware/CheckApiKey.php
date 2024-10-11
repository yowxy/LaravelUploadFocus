<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $apikey = $request ->header('X-API-KEY');


        if(!$apikey || !ApiKey::where('key',$apikey)->exists()){
            return response()->json(['message' => 'Unauthorized' ],401);
        }

        return $next($request);
    }
}
