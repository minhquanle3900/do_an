<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KhachHang extends Authenticatable
{
    use HasFactory;
    protected $table = 'khach_hangs';

    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'password',
        'hash_reset',
        'hash_active',
        'is_active'
    ];
}
