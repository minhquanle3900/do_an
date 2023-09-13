<?php

use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\QuyenController;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Route;

// Route::get('/', [TestController::class, 'index']);

Route::get('/', [TrangChuController::class, 'index']);
Route::get('/contact', [TrangChuController::class, 'contact']);
Route::get('/product/{id}', [TrangChuController::class, 'product']);
Route::get('/all-shop', [TrangChuController::class, 'allShop']);


Route::get('/admin/login', [TaiKhoanController::class, 'viewLogin']);
Route::post('/admin/login', [TaiKhoanController::class, 'actionLogin']);

Route::get('/admin/lost-password', [TaiKhoanController::class, 'viewLostPass']);
Route::post('/admin/lost-password', [TaiKhoanController::class, 'actionLostPass']);

Route::get('/admin/update-password/{hash_reset}', [TaiKhoanController::class, 'viewUpdatePass']);
Route::post('/admin/update-password', [TaiKhoanController::class, 'actionUpdatePass']);

Route::group(['prefix' => '/client/resgiter'], function () {
    Route::get('/', [KhachHangController::class, 'viewResgiter']);
    Route::post('/', [KhachHangController::class, 'resgiter']);
    Route::post('/action', [KhachHangController::class, 'actionResgiter']);
    Route::get('/lost-pass', [KhachHangController::class, 'viewLostPass']);
    Route::post('/lost-pass', [KhachHangController::class, 'actionLostPass']);
    Route::get('/update', [KhachHangController::class, 'viewUpdatePass']);
    Route::post('/update/{hash_reset}', [KhachHangController::class, 'actionUpdatePass']);
    Route::post('/update', [KhachHangController::class, 'actionUpdatePass']);
});

Route::group(['prefix' => '/client'], function () { //, 'middleware' => 'checkUser'
    Route::get('/logout', [KhachHangController::class, 'actionLogout']);

    Route::group(['prefix' => '/gio-hang'], function () {
        Route::post('/add-to-cart', [GioHangController::class, 'addToCart']);
        Route::post('/update-cart', [GioHangController::class, 'updateCart']);
    });

    Route::group(['prefix' => '/thanh-toan'], function () {
        Route::get('/', [ThanhToanController::class, 'viewThanhToan']);
        Route::post('/data', [ThanhToanController::class, 'getData']);
    });
});


Route::group(['prefix' => '/admin'], function () { //,'middleware' => 'checkLogin'
    Route::get('/logout', [TaiKhoanController::class, 'actionLogout']);

    Route::group(['prefix' => '/chuyen-muc'], function () {
        Route::get('/', [ChuyenMucController::class, 'index']);
        Route::get('/data', [ChuyenMucController::class, 'getData']);
        Route::post('/create', [ChuyenMucController::class, 'store']);
        Route::post('/update', [ChuyenMucController::class, 'update']);
        Route::post('/check-slug',[ChuyenMucController::class, 'checkSlug']);
        Route::post('/delete', [ChuyenMucController::class, 'destroy']);
        Route::post('/doi-trang-thai', [ChuyenMucController::class, 'doiTrangThai']);
        Route::post('/delete-all', [ChuyenMucController::class, 'deleteCheckbox']);
    });

    Route::group(['prefix' => '/danh-muc'], function () {
        Route::get('/', [DanhMucController::class, 'index']);
        Route::get('/data', [DanhMucController::class, 'getData']);
        Route::post('/create', [DanhMucController::class, 'store']);
        Route::post('/update', [DanhMucController::class, 'update']);
        Route::post('/delete', [DanhMucController::class, 'destroy']);
        Route::post('/check-slug',[DanhMucController::class, 'checkSlug']);
        Route::post('/doi-trang-thai', [DanhMucController::class, 'doiTrangThai']);
        Route::post('/delete-all', [DanhMucController::class, 'deleteCheckbox']);
    });

    Route::group(['prefix' => '/san-pham'], function () {
        Route::get('/', [SanPhamController::class, 'index']);
        Route::get('/data', [SanPhamController::class, 'getData']);
        Route::post('/create', [SanPhamController::class, 'store']);
        Route::post('/check-slug',[SanPhamController::class, 'checkSlug']);
        Route::post('/update', [SanPhamController::class, 'update']);
        Route::post('/delete', [SanPhamController::class, 'destroy']);
        Route::post('/doi-trang-thai', [SanPhamController::class, 'doiTrangThai']);
        Route::post('/delete-all', [SanPhamController::class, 'deleteCheckbox']);
    });

    Route::group(['prefix' => '/tai-khoan'], function () {
        Route::get('/', [TaiKhoanController::class, 'index']);
        Route::post('/create', [TaiKhoanController::class, 'store']);
        Route::get('/data', [TaiKhoanController::class, 'getData']);
        Route::post('/delete', [TaiKhoanController::class, 'destroy']);
        Route::post('/update', [TaiKhoanController::class, 'update']);
        Route::post('/change-password', [TaiKhoanController::class, 'changePassword']);
    });

    Route::group(['prefix' => '/quyen'], function () {
        Route::get('/', [QuyenController::class, 'index']);
        Route::get('/data', [QuyenController::class, 'getData']);
        Route::get('/data-quyen', [QuyenController::class, 'getDataQuyen']);
        Route::post('/delete', [QuyenController::class, 'destroy']);
        Route::post('/create', [QuyenController::class, 'store']);
        Route::post('/update', [QuyenController::class, 'update']);
        Route::post('/search', [QuyenController::class, 'search']);
        Route::post('/delete-all', [QuyenController::class, 'deleteCheckbox']);
        Route::post('/phan-quyen', [QuyenController::class, 'phanQuyen']);
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
