<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index');
    }
    public function nhanvien_home()
    {
        return view('backend.nhanvien.dashboard.index');
    }
}
