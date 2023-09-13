<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use App\Models\KhachHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GioHangController extends Controller
{
    public function addToCart(Request $request)
    {
        $sanPham        = SanPham::find($request->id_san_pham);
        $khachHang      = Auth::guard('resgiter')->user()->id;

        $cartItem = GioHang::where('id_khach_hang', $khachHang)
            ->where('id_san_pham', $sanPham)
            ->first();

            if ($cartItem) {
                $cartItem->increment('so_luong');
            } else {
                // Nếu không, tạo một mục giỏ hàng mới
                GioHang::create([
                    'id_khach_hang' => $khachHang,
                    'id_san_pham' => $sanPham->id,
                    'so_luong' => 1,
                    'tinh_trang' => 1,
                ]);
            }

            // Cập nhật số lượng sản phẩm trong giỏ hàng trên thanh header
            $cartCount = GioHang::where('id_khach_hang', $khachHang)->sum('so_luong');

            // Cập nhật số lượng sản phẩm trong giỏ hàng trong session
            session(['cart_count' => $cartCount]);

            return response()->json([
                'message'   => 'Đã thêm vào giỏ!',
            ]);
    }
}
