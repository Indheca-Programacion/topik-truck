<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Manejar las peticiones OPTIONS (pre-vuelo)
        if ($request->isMethod('OPTIONS')) {
            $response = response('');
        } else {
            // Procesar la petición
            $response = $next($request);
        }

        // Aplicar los encabezados CORS
        return $response
            ->header('Access-Control-Allow-Origin', 'http://localhost:8080')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Authorization');
    }
}
