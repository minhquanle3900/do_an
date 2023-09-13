<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaiKhoan\CreteTaiKhoanRequest;
use App\Models\Quyen;
use App\Models\TaiKhoan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class TaiKhoanController extends Controller
{
    public function viewLogin()
    {
        $check = Auth::guard('login')->check();
        if($check) {
            return redirect('/admin/danh-muc');
        } else {
            return view('admin.page.login.index');
        }
    }

    public function actionLogin(Request $request)
    {
        $check =  Auth::guard('login')->attempt([
                                        'email'     => $request->email,
                                        'password'  => $request->password
                                    ]);
                                    // dd($check);
        if($check) {
            toastr()->success("Đã đăng nhập thành công!");
            return redirect('/admin/danh-muc');
        } else {
            toastr()->error("Tài khoản hoặc mật khẩu không đúng!");
            return redirect('/admin/login');
        }
    }
    public function viewLostPass()
    {
        return view('admin.page.login.lostpass_index');
    }
    public function actionLostPass(Request $request)
    {
        $taiKhoan   = TaiKhoan::where('email', $request->email)->first();
        if($taiKhoan) {
            $now    = Carbon::now();
            $time   = $now->diffInMinutes($taiKhoan->updated_at);
            if(!$taiKhoan->hash_reset || $time > 0) {
                $taiKhoan->hash_reset = Str::uuid();
                $taiKhoan->save();
            }
            toastr()->success("Vui lòng kiểm tra email!");
            return redirect('/admin/login');

        } else {
            toastr()->error("Tài khoản không tồn tại!");
            return redirect('/admin/lost-password');
        }
    }
    public function viewUpdatePass($hash_reset)
    {
        $taiKhoan = TaiKhoan::where('hash_reset', $hash_reset)->first();
        if($taiKhoan){
            return view('admin.page.login.updatepass_index', compact('hash_reset'));
        }
        else{
            toastr()->error("Dữ liệu không tồn tại!");
            return redirect('/admin/login');
        }
    }
    public function actionUpdatePass(Request $request)
    {
        if($request->password != $request->re_password) {
            toastr()->error('Mật khẩu không trùng nhau!');
            return redirect()->back();
        }
        $taiKhoan = TaiKhoan::where('hash_reset', $request->hash_reset)->first();
        if(!$taiKhoan) {
            toastr()->error('Dữ liệu không tồn tại!');
            return redirect()->back();
        } else {
            $taiKhoan->password   = bcrypt($request->password);
            $taiKhoan->hash_reset = NULL;
            $taiKhoan->save();
            toastr()->success('Đã đổi mật khẩu thành công!');
            return redirect('/admin/login');
        }
    }
    public function actionLogout()
    {
        Auth::guard('login')->logout();
        toastr()->success("Đăng xuất thành công!");
        return redirect('/admin/login');
    }

    public function index()
    {
        $quyen = Quyen::get();
        return view('admin.page.taiKhoan.index', compact('quyen'));
    }

    public function store(CreteTaiKhoanRequest $request)
    {
        $data = $request->all();
        $data['password'] =  bcrypt($request->password);
        TaiKhoan::create($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã tạo tài khoản thành công!'
        ]);
    }

    public function getData()
    {
        $list = TaiKhoan::leftjoin('quyens', 'tai_khoans.id_quyen', 'quyens.id')
        ->select('tai_khoans.*', 'quyens.ten_quyen')
        ->get();
        return response()->json([
            'list'  => $list
        ]);
    }

    public function destroy(Request $request)
    {
        $taiKhoan = TaiKhoan::where('id', $request->id)->first();
        $taiKhoan->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Đã xóa thành công!',
        ]);
    }

    public function update(Request $request)
    {
        $data    = $request->all();
        $taiKhoan = TaiKhoan::find($request->id);
        $taiKhoan->update($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật thành công!',
        ]);
    }

    public function changePassword(Request $request)
    {
        $data = $request->all();
        if(isset($request->password)){
            $taiKhoan = TaiKhoan::find($request->id);
            $data['password'] = bcrypt($data['password_new']);
            $taiKhoan->password  = $data['password'];
            $taiKhoan->save();
        }
        return response()->json([
            'status'    => 1,
            'message'   => 'Đã cập nhật mật khẩu thành công!',
        ]);
    }
}
