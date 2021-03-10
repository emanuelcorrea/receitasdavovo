<?php
namespace App\Http\Middleware;

use Closure;

class AddHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->header('Cache-Control', 'public, max-age=15552000, immutable');
        $response->header('Accept-Encoding', 'gzip, compress, br');
        $response->header('Vary', 'User-agent');

        return $response;
    }
}
