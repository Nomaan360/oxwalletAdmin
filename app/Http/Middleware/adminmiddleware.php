<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminmiddleware
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
        $type = $request->input("type");
        if($type != "API"){
            $user_id = $request->session()->get('adminid');
            if(empty($user_id)){
                return redirect(route('login'));
            }
        }
        return $next($request);
    }
}
