<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        $check = Auth::guard('login')->check();
        if($check){
            return $next($request);
        }
        else{
            toastr()->error("Đăng nhập đã bạn ơi?");
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
