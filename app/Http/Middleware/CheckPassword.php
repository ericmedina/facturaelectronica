<?php

namespace App\Http\Middleware;

use Closure;
use Laracasts\Flash\FlashNotifier;
use Illuminate\Support\Facades\Auth;

class CheckPassword
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
        if($request->nueva_password != $request->repetir_password){
            return flash("La nueva contraseña debe coincidir en ambos campos.")->error();
        }
        return $next($request);
    }
}
