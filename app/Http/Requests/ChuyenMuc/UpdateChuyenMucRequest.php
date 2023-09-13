<?php

namespace App\Http\Requests\ChuyenMuc;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChuyenMucRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'                    => 'required|exists:chuyen_mucs,id',
            'ten_chuyen_muc'        => 'required|max:30|min:5',
            'slug_chuyen_muc'       => 'required|min:5|unique:chuyen_mucs,slug_chuyen_muc' .$this->id,
            'tinh_trang'            => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'id'                            => 'Chuyên Mục đã tồn tại!',
            'ten_chuyen_muc.required'       => 'Cần nhập tên Chuyên Mục!',
            'ten_chuyen_muc.max'            => 'Tên Chuyên Mục tối đa 30 ký tự!',
            'ten_chuyen_muc.min'            => 'Tên Chuyên Mục tối thiểu 5 ký tự!',
            'slug_chuyen_muc.*'             => 'Slug Chuyên Mục đã tồn tại!',
            'tinh_trang.*'                  => 'Chọn tình trạng bạn ơi!',
        ];
    }
}
