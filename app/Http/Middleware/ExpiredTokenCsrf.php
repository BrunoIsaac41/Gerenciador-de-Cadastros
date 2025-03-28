<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpFoundation\Response;

class ExpiredTokenCsrf
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        try{
            return $next($request);
        }
        catch(TokenMismatchException $e){
            return redirect()->route('login')->with('error', 'Sua sessão expirou. Faça login novamente.');
        }
    }
}
