<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * hotelfratelli.com.mx (sin www) es el dominio canónico. www.hotelfratelli.com.mx
 * respondía con contenido idéntico sin redirigir, lo que dejó esa versión indexada
 * en Google por separado — y bloqueada en robots.txt, así que Google nunca pudo
 * volver a rastrearla para tomar el favicon ni la etiqueta canonical. Este 301
 * consolida todo el tráfico/rastreo hacia el dominio canónico.
 */
class RedirectWww
{
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHost();

        if (str_starts_with($host, 'www.')) {
            $canonicalHost = substr($host, 4);
            $url = $request->getScheme() . '://' . $canonicalHost . $request->getRequestUri();

            return redirect()->to($url, 301);
        }

        return $next($request);
    }
}
