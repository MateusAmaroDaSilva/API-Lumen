<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonBodyMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        if ($this->isJsonRequest($request)) {
            $data = json_decode($request->getContent(), true);
            if (is_array($data) && !empty($data)) {
                $request->merge($data);
            }
        }
        return $next($request);
    }

    private function isJsonRequest(Request $request): bool
    {
        $contentType = $request->header('Content-Type', '');
        return str_contains($contentType, 'application/json');
    }
}
