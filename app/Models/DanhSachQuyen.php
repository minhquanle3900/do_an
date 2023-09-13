<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhSachQuyen extends Model
{
    use HasFactory;
    protected $table = 'danh_sach_quyens';

    protected $fillable  = [
        'ten_chuc_nang'
    ];
}
