<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChuyenMuc\CreateChuyenMucRequest;
use App\Http\Requests\ChuyenMuc\UpdateChuyenMucRequest;
use App\Models\ChuyenMuc;
use Illuminate\Http\Request;

class ChuyenMucController extends Controller
{
    public function checkSlug(Request $request)
    {
        if(isset($request->id)){
            $check = ChuyenMuc::where('slug_chuyen_muc', $request->slug_chuyen_muc)
                            ->where('id' , '<>' , $request->id)
                            ->orderBy('id')
                            ->first();
        }
        else{
            $check = ChuyenMuc::where('slug_chuyen_muc', $request->slug_chuyen_muc)->first();
        }
        if($check){
            return response()->json([
                'status'    => false,
                'message'   => 'Đã tồn tại tên Chuyên Mục!'
            ]);
        }
        else{
            return response()->json([
                'status'    => true,
                'message'   => 'Tên Chuyên Mục có thể dùng!'
            ]);
        }
    }

    public function index()
    {
        return view('admin.page.chuyenMuc.index');
    }

    public function store(CreateChuyenMucRequest $request)
    {
        $data = $request->all();

        ChuyenMuc::create( $data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã tạo mới Chuyên Mục thành công!',
        ]);
    }

    public function getData()
    {
        $list = ChuyenMuc::get();

        return response()->json([
            'list'  => $list
        ]);
    }

    public function update(UpdateChuyenMucRequest $request)
    {
        $chuyenMuc = ChuyenMuc::where('id', $request->id)->first();

        $data = $request->all();

        $chuyenMuc->update($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật được thông tin!',
        ]);
    }

    public function destroy(Request $request)
    {
        $chuyenMuc = ChuyenMuc::find($request->id);

        if($chuyenMuc) {
            $chuyenMuc->delete();
            return response()->json([
                'status'    => true,
                'message'   => 'Đã xóa chuyên mục thành công!'
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Chuyên mục không tồn tại!'
            ]);
        }
    }

    public function deleteCheckBox(Request $request)
    {
        $data = $request->all();

        $str = "";

        foreach ($data as $key => $value) {
            if(isset($value['check'])) {
                $str .= $value['id'] . ",";
            }

            $data_id = explode("," , rtrim($str, ","));

            foreach ($data_id as $k => $v) {
                $chuyenMuc =ChuyenMuc::where('id', $v);

                if($chuyenMuc) {
                    $chuyenMuc->delete();
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

    public function doiTrangThai(Request $request)
    {
        $chuyenMuc =ChuyenMuc::find($request->id);

        if($chuyenMuc) {
            $chuyenMuc->tinh_trang = !$chuyenMuc->tinh_trang;
            $chuyenMuc->save();
            return response()->json([
                'status'    => true,
                'message'   => 'Đã đổi trạng thái thành công!'
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Món ăn không tồn tại!'
            ]);
        }
    }
}
