<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\LoaiBlogDatatables;
use App\Http\Controllers\Controller;
use App\Models\BlogTypes;
use App\Models\LoaiBlog;
use Illuminate\Http\Request;

class LoaiBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LoaiBlogDatatables $dataTable)
    {
        return $dataTable->render('admin.blog.loaiblog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.loaiblog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenloaiblog' => 'required',
        ]);

        $loaiblog = new BlogTypes();
        $loaiblog->tenloaiblog = $request->tenloaiblog;

        $loaiblog->save();

        return redirect()->route('admin.loaiblog.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($maloaiblog)
    {
        $loaiblog = BlogTypes::findOrFail($maloaiblog);
        return view('admin.blog.loaiblog.edit', compact('loaiblog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tenloaiblog' => 'required',
        ]);

        $loaiblog = BlogTypes::findOrFail($id);
        $loaiblog->tenloaiblog = $request->input('tenloaiblog');

        $loaiblog->save();
        return redirect()->route('admin.loaiblog.index')->with('success', 'Cập nhật loại blog thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($maloaiblog)
    {
        BlogTypes::find($maloaiblog)->delete();
        return response(['status' => 'success', 'message' => 'Xóa loại blog thành công']);
    }

    public function massDestroy(Request $request)
    {
        if (!$request->has('ids')) {
            return response()->json(['message' => 'Không có mục nào được chọn!'], 400);
        }

        $ids = $request->input('ids');

        BlogTypes::whereIn('maloaiblog', $ids)->delete();

        return response()->json(['message' => 'Xóa thành công các mục đã chọn!']);
    }
}
