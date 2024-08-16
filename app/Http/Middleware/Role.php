<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {

        $newRol = explode('admin|user', $roles);
        $roleName = strtolower($request->user()->role->label);
        if (!in_array($roleName, $newRol))
            return abort(403,__('Unauthorized'));
        return $next($request);

    }
}
