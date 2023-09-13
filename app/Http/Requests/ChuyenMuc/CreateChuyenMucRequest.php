<?php

namespace App\Http\Requests\ChuyenMuc;

use Illuminate\Foundation\Http\FormRequest;

class CreateChuyenMucRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_chuyen_muc'        => 'required|min:5|max:30',
            'slug_chuyen_muc'       => 'required|min:5|unique:chuyen_mucs,slug_chuyen_muc',
            'tinh_trang'            => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'ten_chuyen_muc.required' => 'Nhập tên Chuyên Mục bạn ơi!',
            'ten_chuyen_muc.max'      => 'Tên Chuyên Mục tối đa 30 ký tự!',
            'ten_chuyen_muc.min'      => 'Tên Chuyên Mục tối thiểu 5 ký tự!',
            'slug_chuyen_muc.*'       => 'Slug Chuyên Mục đã tồn tại!',
            'tinh_trang.*'            => 'Chọn tình trạng bạn ơi!',
        ];
    }
}
