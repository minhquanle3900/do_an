<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucNangSeeder extends Seeder
{
    public function run()
    {

        DB::table('danh_sach_quyens')->delete();
        DB::table('danh_sach_quyens')->truncate();

        DB::table('danh_sach_quyens')->insert([

            [ 'id' => '1', 'ten_chuc_nang'  => 'Tạo Mới Tài Khoản'],

            [ 'id' => '2', 'ten_chuc_nang'  => 'Xem Danh Sách Tài Khoản'],

            [ 'id' => '3', 'ten_chuc_nang'  => 'Cập Nhập Tài Khoản'],

            [ 'id' => '4', 'ten_chuc_nang'  => 'Xóa Tài Khoản'],

            [ 'id' => '5', 'ten_chuc_nang'  => 'Đổi Mật Khẩu'],

            [ 'id' => '6', 'ten_chuc_nang'  => 'Xem Danh Sách Chuyên Mục'],

            [ 'id' => '7', 'ten_chuc_nang'  => 'Thêm Mới Chuyên Mục'],

            [ 'id' => '8', 'ten_chuc_nang'  => 'Đổi Trạng Thái Chuyên Mục'],

            [ 'id' => '9', 'ten_chuc_nang'  => 'Cập Nhập Chuyên Mục'],

            [ 'id' => '10', 'ten_chuc_nang'  => 'Xóa Chuyên Mục'],

            [ 'id' => '11', 'ten_chuc_nang'  => 'Xem Danh Sách Danh Mục'],

            [ 'id' => '12', 'ten_chuc_nang'  => 'Tạo Mới Danh Mục'],

            [ 'id' => '13', 'ten_chuc_nang'  => 'Đổi Trạng Thái Danh Mục'],

            [ 'id' => '14', 'ten_chuc_nang'  => 'Cập Nhập Danh Mục'],

            [ 'id' => '15', 'ten_chuc_nang'  => 'Xóa Danh Mục'],

            [ 'id' => '16', 'ten_chuc_nang'  => 'Xem Danh Sách Sản Phẩm'],

            [ 'id' => '17', 'ten_chuc_nang'  => 'Tạo Mới Sản Phẩm'],

            [ 'id' => '18', 'ten_chuc_nang'  => 'Đổi Trạng Thái Sản Phẩm'],

            [ 'id' => '19', 'ten_chuc_nang'  => 'Cập Nhập Sản Phẩm'],

            [ 'id' => '20', 'ten_chuc_nang'  => 'Xóa Sản Phẩm'],


        ]);
    }
}
