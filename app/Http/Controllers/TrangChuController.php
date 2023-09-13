<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function index()
    {
        $sanPham = SanPham::where('tinh_trang', 1)->get();
        return view('client.share.homepage', compact('sanPham'));
    }

    public function contact()
    {
        return view('client.page.contact');
    }
    public function product($id)
    {
        $sanPham = SanPham::select('san_phams.*', 'danh_mucs.*', 'chuyen_mucs.ten_chuyen_muc as ten_chuyen_muc')
                          ->join('danh_mucs', 'san_phams.id_danh_muc', '=', 'danh_mucs.id')
                          ->join('chuyen_mucs', 'danh_mucs.id_chuyen_muc', '=', 'chuyen_mucs.id')
                          ->find($id);

        return view('client.page.product', compact('sanPham'));
    }
    public function allShop()
    {
        return view('client.page.allShop');
    }
}
