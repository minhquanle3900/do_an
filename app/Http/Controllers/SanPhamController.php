<?php

namespace App\Http\Controllers;

use App\Http\Requests\SanPham\CreateSanPhamRequest;
use App\Http\Requests\SanPham\UpdateSanPhamRequest;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SanPhamController extends Controller
{
    public function checkSlug(Request $request)
    {
        if(isset($request->id)){
            $check = SanPham::where('slug_san_pham', $request->slug_san_pham)
                            ->where('id' , '<>' , $request->id)
                            ->orderBy('id')
                            ->first();
        }
        else{
            $check = SanPham::where('slug_san_pham', $request->slug_san_pham)->first();
        }
        if($check){
            return response()->json([
                'status'    => false,
                'message'   => 'Đã tồn tại tên Sản Phẩm!'
            ]);
        }
        else{
            return response()->json([
                'status'    => true,
                'message'   => 'Tên Sản Phẩm có thể dùng!'
            ]);
        }
    }

    public function index()
    {

        $danhMuc = DanhMuc::all();
        return view('admin.page.sanPham.index', compact('danhMuc'));
    }
    public function getData()
    {
        $data = SanPham::join('danh_mucs', 'danh_mucs.id', 'san_phams.id_danh_muc')
                        ->select('san_phams.*', 'danh_mucs.ten_danh_muc')
                        ->get();

        return response()->json([
            'status'    => 1,
            'data'   => $data,
        ]);
    }
    public function doiTrangThai(Request $request)
    {
        $SanPham = SanPham::find($request->id);

        if($SanPham) {
            $SanPham->tinh_trang = !$SanPham->tinh_trang;
            $SanPham->save();
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

    public function edit(Request $request)
    {
        $SanPham = SanPham::find($request->id);

        if($SanPham) {
            return response()->json([
                'status'    => true,
                'message'   => 'Đã lấy được dữ liệu!',
                'SanPham'    => $SanPham,
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
        $SanPham = SanPham::find($request->id);

        if($SanPham){
                $SanPham->delete();

                return response()->json([
                    'status'    => true,
                    'message'   => 'Đã xóa Sản Phẩm thành công!'
                ]);
            }
            else {
            return response()->json([
                'status'    => false,
                'message'   => 'Sản Phẩm không tồn tại!'
            ]);
        }
    }

    public function store(CreateSanPhamRequest $request)
    {
        $data = $request->all();
        $file = $request->file('hinh_anh');

        $ten_hinh_anh = Str::uuid(). '_' . $request->slug_san_pham. '.' . $file->getClientOriginalExtension();
        $data['hinh_anh']   = $ten_hinh_anh;
        $file->move('hinh-san-pham', $ten_hinh_anh);

        SanPham::create($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã tạo mới thành công!',
        ]);
    }

    public function update(UpdateSanPhamRequest $request)
    {
        $SanPham = SanPham::where('id', $request->id)->first();

        $data = $request->all();

        $SanPham->update($data);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật được thông tin!',
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
                $SanPham = SanPham::where('id', $v);

                if($SanPham) {
                    $SanPham->delete();
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
