<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ValidarClaveSistema
{
    public function handle(Request $request, Closure $next)
    {
        $claveEncriptada = $request->header('X-SYSTEM-KEY') 
                           ?? $request->input('system_key');

        if (!$claveEncriptada) {
            return response()->json([
                'responseJSON' => 'Clave de acceso no proporcionada'
            ], 403);
        }

        try {
            $claveDecodificada = base64_decode($claveEncriptada);

        } catch (\Exception $e) {
            return response()->json([
                'responseJSON' => 'Clave inválida o malformada'
            ], 403);
        }

        $claveReal = env('PHP_SYSTEM_SECRET');

        if ($claveDecodificada !== $claveReal) {
            return response()->json([
                'responseJSON' => 'Clave incorrecta'
            ], 403);
        }

        return $next($request);
    }
}