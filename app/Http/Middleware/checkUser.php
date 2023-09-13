<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkUser
{
    public function handle(Request $request, Closure $next)
    {
        $check = Auth::guard('resgiter')->check();
        if($check == true){
            return $next($request);
        }
        else{
            toastr()->error("Tài khoản đã tồn tại-1!");
            return redirect('/client/resgiter');
        }
    }
}
