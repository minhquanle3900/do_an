<?php

namespace App\Http\Controllers;

use App\Models\DanhSachQuyen;
use App\Models\Quyen;
use Illuminate\Http\Request;

class QuyenController extends Controller
{
    public function index()
    {
        return view('admin.page.quyen.index');
    }

    public function getData()
    {
        $list       = Quyen::get();

        return response()->json([
            'list'          => $list,
        ]);
    }

    public function getDataQuyen()
    {
        $chucNang = DanhSachQuyen::get();

        return response()->json([
            'data'    => $chucNang ,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Quyen::create($data);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo mới Quyền thành công!',
        ]);
    }

    public function update(Request $request)
    {
        $quyen = Quyen::where('id', $request->id)->first();

        $data = $request->all();

        $quyen->update($data);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã cập nhập Quyền thành công!',
        ]);
    }

    public function destroy(Request $request)
    {
        if($request->id == 1){
            return response()->json([
                'status'    => 2,
                'message'   => 'Không thể xóa quyền ADMIN!',
            ]);
        }
        Quyen::find($request->id)->delete();

        return response()->json([
            'status'    => 1,
            'message'   => 'Xóa quyền thành công!',
        ]);
    }

    public function search(Request $request)
    {
        $list = Quyen::select('quyens.*')
                    ->where('ten_quen', 'like', '%' . $request->key_search . '%')
                    ->get();
        return response()->json([
            'list'  => $list
        ]);
    }
    public function deleteCheckbox(Request $request)
    {
        $x          = $this->checkRule(11);
        if($x)  {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn không đủ quyền',
            ]);
        }
        $data = $request->all();
        $str = "";
        foreach ($data as $key => $value) {
            if(isset($value['check'])){
                if($value['id'] == 1 && $value['check'] == true){
                    return response()->json([
                        'status'    => false,
                        'message'   => 'Vui lòng không chọn ADMIN để xóa thành công!',
                    ]);
                }
            }
            if(isset($value['check'])) {
                $str .= $value['id'] . ",";
            }

            $data_id = explode("," , rtrim($str, ","));

            foreach ($data_id as $k => $v) {
                $quyen = Quyen::where('id', $v);

                if($quyen) {
                    $quyen->delete();
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

    public function phanQuyen(Request $request)
    {
        $quyen = Quyen::find($request->id_quyen);
        $list_id_quyen = implode(",", $request->list_phan_quyen);

        $quyen->update([
            'list_id_quyen' => $list_id_quyen
        ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Cập nhập phân quyền cho Quyền' . $quyen->ten_quyen . "thành công",
        ]);
    }
}
