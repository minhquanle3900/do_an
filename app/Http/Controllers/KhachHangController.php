<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KhachHangController extends Controller
{
    public function actionLogout()
    {
        Auth::guard('resgiter')->logout();
        toastr()->success("Đăng xuất thành công!");
        return redirect('/client/resgiter');
    }
    public function viewResgiter()
    {
        // $check = Auth::guard('resgiter')->check();
        // if($check) {
        //     return redirect('/');
        // } else {
            return view('client.page.resgiter.index');
        // }
    }
    public function resgiter(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['password'] =  bcrypt($request->password);

        KhachHang::create($data);
        toastr()->success("Đã đăng ký thành công!");
        return redirect('/client/resgiter');
    }
    public function actionResgiter(Request $request)
    {
        $check = Auth::guard('resgiter')->attempt([
            'email'     => $request->email,
            'password'  => $request->password,
        ]);
        // dd($check);
        if($check) {
            toastr()->success("Đã đăng nhập thành công!");
            return redirect('/');
        }
        else {
            toastr()->error("Tài khoản hoặc mật khẩu không đúng!");
            return redirect('/client/resgiter');
        }
    }
    public function viewLostPass()
    {
        return view('client.page.resgiter.lost_pass');
    }
    public function actionLostPass(Request $request)
    {

        $khachHang = KhachHang::where('email', $request->email)->first();

        if($khachHang) {
            $now    = Carbon::now();
            $time   = $now->diffInMinutes($khachHang->updated_at);
            if(!$khachHang->hash_reset || $time > 0) {
                $khachHang->hash_reset = Str::uuid();
                $khachHang->save();
            }
            toastr()->success("Vui lòng kiểm tra email!");
            return redirect('/client/resgiter');
        }
        else {
            toastr()->error("Tài khoản không tồn tại!");
            return redirect('/client/resgiter/lost-pass');
        }
    }
    public function viewUpdatePass()
    {
        return view('client.page.resgiter.update_pass');
    }
    public function actionUpdatePass(Request $request)
    {
        if($request->password != $request->re_password) {
            toastr()->error('Mật khẩu không trùng nhau!');
            return redirect()->back();
        }
        $taiKhoan = KhachHang::where('hash_reset', $request->hash_reset)->first();
        if(!$taiKhoan) {
            toastr()->error('Dữ liệu không tồn tại!');
            return redirect()->back();
        } else {
            $taiKhoan->password   = bcrypt($request->password);
            $taiKhoan->hash_reset = NULL;
            $taiKhoan->save();
            toastr()->success('Đã đổi mật khẩu thành công!');
            return redirect('/client/resgiter');
        }
    }
}
