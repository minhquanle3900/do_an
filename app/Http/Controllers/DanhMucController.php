<?php

namespace App\Http\Controllers;

use App\Http\Requests\DanhMuc\CreateDanhMucRequest;
use App\Http\Requests\DanhMuc\UpdateDanhMucRequest;
use App\Models\ChuyenMuc;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function checkSlug(Request $request)
    {
        if(isset($request->id)){
            $check = DanhMuc::where('slug_danh_muc', $request->slug_danh_muc)
                            ->where('id' , '<>' , $request->id)
                            ->orderBy('id')
                            ->first();
        }
        else{
            $check = DanhMuc::where('slug_danh_muc', $request->slug_danh_muc)->first();
        }
        if($check){
            return response()->json([
                'status'    => false,
                'message'   => 'Đã tồn tại tên Danh Mục!'
            ]);
        }
        else{
            return response()->json([
                'status'    => true,
                'message'   => 'Tên Danh Mục có thể dùng!'
            ]);
        }
    }

    public function index()
    {
        $chuyenMuc  = ChuyenMuc::all();

        return view('admin.page.danhMuc.index', compact('chuyenMuc'));
    }

    public function getData()
    {
        $list = DanhMuc::join('chuyen_mucs', 'danh_mucs.id_chuyen_muc', 'chuyen_mucs.id')
                        ->select('danh_mucs.*', 'chuyen_mucs.ten_chuyen_muc')
                        // ->orderBy('danh_mucs.id')
                        ->get();
        return response()->json([
            'list'  => $list
        ]);
    }

    public function doiTrangThai(Request $request)
    {
        $danhMuc = DanhMuc::find($request->id);

        if($danhMuc) {
            $danhMuc->tinh_trang = !$danhMuc->tinh_trang;
            $danhMuc->save();
            return response()->json([
                'status'    => true,
                'message'   => 'Đã đổi trạng thái thành công!'
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Danh Mục không tồn tại!'
            ]);
        }
    }

    public function edit(Request $request)
    {
        $danhMuc = DanhMuc::find($request->id);

        if($danhMuc) {
            return response()->json([
                'status'    => true,
                'message'   => 'Đã lấy được dữ liệu!',
                'danhMuc'    => $danhMuc,
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Hệ thống đã gặp sự cố!'
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $danhMuc = DanhMuc::find($request->id);

        if($danhMuc){
                $danhMuc->delete();

                return response()->json([
                    'status'    => true,
                    'message'   => 'Đã xóa Danh mục thành công!'
                ]);
            }
            else {
            return response()->json([
                'status'    => false,
                'message'   => 'Danh mục không tồn tại!'
            ]);
        }
    }

    public function store(CreateDanhMucRequest $request)
    {
        $data = $request->all();

        DanhMuc::create($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã tạo mới Danh Mục thành công!',
        ]);
    }

    public function update(UpdateDanhMucRequest $request)
    {
        $danhmuc = DanhMuc::where('id', $request->id)->first();

        $data = $request->all();

        $danhmuc->update($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật được thông tin Danh Mục!',
        ]);
    }
    public function deleteCheckbox(Request $request)
    {
        $data = $request->all();

        $str = "";

        foreach ($data as $key => $value) {
            if(isset($value['check'])) {
                $str .= $value['id'] . ",";
            }

            $data_id = explode("," , rtrim($str, ","));

            foreach ($data_id as $k => $v) {
                $DanhMuc = DanhMuc::where('id', $v);

                if($DanhMuc) {
                    $DanhMuc->delete();
                } else {
                    return response()->json([
                        'status'    => false,
                        'message'   => 'Đã có lỗi sự cố!',
                    ]);
                }
            }
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Đã xóa thành công!',
        ]);
    }
}

