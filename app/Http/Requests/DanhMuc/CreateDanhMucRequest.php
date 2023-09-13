<?php

namespace App\Http\Requests\DanhMuc;

use Illuminate\Foundation\Http\FormRequest;

class CreateDanhMucRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_danh_muc'          => 'required|min:5|max:30',
            'slug_danh_muc'         => 'required|min:5|unique:danh_mucs,slug_danh_muc',
            'tinh_trang'            => 'required|boolean',
            'id_chuyen_muc'         => 'required|exists:chuyen_mucs,id',
        ];
    }
    public function messages()
    {
        return [
            'ten_danh_muc.required'          => 'Nhập tên Danh Mục bạn ơi!',
            'ten_danh_muc.min'               => 'Tên Danh Mục tối thiểu 5 ký tự!',
            'ten_danh_muc.max'               => 'Tên Danh Mục tối đa 30 ký tự!',
            'slug_danh_muc.*'                => 'Slug Danh Mục đã tồn tại!',
            'tinh_trang.*'                   => 'Chọn tình trạng bạn ơi!',
            'id_chuyen_muc.*'                => 'Không có Chuyên Mục trên hệ thống!',
        ];
    }
}
