<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('LoggedAdmin') && ($request->path() !='Admin' )){
            return redirect('/Admin')->with('fail','You must be logged in');
        }

        if(session()->has('LoggedAdmin') && ($request->path() == 'Admin') ){
            if(session('Role') == '1')
                return redirect('/Admin/employee');
            else{
                return redirect('/Admin/owens');
            }
        }


        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
