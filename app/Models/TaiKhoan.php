<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class TaiKhoan extends Authenticatable
{
    protected $table = 'tai_khoans';

    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'password',
        'hash_reset',
        'id_quyen'
    ];

}
