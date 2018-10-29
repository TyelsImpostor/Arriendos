<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

// public function que redirecciona a una vista error (erros.index) cuando un usuario no autorizado intenta entrar a una de las rutas del admin

    public function handle($request, Closure $next)
    {
        $user_id = \Auth::id();

        $user = User::find($user_id);

        if ($user -> type == 'member')
        {
          abort(401);
        }

        return $next($request);
    }
}
