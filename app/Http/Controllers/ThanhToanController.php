<?php

namespace App\Http\Controllers;

use App\Models\ThanhToan;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    public function viewThanhToan()
    {
        return view('client.page.thanh_toan.index');
    }
}
