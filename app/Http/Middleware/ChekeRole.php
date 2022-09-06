<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChekeRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
    $roles=$this->getRequiredRoleRoute($request->route());
    if($request->user()->hasRole($roles)||!$roles){
         return $next($request);
    }

       return redirect()->route('noPersmisssion');
    }
    private function getRequiredRoleForRoute($route)
    {
        $actions=$route->getAction();
        return isset($actions['roles']) ? $actions['roles']:null;
    }
}
