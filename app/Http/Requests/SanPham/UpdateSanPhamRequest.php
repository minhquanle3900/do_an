<?php

namespace App\Http\Requests\SanPham;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSanPhamRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'                    => 'required|unique:san_phams,id',
            'ten_san_pham'          => 'required|min:5|max:30',
            'slug_san_pham'         => 'required|min:5|unique:san_phams,slug_san_pham'.$this->id,
            'tinh_trang'            => 'required|boolean',
            'gia_ban'               => 'required|numeric',
            'giam_gia'              => 'nullable|numeric|min:0|max:100',
            'hinh_anh'              => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_danh_muc'           => 'required|exists:danh_mucs,id',
            'so_luong'              => 'required|integer|min:1',
            'mo_ta'                 => 'nullable|string',
            'mo_ta_ngan'            => 'nullable|max:50|string',
        ];
    }
    public function messages()
    {
        return [
            'id.*'                              => 'Sản Phẩm đã tồn tại!',
            'ten_san_pham.required'             => 'Nhập tên Sản Phẩm bạn ơi!',
            'ten_san_pham.min'                  => 'Tên Sản Phẩm tối thiểu 5 ký tự!',
            'ten_san_pham.max'                  => 'Tên Sản Phẩm tối đa 30 ký tự!',
            'slug_san_pham.*'                   => 'Slug Sản Phẩm đã tồn tại!',
            'tinh_trang.*'                      => 'Chọn tình trạng bạn ơi!',
            'gia_ban.*'                         => 'Nhập giá bán cho từng Sản Phẩm!',
            'giam_gia.min'                      => 'Giảm giá tối thiểu là 0%',
            'giam_gia.max'                      => 'Giảm giá tối đa là 100%',
            'hinh_anh.*'                        => 'Định dạng ảnh chưa hợp lệ!',
            'id_danh_muc.*'                     => 'Không có Danh Mục trên hệ thống!',
            'so_luong.*'                        => 'Số lượng tối thiểu là 1!',
            'mo_ta.*'                           => 'Nhập mô tả cho Sản Phẩm bạn ơi',
            'mo_ta_ngan.required'               => 'Nhập mô tả ngắn bạn ơi!',
            'mo_ta_ngan.min'                    => 'Mô tả ngắn tối đa 50 ký tự thoy!',
        ];
    }
}
