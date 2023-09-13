<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = "san_phams";

    protected $fillable = [
        'ten_san_pham',
        'slug_san_pham',
        'gia_ban',
        'giam_gia',
        'hinh_anh',
        'tinh_trang',
        'id_danh_muc',
        'so_luong',
        'mo_ta',
        'mo_ta_ngan',
    ];
}
