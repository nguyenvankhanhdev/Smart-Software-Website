<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function nhanvien_home()
    {
        return view('backend.nhanvien.dashboard.index');
    }
}
