<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        $id = session('id');
        //没有登陆
        if(empty($id)) {
<<<<<<< HEAD
            return redirect('/login')->with('msg','没有登陆');
=======
            return redirect('/admin/login')->with('msg','没有登陆');
>>>>>>> 3d5d409c642a8bdc63a60846a47e8a11ff26f503
        }
        return $next($request);
    }
}
