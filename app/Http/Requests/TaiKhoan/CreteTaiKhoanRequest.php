<?php

namespace App\Http\Requests\TaiKhoan;

use Illuminate\Foundation\Http\FormRequest;

class CreteTaiKhoanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ho_va_ten'             => 'required|min:10|max:255|unique:tai_khoans,ho_va_ten',
            'password'              => 'required|string|min:6',
            'email'                 => 'required|email|unique:tai_khoans.email',
            'id_quyen'              => 'required|integer',
            'dia_chi'               => 'nullable|string',
            'ngay_sinh'             => 'nullable|date',
        ];
    }

    public function messages()
    {
        return [
            'ho_va_ten.required'                => 'Cần nhập đầy đủ Họ và Tên!',
            'ho_va_ten.min'                     => 'Họ và Tên tối thểu 10 ký tự!',
            'ho_va_ten.max'                     => 'Họ và Tên tối thểu 255 ký tự!',
            'ho_va_ten.unique'                  => 'Trùng lặp họ và tên!',
            'password.*'                        => 'Mật khẩu có ít nhất 6 ký tự',
            'email.*'                           => 'Kiểm tra lại Email của bạn đã nhập!',
            'id_quyen.*'                        => 'ID Quyền không được trống!',
            'dia_chi.*'                         => 'Cần nhập địa chỉ của Bạn!',
            'ngay_sinh.*'                       => 'Cần nhập ngày sinh của Bạn!',
        ];
    }
}
