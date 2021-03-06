<?php

namespace App\Http\Middleware;

use Closure;

class Docente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = explode('/', $request->path(), 3)[1];
        if((auth()->user()->esDocente() && auth()->user()->id() == $id)){
            return $next($request);
        }
        else{
            if(auth()->user()->esAdministrador() || auth()->user()->esAutorizado())
                return $next($request);
            else
                abort(403);

        }
    }
}
