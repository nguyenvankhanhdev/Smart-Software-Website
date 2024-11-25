<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\LoaiKhachHangDataTable;
use App\Http\Controllers\Controller;
use App\Models\LoaiKhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoaiKhacHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LoaiKhachHangDataTable $dataTable)
    {
        return $dataTable->render('admin.loaikhachhang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loaikhachhang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenloaikhachhang' => 'required',
            'apply_price'=> 'required|numeric',
        ], [
            'tenloaikhachhang.required' => 'Tên loại khách hàng không được để trống',
            'apply_price.required' => 'Mức áp dụng giá không được để trống',
            'apply_price.numeric' => 'Mức áp dụng giá phải là số',
        ]);
        $loaikh = new LoaiKhachHang();
        $loaikh->tenloaikhachhang = $request->tenloaikhachhang;
        $loaikh->mucapdunggia = $request->apply_price;
        $loaikh->save();
        toastr()->success('Thêm loại khách hàng thành công');
        return redirect()->route('admin.loaikh.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loaikh = LoaiKhachHang::find($id);
        $loaikh->delete();
        return redirect()->route('admin.loaikh.index');
    }
}
