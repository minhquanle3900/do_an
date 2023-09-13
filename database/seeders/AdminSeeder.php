<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('tai_khoans')->delete();
        DB::table('tai_khoans')->truncate();

        DB::table('tai_khoans')->insert([
            [
                'ho_va_ten'             => "Admin",
                'email'                 => "admin@master.com",
                'so_dien_thoai'         => "0333314445",
                'ngay_sinh'             => "2001-05-04",
                'password'              => bcrypt("123456"),
                'id_quyen'              => 2,
            ],
            [
                'ho_va_ten'             => "Admin1",
                'email'                 => "admin1@master.com",
                'so_dien_thoai'         => "0333314455",
                'ngay_sinh'             => "2002-09-03",
                'password'              => bcrypt("123456"),
                'id_quyen'              => 3,
            ]
        ]);
    }
}
