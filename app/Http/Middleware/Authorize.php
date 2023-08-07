<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            $request->post->author()->isNot($request->user()) &&
            ($request->routeIs('post.edit') ||
                $request->routeIs('post.update') ||
                $request->routeIs('post.destroy')
            )
        ) {
            abort(401);
        }

        return $next($request);
    }
}
