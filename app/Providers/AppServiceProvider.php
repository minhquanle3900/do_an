<?php

namespace App\Providers;

use App\Models\ChuyenMuc;
use App\Models\DanhMuc;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $chuyenMuc = ChuyenMuc::get();
        $danhMuc = DanhMuc::get();
        view()->share('chuyenMuc', $chuyenMuc);
        view()->share('danhMuc', $danhMuc);
    }
}
